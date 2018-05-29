<?php
    include 'db.php';

    if(isset($_POST['send'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cedula'];

        $sql = "insert into persona (nombre, apellido , cedula) values   ('$nombre', '$apellido', '$cedula')";
       $val = $db->query($sql);
       if($val){
            header('location: index.php');
       }

    }



?>