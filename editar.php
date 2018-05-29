<!DOCTYPE html>
<?php 

    include 'db.php';
    $id = $_GET['id'];
    $sql ="select * from persona where id='$id'";
    $rows = $db ->query($sql);
    
    $row = $rows->fetch_assoc();
    if(isset($_POST['send'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cedula'];
        $sql2 ="update persona set nombre='$nombre',apellido='$apellido',cedula='$cedula' where id='$id'";
        $db->query($sql2);
        header('location: index.php');
    }

   
?>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/micss.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<br>
<br>
<h1>Editar usuario</h1>
<div class="col l6 m7 s12">
    <div class="marginPrueba2"></div>
    <div class="container">
        <form method="post"  class="col l12 s12 m12 form z-depth-4" style="padding:10%;">
            <div class="row">
                <div class="input-field col l12 m12 s12">
                    <input id="first_name" type="text" name="nombre" value="<?php echo $row['nombre'];?>">

                </div>
            </div>
            <div class="row">
                <div class="input-field col m12 l12 s12">
                    <input id="first_name" type="text" name="apellido" value="<?php echo $row['apellido'];?>">

                </div>
            </div>
            <div class="row">
                <div class="input-field col  m12 l12 s12">
                    <input id="first_name" type="number" class="numb" name="cedula" value="<?php echo $row['cedula'];?>">

                </div>
            </div>
            <div class="row">
                <div class="input-field col  m12 l12 s12">
                    <input id="first_name" type="text" name="comportamiento">
                    <label for="first_name">Comportamiento</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <input class="col  m6 l6 s5 btn sala" type="submit" name="send" value="add persona">
                </div>
            </div>
        </form>
    </div>
</div>