<?php

    $host="localhost";
    $database="dbovercl";
    $userDB = "root";
    $passDB = "";


    $db = new mysqli($host, $userDB, $passDB, $database );

    if ($db -> maxdb_connect_errno) {
        die("Fallo al conecta a la base de datos : (".$conectar-> mysqli_connect_errno() . ")" . $conectar ->mysqli_connect_error() );
    }
    else{
        
}
?>