<?php
    include("../Modelo/Funcionario.php");
    include("../Modelo/Cuenta.php");
    $cue=new Cuenta();
    $func=new  Funcionario();
    
    $cood = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $mail = $_POST['mail'];
    $oficina = $_POST['oficina'];
    $cuenta = $_POST['cuenta'];
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];
    try {
        
        $cue->Insertar_Cuenta($cood,$usuario,$contrasena,$cuenta);
        $func->Insertar_Funcionario($cood,$nombre,$apellido,$documento,$mail,$oficina,$cood);
        
    } catch (\Exception $e) {
        $e ->getMessage();
    }

?>