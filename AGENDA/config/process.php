<?php
session_start();
include_once("connection.php"); // Corrected filename
include_once("url.php");

$data = $_POST;

// Check if data is not empty
if (!empty($data)) {

    // Create contact
    if ($data["type"] === "create") {
        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];

        $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato criado com sucesso!";
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    } 
    // Edit contact
    else if ($data["type"] === "edit") {
        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];
        $id = $data["id"];

        $query = "UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato atualizado com sucesso!";
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    } 
    // Delete contact
    else if ($data["type"] === "delete") {
        $id = $data["id"];

        $query = "DELETE FROM contacts WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato removido com sucesso!";
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    }
}

// Fetch contact data if ID is provided
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM contacts WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $contact = $stmt->fetch();
} else {
    // Fetch all contacts
    $query = "SELECT * FROM contacts";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $contacts = $stmt->fetchAll();
}

// Close connection
$conn = NULL;
?>
