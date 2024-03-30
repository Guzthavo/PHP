<?php

namespace app;

class Route {

   
    public function defaultRoutes() {
        $routes = [
            'home' => [
                'route' => '/',
                'controller' => 'indexControl.php',
                'action' => 'index'
            ],
            'sobre_nos' => [
                'route' => '/sobre-nos',
                'controller' => 'AboutUsController.php',
                'action' => 'index'
            ]
        ];
     
?>
