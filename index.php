<?php
    include("connect.php");
    //Sentencias mysql para llamar a los diferentes tipos de contacto
    $contact_study = "SELECT * FROM contacts WHERE type_of_contact = 'estudio'";
    $contact_group = "SELECT * FROM contacts WHERE type_of_contact = 'grupo'";
    $contact_work = "SELECT * FROM contacts WHERE type_of_contact = 'trabajo'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
    crossorigin="anonymous">
    <title>Actividad 6</title>
</head>
<body>
    <!--Tabla de contactos de estudio-->
    <div class="container">
        <h2>Tabla de contactos de estudio</h2>
        <table class="table table-primary table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Teléfono</th>
                </tr>
            </thead>
            <?php
                //Hacemos una llamada a la base de datos
                $result = mysqli_query(
                    $connection, //Conexión a la base de datos
                    $contact_study //Sentencias para llamar al tipo de contacto de estudio
                );
                //Iniciamos un ciclo para mostrar los resultdos
                while($show = mysqli_fetch_assoc($result)){
            ?>
            <tbody>
                <tr>
                    <!--LLamamos a las columnas de las tablas-->
                    <th scope="row"><?php echo $show['id']?></th>
                    <td><?php echo $show['user_name']?></td>
                    <td><?php echo $show['mail']?></td>
                    <td><?php echo $show['phone_number']?></td>
                </tr>
            </tbody>
            <?php
            } //Cerramos el ciclo
            ?>
        </table>
    </div>
    <!--Tabla de contactos de trabajo-->
    <div class="container">
        <h2>Tabla de contactos de grupo</h2>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Teléfono</th>
                </tr>
            </thead>
            <?php
                //Hacemos una llamada a la base de datos
                $result = mysqli_query(
                    $connection, //Conexión a la base de datos
                    $contact_group //Sentencias para llamar al tipo de contacto de grupo
                );
                //Iniciamos un ciclo para mostrar los resultdos
                while($show = mysqli_fetch_assoc($result)){
            ?>
            <tbody>
                <tr>
                    <!--LLamamos a las columnas de las tablas-->
                    <th scope="row"><?php echo $show['id']?></th>
                    <td><?php echo $show['user_name']?></td>
                    <td><?php echo $show['mail']?></td>
                    <td><?php echo $show['phone_number']?></td>
                </tr>
            </tbody>
            <?php
            } //Cerramos el ciclo
            ?>
        </table>
    </div>
    <!--Tabla de contactos de grupo-->
    <div class="container">
        <h2>Tabla de contactos de trabajo</h2>
        <table class="table table-warning table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Teléfono</th>
                </tr>
            </thead>
            <?php
                //Hacemos una llamada a la base de datos
                $result = mysqli_query(
                    $connection, //Conexión a la base de datos
                    $contact_work //Sentencias para llamar al tipo de contacto de trabajo
                );
                //Iniciamos un ciclo para mostrar los resultdos
                while($show = mysqli_fetch_assoc($result)){
            ?>
            <tbody>
                <tr>
                    <!--LLamamos a las columnas de las tablas-->
                    <th scope="row"><?php echo $show['id']?></th>
                    <td><?php echo $show['user_name']?></td>
                    <td><?php echo $show['mail']?></td>
                    <td><?php echo $show['phone_number']?></td>
                </tr>
            </tbody>
            <?php
            } //Cerramos el ciclo
            ?>
        </table>
    </div>
</body>
</html>