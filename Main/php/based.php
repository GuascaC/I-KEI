<?php
    date_default_timezone_set("America/Bogota");
    include 'conexion.php';
    $nom = $_POST['nombre'];
    $doc = $_POST['doc'];
    $prof = $_POST['prof'];
    $mail = $_POST['mail'];
    $fase = $_POST['fase'];
    $date = date("d-m-Y H:i:s");

    $sql = "INSERT INTO trabajadores(nom, doc, prof, mail, fase, date) VALUES ('$nom','$doc','$prof','$mail','$fase','$date')";

    echo $sql;

    $consulta = mysqli_query($cone,$sql) ;
    if ($consulta > 0) {
        header("location:table.php");
    }


?>