<?php 

class usuarioControlador{
    public function login()
    {
        if (isset($_POST["logUsuario"])) {
           $usuario = $_POST["loginUsuario"];
           $password = crypt($_POST["loginPassword"], '');
           $respuesta = usuarioModelo::mdl
        }
    }
}