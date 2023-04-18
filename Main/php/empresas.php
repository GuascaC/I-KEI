<?php

    include 'conexion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
    <link rel="stylesheet" href="../../syles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
    <link rel="icon" href="../../img/logo.jpeg">
</head>
<body>
  <header>
    <div class="header1">
    </div>
    <div class="header2">
        <div>
            <img src="../../img/Logo.jpeg" alt="logo">
        </div> 
        <a href="../../index.html"><i class="fa-solid fa-user" ></i> Cerrar Sesión</a>
    </div>
</header>
  <main>  
<section class="sectionTitulo">
    <div class="divTitulo">
      Lista Empresas
    </div>  
</section>

    <section class="vLista">
     <button class="volv"><a href="./gestion.html"><i class="fa-solid fa-arrow-left"></i></a></button>
    </section>
    
        <div id="search" class="buscar">
            <label for="searchInput"><i class="fa-solid fa-magnifying-glass"></i></label>
            <input id="searchInput" type="text" placeholder="Buscar">
    </div>
      
    <div class="busEmp">
    <select name="opcion" class="profesiónSel">
        <option value="" selected>Profesiones solicitado</option>
        <option value="">ADMINISTRACIÓN DE EMPRESAS</option>
        <option value="">CONTADURÍA PÚBLICA Y FINANZAS INTERNACIONALES</option>
        <option value="">DISEÑO DE PRODUCTO</option>
        <option value="">FINANZAS Y COMERCIO EXTERIOR</option>
        <option value="">INGENIERÍA DE SOFTWARE</option>
        <option value="">INGENIERÍA INDUSTRIAL</option>
        <option value="">MARKETING Y LOGÍSTICA</option>
        <option value="">NEGOCIOS INTERNACIONALES</option>
    </select>
    <select name="opcion" class="select2">
        <option value="" selected>Nacional o Internacional</option>
        <option value="">Nacional</option>
        <option value="">Internacional</option>
    </select>
      <select name="opcion" class="select2">
        <option value="" selected>Cupos disponibles</option>
        <option value="">Cupos ocupados</option>
    </select>
    </div>
    <table class="listaEm">
        <tr>
            <td class="tdtitulo">Nit
            </td>
            <td class="tdtitulo">Nombre empresa
            </td>
            <td class="tdtitulo">Cupos
            </td>
            <td class="tdtitulo">Profesiones solicitadas
            </td>
            <td class="tdtitulo">Fecha
            </td>
        </tr>
        <?php

$sql2 = "SELECT * FROM empresas";
$consulta2 = mysqli_query($cone ,$sql2 );

if (mysqli_num_rows ($consulta2) > 0)  {
while ($resultado2 = mysqli_fetch_assoc($consulta2)){

?>
<tr class="name">
<td class="tdNombre"><?php echo $resultado2["nit"] ?></td>
<td class="tdRol"><?php echo $resultado2["nomE"] ?></td>
<td class="tdEstado"><?php echo $resultado2["prof2"] ?></td>
<td class="tdEstado"><?php echo $resultado2["cup"] ?></td>
<td class="tdFecha2"><?php echo $resultado2["date"] ?></td>
</tr>
</tbody>
<?php

}}else{
    echo "Error, No resultados";
}

?>
</table>
<a href="../AnadirEmpresa.html"><button class="guardarCof">Agregar</button></a>
</main>
<footer>
<div class="footer1">
</div>
<div class="footer2">
<p>Todos los derechos reservados © 2020 -2023.</p>
</div>
</footer>
<script src="https://kit.fontawesome.com/0bf8ac12b9.js" crossorigin="anonymous"></script>
<script src="../Scripts/Redirigir.js"></script>
<script src="../Scripts/Search.js"></script>
</body>
</html>
        