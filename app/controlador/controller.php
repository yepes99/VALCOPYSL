
<?php

class Controller {
    public function inicio() {
   
        require __DIR__ . '/../../web/templates/inicio.php';
        
    }
    public function registrarse(){
        require __DIR__ . '/../../web/templates/registrarse.php';
    }
}
