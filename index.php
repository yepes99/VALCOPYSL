<?php
// require_once __DIR__ . '/../app/modelo/classModelo.php';
// require_once __DIR__ . '/../app/modelo/classConsultas.php';
// require_once __DIR__ . '/../app/libs/config.php';
require_once __DIR__ . './app/libs/bGeneral.php';
require_once __DIR__ . './app/controlador/controller.php';

session_start(); // Se inicia la sesión

/**
 * Enrutamiento
 * controller se refiere a controller.php
 * Controller.php se refiere a la clase Controller dentro de controller.php
 * action lo que va a hacer
 * home la función home dentro de la clase controller
 **/

$map = array(
    'inicio' => array('controller' => 'Controller', 'action' => 'inicio'),
    'registrarse' => array('controller' => 'Controller', 'action' => 'registrarse'),
);

// Parseo de la ruta
if (isset($_GET['ctl']) && isset($map[$_GET['ctl']])) {
    $ruta = $_GET['ctl'];
} else {
    $ruta = 'inicio';
}

$controlador = isset($map[$ruta]) ? $map[$ruta] : null;

/*
Comprobamos si el método correspondiente a la acción relacionada con el valor de ctl existe,
si es así ejecutamos el método correspondiente.
En caso de no existir, cabecera de error.
*/
if ($controlador && method_exists($controlador['controller'], $controlador['action'])) {
    call_user_func(array(
        new $controlador['controller'],
        $controlador['action']
    ));
} else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>Error 404: El controlador <i>' .
        ($controlador ? $controlador['controller'] . '->' . $controlador['action'] : 'desconocido') .
        '</i> no existe</h1></body></html>';
}
