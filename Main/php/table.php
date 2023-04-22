<?php

    include 'conexion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListaTrabajadores
    </title>
    <link rel="stylesheet" href="../../syles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
    <link rel="icon" href="../../img/Logo.jpeg">
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
      Trabajadores
    </div>  
</section>

    <section class="vLista">
     <button class="volv" onclick="redirigir06()"><a href="../gestion.html"><i class="fa-solid fa-arrow-left"></i></a></button>
    </section>
    
        <div id="search" class="buscar">
            <label for="searchInput"><i class="fa-solid fa-magnifying-glass"></i></label>
            <input id="searchInput" type="text" placeholder="Buscar">
    </div>
    <div class="listaEst">
    <select name="opcion" id="help" >
        <option value="0" selected>Profesión</option>
        <option value="1">ADMINISTRACIÓN DE EMPRESAS</option>
        <option value="">CONTADURÍA PÚBLICA Y FINANZAS INTERNACIONALES</option>
        <option value="">DISEÑO DE PRODUCTO</option>
        <option value="">FINANZAS Y COMERCIO EXTERIOR</option>
        <option value="">INGENIERÍA DE SOFTWARE</option>
        <option value="">INGENIERÍA INDUSTRIAL</option>
        <option value="">MARKETING Y LOGÍSTICA</option>
        <option value="">NEGOCIOS INTERNACIONALES</option>
    </select>
    <select name="opcion">
        <option value="0" selected>Fase</option>
        <option value="">Esperando respuesta</option>
      <option value="">Asociado</option>
        <option value="">Pendiente</option>
        <option value="">Buscando</option>
        <option value="">Abandono</option>
    </select>
    
      </div>
      <table class="tablatrabajadors">
    <tr>
      <th>Nombre</th>
      <th>Identificación</th>
      <th>Profesión</th>
      <th>Correo</th>
      <th>Fase</th>
      <th>Fecha Registro</th>
    </tr>
    </thead>
    <tbody>
        <?php

            $sql = "SELECT * FROM trabajadores";
            $consulta = mysqli_query($cone ,$sql );

            if (mysqli_num_rows ($consulta) > 0)  {
            while ($resultado = mysqli_fetch_assoc($consulta)){

        ?>
    <tr class="name">
      <td class="tdNombre"><?php echo $resultado["nom"] ?></td>
      <td class="tdRol"><?php echo $resultado["doc"] ?></td>
      <td class="tdEstado"><?php echo $resultado["prof"] ?></td>
      <td class="tdEstado"><?php echo $resultado["mail"] ?></td>
      <td class="tdEstado"><?php echo $resultado["fase"] ?></td>
      <td class="tdFecha2"><?php echo $resultado["date"] ?></td>
    </tr>
    </tbody>
        <?php

            }}else{
                echo "Error, No resultados";
            }

        ?>
  </table>
  <a href="../EditTrabajador.html"><button class="guardarCof">Agregar</button></a>
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