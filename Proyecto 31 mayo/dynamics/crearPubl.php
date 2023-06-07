<?php

    /*const DBHOST = "localhost";
    const DBUSER = "root";
    const PASSWORD = "";
    const DB = "tuitrespaldo";

    function connect(){
        $conexion = mysqli_connect(DBHOST, DBUSER, PASSWORD, DB);
        return $conexion;
    }*/

    $include = include("./config.php");
    $con = connect();

    if($include && $con){
        $ID_USUARIO = 1;                    //ID pub se omite por ser auto increment, pero se pone 0 en el insert 
        $descripcion = "Descripción nueva";
        $fecha = "01-06-2023";
        $hora = "10:00";
        $corazon = 1;
        $n_comentarios = 1;
        $n_retuits = 1;
    
        /* $peticion = "INSERT INTO publicacion VALUES (0, 1, '$descripcion', '$fecha', '$hora', '$corazon', '$n_comentarios', '$n_retuits')";
        //aunque el valor de una variable ya esté entre comillas, éstas no se detectan y se pone '$variable' sólo si es una cadena
        $query = mysqli_query($con, $peticion);
        var_dump($query); */

        echo "<br><br><br>";

        $sql = "SELECT * FROM publicacion WHERE ID_PUB > 0 AND ID_PUB < 5"; //consulta de la base de datos
        $query = mysqli_query($con, $sql); //

        $datos = mysqli_fetch_assoc($query);
        var_dump($datos);
        echo "<br><br><br>";

        $datos = mysqli_fetch_assoc($query); /*de la tabla "publicacion" extrae el primer registro como un arreglo, ya sea
        asociativo (puras cadenas) o combinado*/
        var_dump($datos);

    }
?>