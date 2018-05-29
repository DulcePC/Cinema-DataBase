<?php

if($_POST){
    // $datos = array();
    // $datos[]= $_POST;
    // $datosJson = json_encode($datos);
    // file_put_contents('datos.dat',$datosJson);

    // $nombre=$_POST['nombre'];
    // $apellido=$_POST['apellido'];
    // $cedula=$_POST['cedula'];   
    // $datos = array ("nombre" => $nombre, "apellido" => $apellido,"cedula" => $cedula); 

    // $datos = json_encode($datos);
    // $archivo = glob('archivo.json');
    // file_put_contents($datos,$archivo );  
    $cedula = $_POST['cedula'];
      
    if(!is_dir('archivo')){
        mkdir('archivo');
    }
    $json = json_encode($_POST);
    file_put_contents("archivo/{$cedula}.json",$json);
}

?>