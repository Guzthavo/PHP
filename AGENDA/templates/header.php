<?php
include_once("config/url.php");
include_once("config/connection.php");
include_once("config/process.php");

// Limpando a mensagem
if (isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
            <img src="<?= $BASE_URL ?>img/calendar2-week.svg" alt="Agenda">
        </a>
        <div class="navbar-nav">
            <a class="nav-link active" id="agenda-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
            <a class="nav-link active href="<?= $BASE_URL ?>create.php">Adicionar Contato</a>
        </div>
    </nav>
</header>
