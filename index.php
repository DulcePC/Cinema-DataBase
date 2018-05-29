<!DOCTYPE html>
<?php 
    include 'comportamiento.php'; 
    include 'db.php';

    $sql ="select * from persona";
    $rows = $db ->query($sql);

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

<body>
    <nav>
        <div class="nav-wrapper">
            <ul class="right hide-on-med-and-down">
                <li>
                    <a href="#!">
                        <i class="material-icons">my_location</i>
                    </a>
                </li>
                <li>
                    <a href="#!">
                        <i class="material-icons">view_module</i>
                    </a>
                </li>
                <li>
                    <a href="#!">
                        <i class="material-icons">refresh</i>
                    </a>
                </li>
                <li>
                    <a href="#!">
                        <i class="material-icons">more_vert</i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row margin">
        <div class="col l6 m5">
            <div class="welcome">
                <div class="marginPrueba"></div>
                <div class="titulo">
                    <h1>Welcome to Cinema paradaise</h1>
                    <br>
                    <p>Reserva tu ticket ahora!</p>
                </div>
            </div>
        </div>
        <div class="col l6 m7 s12">
            <div class="marginPrueba2"></div>
            <div class="container">
                <form method="post" action="add.php" class="col l12 s12 m12 form z-depth-4" style="padding:10%;">
                    <div class="row">
                        <div class="input-field col l12 m12 s12">
                            <input id="first_name" type="text" name="nombre">
                            <label for="first_name">Nombre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m12 l12 s12">
                            <input id="first_name" type="text" name="apellido">
                            <label for="first_name">Apellido</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col  m12 l12 s12">
                            <input id="first_name" type="number" class=" numb " name="cedula ">
                            <label for="first_name ">Cedula</label>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="input-field col m12 l12 s12 ">
                            <input  id="first_name " type="text"  name="comportamiento ">
                            <label for="first_name ">Comportamiento</label>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="input-field">
                             <input class="col  m6 l6 s5 btn sala" type="submit" name="send" value="add persona">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <div class="container ">
            <table  class="z-depth-2 ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cedula</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php while($row = $rows->fetch_assoc()): ?>
                            <th><?php echo $row['id']?></th>
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['apellido']?></td>
                            <td><?php echo $row['cedula']?></td>
                            <td><a class="green btn col s3 ">Ver</a></td>
                            <td><a href="editar.php?id=<?php echo $row[ 'id'];?>" class="yellow btn col s3">Editar</a></td>
                            <td><a href="eliminar.php?id=<?php echo $row['id'];?>" class="red btn col s3">Eliminar</a></td>
                    </tr>
                        <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/materialize.js"></script>
</body>

</html>