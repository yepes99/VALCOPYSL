<?php
// require_once __DIR__ . '/../app/modelo/classModelo.php';
// require_once __DIR__ . '/../app/modelo/classConsultas.php';
// require_once __DIR__ . '/../app/libs/config.php';
require_once __DIR__ . './app/libs/bGeneral.php';
require_once __DIR__ . './app/controlador/controller.php';

session_start(); // Se inicia la sesion

/**
 * Enrutamiento
 * controller se refiere a controller.php
 * Controller.php se refiere a la clase Controller dentro de controller.php
 * action lo que va a hacer
 * home la función home dentro de la clase controller
 **/

$map = array(
    'inicio' => array('controller' => 'Controller', 'action' => 'inicio'),
);

// Parseo de la ruta
if (isset($_GET['ctl'])) {
    if (isset($map[$_GET['ctl']])) {
        $ruta = $_GET['ctl'];
    } else {
        $ruta = "error";
    }
} else {
    $ruta = 'inicio';
}
$controlador = $map[$ruta];

/*
Comprobamos si el metodo correspondiente a la acción relacionada con el valor de ctl existe,
si es así ejecutamos el método correspondiente.
En caso de no existir cabecera de error.
*/
if (method_exists($controlador['controller'], $controlador['action'])) {
    call_user_func(array(
        new $controlador['controller'],
        $controlador['action']
    ));
} else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>Error 404: El controlador <i>' .
        $controlador['controller'] .
        '->' .
        $controlador['action'] .
        '</i> no existe</h1></body></html>';
}
