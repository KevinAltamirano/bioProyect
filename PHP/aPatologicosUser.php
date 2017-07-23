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
$cadena         ="SELECT * FROM apatologicas";
$tabla          = mysql_query($cadena, $conexion) or die ("problema con cadena de conexion<br><b>" . mysql_error()."</b>");mysql_query($cadena, $conexion) or die ("problema con cadena de conexion<br><b>" . mysql_error()."</b>");
$registros_encontrados ="";
$registros_encontrados = htmlentities($registros_encontrados, ENT_QUOTES,'UTF-8');
$registros_encontrados = mysql_num_rows($tabla);



?>

<html lang="es">
<head>
    <link href="../CSS/userIndex.css" rel="stylesheet">
    <link href="../CSS/agregarUser.css" rel="stylesheet">
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
             <li><a href="userIndex.php">Home</a></li>
            <li><a href="agregarUser.php" >Agregar Paciente</a></li>
            <li><a href="DPersonalesUser.php">Datos Personales</a></li>
            <li><a href="AdiccionesUser.php" >Adicciones</a></li>
            <li><a href="AalergicosUser.php" >A.Alergicos</a></li>
            <li><a href="aandrologicosUser.php" >A.Andrologicos</a></li>
            <li><a href="aDermatologicosUser.php">A.Dermatologicos</a></li>
            <li><a href="aViajeUser.php" >A.Viaje</a></li> 
            <li><a href="aGinecologicosUser.php"  >A.Ginecologicos</a></li> 
            <li><a href="aHereditariosUser.php" >A.Hereditarios</a></li> 
            <li><a href="aOftalmologicosUser.php" >A.Oftalmoloficos</a></li> 
            <li><a href="aPatologicosUser.php" class="active">A.Patologicos</a></li>    
            <li><a href="aQuirurgicosUser.php" >A.Quirurgicos</a></li>            
            <li><a href="aSocialesUser.php" >A.Sociales</a></li>
            <li><a href="aTraumatologicosUser.php"  >A.Traumatologicos</a></li>
            <li><a href="aUrologicosUser.php"  >A.Urologicos</a></li>
            <li><a href="consultasUser.php" >Consultas</a></li>
            <li><a href="neurologiaUser.php">Neurologia</a></li>
            <li><a href="aPsicologicasUser.php" >Psicologicas</a></li>
            <li><a href="psicosexualUser.php" >Psicosexual</a></li>

            <li><a href="loginBIO.php">LogOut</a></li>
        </ul>
        <div class="section">
            <div class="top-border left"></div>
            <div class="top-border right"></div>
            <br><br>
            <h1>Antecedentes Patologicos</h1>
        </div>

        <div class="textbox">
            P1.-¿Ha tenido antes una enfermedad semejante a la actual? <br>
            P2.-¿Cuándo y cómo evoluciono?<br>
            P3.-¿Qué otra dolencia ha sufrido?<br>
            P4.-¿Ha tenido algún accidente?<br>
            P5.-¿Ha tenido transfusiones de sangre?<br>
            P6.-¿Tiene alguna alergia?<br>
            P7.-¿Alguna enfermedad en la infancia?<br>
            P8.-¿Alguna enfermedad de la edad adulta?<br>
            P9.-¿Antecedente quirúrgico?<br>
            P10.-¿Antecedentes traumáticos?<br>
            P11.-¿Incapacidades?<br>
            P12.-¿Cuántos hermanos tienes?<br>
            P13.-¿Cuántos hijos tienes?<br>

            



        </div>
        
        <div class="table-title">
        </div>
        <table class="table-fill" id="myTable">
        <thead>
            <tr>
                <th class="text-left">Id</th>
                <th class="text-left">P1</th>
                <th class="text-left">P2</th>
                <th class="text-left">P3</th>
                <th class="text-left">P4</th>
                <th class="text-left">P5</th>
                <th class="text-left">P6</th>
                <th class="text-left">P7</th>
                <th class="text-left">P8</th>
                <th class="text-left">P9</th>
                <th class="text-left">P10</th>
                <th class="text-left">P11</th>
                <th class="text-left">P12</th>
                <th class="text-left">P13</th>
                <th class="text-left">P14</th>
                
            
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
               echo $registro['a1'];
            ?>
                </td> 
                <td class="text-left0">
            <?php
               echo $registro['a2'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['a3'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['a4'];
            ?>
                </td>       
                <td class="text-left0">
            <?php
               echo $registro['a5'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['a6'];
            ?>
                </td>  
                <td class="text-left0">
            <?php
               echo $registro['a7'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['a8'];
            ?>
                </td>  
                 <td class="text-left0">
            <?php
               echo $registro['a9'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['a10'];
            ?>
                </td>
                
                
                <td class="text-left0">
            <?php
               echo $registro['a11'];
            ?>
                </td> 
                <td class="text-left0">
            <?php
               echo $registro['a12'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['a13'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['a14'];
            ?>
                </td>       
                
                
               
            </tr> 
            <?php               
                }
             ?>
        </tbody>
    </table>
 
</body>