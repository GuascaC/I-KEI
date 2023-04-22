<?php
    date_default_timezone_set("America/Bogota");
    include 'conexion.php';
    $nomE = $_POST['nomE'];
    $nit = $_POST['nit'];
    $prof2 = $_POST['prof2'];
    $cup = $_POST['cup'];
    $date = date("d-m-Y H:i:s");

    $sql2 = "INSERT INTO empresas(nomE, nit, prof2, cup, date) VALUES ('$nomE','$nit','$prof2','$cup','$date')";

    echo $sql2;

    $consulta2 = mysqli_query($cone,$sql2) ;
    if ($consulta2 > 0) {
        header("location:empresas.php");
    }

?>