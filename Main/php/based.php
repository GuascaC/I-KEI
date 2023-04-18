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

    $nomE = $_POST['nomE'];
    $nit = $_POST['nit'];
    $prof2 = $_POST['prof2'];
    $cup = $_POST['cup'];

    $sql2 = "INSERT INTO empresas(nomE, nit, prof2, cup, date) VALUES ('$nomE','$nit','$prof2','$cup','$date')";

    echo $sql2;

    $consulta2 = mysqli_query($cone,$sql2) ;
    if ($consulta2 > 0) {
        header("location:empresas.php");
    }


?>