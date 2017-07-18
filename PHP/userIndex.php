<?php
header("Content-Type: text/html;charset=utf-8");
$servidor       = "localhost";
$usuario        = "root";
$clave          = "";
$basedatos      = "biomedica2";
$numeracion =0;
 
$conexion=mysql_connect ($servidor, $usuario, $clave) or die ('problema conectando porque :' . mysql_error());
mysql_select_db ($basedatos,$conexion);
mysql_query("SET NAMES 'utf8'");
$cadena         ="SELECT * FROM datospersonales";
$tabla          = mysql_query($cadena, $conexion) or die ("problema con cadena de conexion<br><b>" . mysql_error()."</b>");mysql_query($cadena, $conexion) or die ("problema con cadena de conexion<br><b>" . mysql_error()."</b>");
$registros_encontrados ="";
$registros_encontrados = htmlentities($registros_encontrados, ENT_QUOTES,'UTF-8');
$registros_encontrados = mysql_num_rows($tabla);



?>

<html lang="es">
<head>
    <link href="../CSS/userIndex.css" rel="stylesheet">
    <link href="../CSS/menu.css" rel="stylesheet">
    <meta charset="UTF-8">
	<title>Table Style</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    <script type="text/javascript" src="../JS/tablesorterPlugin/jquery-latest.js"></script>
    <script type="text/javascript" src="../JS/tablesorterPlugin/jquery.tablesorter.js"></script>
</head>


    <body>
        
        <ul>
            <li><a href="equipoLista.php" class="active">Pacientes</a></li>
            <li><a href="equipoLista.php" >Adicciones</a></li>
            <li><a href="equipoLista.php" >A.Alergicos</a></li>
            <li><a href="equipoLista.php" >A.Andrologicos</a></li>
            <li><a href="equipoLista.php" >A.Dermatologicos</a></li>
            <li><a href="equipoLista.php" >A.Viaje</a></li>
            <li><a href="equipoLista.php" >A.Ginecologicos</a></li>
            <li><a href="equipoLista.php" >Consultas</a></li>
            <li><a href="equipoLista.php" >Neurologia</a></li>
            <li><a href="equipoLista.php" >Psicologicas</a></li>
            <li><a href="equipoLista.php" >Psicosexual</a></li>

            <li><a href="loginBIO.php">LogOut</a></li>
        </ul>
        <div class="section">
            <div class="top-border left"></div>
            <div class="top-border right"></div>
            <h1>Pacientes</h1>
        </div>
        
        <div class="table-title">
        </div>
        <table class="table-fill" id="myTable">
        <thead>
            <tr>
                <th class="text-left">IdPacientes</th>
                <th class="text-left">Nombre</th>
                <th class="text-left">Apepat</th>
                <th class="text-left">Apemat</th>
                <th class="text-left">Direccion</th>
                <th class="text-left">Ntelefono</th>
                <th class="text-left">Nacionalidad</th>
                <th class="text-left">Nacimiento</th>
                <th class="text-left">Sexo</th>
                <th class="text-left">EstadoCivil</th>
                <th class="text-left">Ocupacion</th>
                <th class="text-left">id_paciente</th>
                <th class="text-left">LugarResidencia</th>
            </tr>
        </thead>
        <tbody class="table-hover">
           <tr>
            <?php
                while ($registro = mysql_fetch_array($tabla)){   
            ?>
                <td class="text-left0">
            <?php
               echo $registro['id_pacientes'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['Nombre'];
            ?>
                </td> 
                <td class="text-left0">
            <?php
               echo $registro['Apepat'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['Apemat'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['Direccion'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['Ntelefono'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['Nacionalidad'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['Nacimiento'];
            ?>
                </td>
                <td class="text-left0">
            <?php
            
               echo $registro['Sexo'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['EstadoCivil'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['Ocupacion'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['id_paciente'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['LugarResidencia'];
            ?>
                </td>

            </tr> 
            <?php               
                }
             ?>
        </tbody>
    </table>
 
</body>