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
$cadena         ="SELECT * FROM psicologicas";
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
            <li><a href="userIndex.php" >Home</a></li>
            <li><a href="agregarUser.php" >Agregar Paciente</a></li>
            <li><a href="DPersonalesUser.php">Datos Personales</a></li>
            <li><a href="AdiccionesUser.php" >Adicciones</a></li>
            <li><a href="AalergicosUser.php" >A.Alergicos</a></li>
            <li><a href="aandrologicosUser.php" >A.Andrologicos</a></li>
            <li><a href="aDermatologicosUser.php" >A.Dermatologicos</a></li>
            <li><a href="aViajeUser.php" >A.Viaje</a></li> 
            <li><a href="aGinecologicosUser.php" >A.Ginecologicos</a></li> 
            <li><a href="aHereditariosUser.php" >A.Hereditarios</a></li> 
            <li><a href="aOftalmologicosUser.php" >A.Oftalmoloficos</a></li> 
            <li><a href="aPatologicosUser.php" >A.Patologicos</a></li>    
            <li><a href="aQuirurgicosUser.php" >A.Quirurgicos</a></li>            
            <li><a href="aSocialesUser.php" >A.Sociales</a></li>
            <li><a href="aTraumatologicosUser.php"  >A.Traumatologicos</a></li>
            <li><a href="aUrologicosUser.php"  >A.Urologicos</a></li>
            <li><a href="consultasUser.php" >Consultas</a></li>
            <li><a href="neurologiaUser.php" >Neurologia</a></li>
            <li><a href="aPsicologicasUser.php"class="active" >Psicologicas</a></li>
            <li><a href="psicosexualUser.php" >Psicosexual</a></li>

            <li><a href="loginBIO.php">LogOut</a></li>
        </ul>
        <div class="section">
            <div class="top-border left"></div>
            <div class="top-border right"></div>
            <br><br>
            <h1>Antecedentes Psicologicos</h1>
        </div>

        <div class="textbox">
            P1.-¿Cómo usted siente que están las cosas en casa? <br>
            P2.-¿Con cuantas personas vives? <br>
            P3.-¿Hay discusiones ocasionales con estas personas? <br>
            P4.-¿Hace cuánto tiempo hace que estas así? <br>
            P5.-¿Qué cree usted que puede haber desencadenado esto que siente <br>
            P6.-¿Qué piensa acerca de lo que está sucediendo? <br>
            P7.-¿Cuántas veces se ha cambiado de casa?<br>
            P8.-¿Cuántos hijos tienes?<br>
            P9.-¿Cuántos empleos ha tenido?<br>
            P10.-¿Alguna perdida o cambio emocional muy importante?<br>
            P11.-¿Cuáles son las causas evidentes de las problemáticas?<br>
            P12.-¿Cuáles son los factores hipotéticos que intervienen en la pr<br>
            P13.-¿Cuáles son los elementos favorables que compensan los factor<br>
            P14.-¿A qué hora se queda dormido y a qué hora se despierta?<br>
            P15.-Alguna vez se sintió: ¿triste, desganado, irritable por más d<br>
            P16.-¿Se siente más triste a la mañana o a la tarde?<br>
            P17.-¿Cómo sería un recuerdo más vivido de su niñez?<br>
            P18.-¿Usted cree que es culpable de alguna situación?<br>
            P19.-¿Cómo llamaría usted a lo que siente en estos momentos?<br>
            P20.-¿Qué es lo que quieres cambiar?<br>
            P21.-¿Escuchas voces?<br>
            P22.-¿Haz pensado en suicidarte?<br>
            P23.-¿Con qué frecuencia platicas con tus padres y cómo? <br>
            P24.-¿Con cuál de los dos te llevas mejor?<br>
            P25.-¿En qué aspectos puede mejorar tu relación con ellos ? <br>

           




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
                <th class="text-left">P15</th>
                <th class="text-left">P16</th>
                <th class="text-left">P17</th>
                <th class="text-left">P18</th>
                <th class="text-left">P19</th>
                <th class="text-left">P20</th>
                <th class="text-left">P21</th>
                <th class="text-left">P22</th>
                <th class="text-left">P23</th>
                <th class="text-left">P24</th>
                <th class="text-left">P25</th>
                
            
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
                <td class="text-left0">
            <?php
               echo $registro['a15'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['a16'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['a17'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['a18'];
            ?>
                </td> 
                <td class="text-left0">
            <?php
               echo $registro['a19'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['a20'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['a21'];
            ?>
                </td>       
                <td class="text-left0">
            <?php
               echo $registro['a22'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['a23'];
            ?>
                </td>  
                <td class="text-left0">
            <?php
               echo $registro['a24'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['a25'];
            ?>
                </td>  
                 
                
                
               
            </tr> 
            <?php               
                }
             ?>
        </tbody>
    </table>
 
</body>