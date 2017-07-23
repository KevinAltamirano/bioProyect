<?php
header("Content-Type: text/html;charset=utf-8");
$servidor       = "localhost";
$usuario        = "root";
$clave          = "";
$basedatos      = "biomedica2";
$numeracion =0;
header("Content-Type: text/html;charset=utf-8");
        if (isset($_POST['n0']) & isset($_POST['n1'])) {

            $n0= $_POST ['n0'];
            $n1= $_POST ['n1'];
            $n2= $_POST ['n2'];
            $n3= $_POST ['n3'];
            $n4= $_POST ['n4'];
            $n5= $_POST ['n5'];
            $n6= $_POST ['n6'];
            $n7= $_POST ['n7'];
            $n8= $_POST ['n8'];
            $n9= $_POST ['n9'];
            $n10= $_POST ['n10'];
            $n11= $_POST ['n11'];

            $conexion=mysql_connect ($servidor, $usuario, $clave) or die ('problema conectando porque :' . mysql_error());
            mysql_select_db ($basedatos,$conexion);

            mysql_query("SET NAMES 'utf8'");
        
            $sql="INSERT INTO datospersonales(Nombre,Apepat,Apemat,Direccion,Ntelefono,Nacionalidad,Nacimiento,Sexo,EstadoCivil,Ocupacion,id_paciente,LugarResidencia) VALUES('$n0','$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10','$n11')";
            mysql_query($sql);
            
            header("location:DPersonalesUser.php");            
            }

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link href="../CSS/menu.css" rel="stylesheet">
        <link href="../CSS/agregarUser.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
    </head>
    <body>
        <ul>
            <li><a href="adminIndex.php">Home</a></li>
            <li><a href="agregarAdmin.php" class="active">Agregar Paciente</a></li>
            <li><a href="DPersonalesAdmin.php" >Datos Personales</a></li>
            <li><a href="" >Adicciones</a></li>
            <li><a href="" >Consultas</a></li>
            <li><a href="" >Neurologia</a></li>
            <li><a href="" >Psicologicas</a></li>
            <li><a href="" >Psicosexual</a></li>
            <li><a href="loginBIO.php">LogOut</a></li>
        </ul>
        <div class="container">  
        <form id="contact" action="" method="post">
            <h3 style="text-align:center">Registro del Paciente</h3>
            <h4 style="text-align:center">Rellene correctamente los campos establecidos</h4>
            <fieldset>
                <input placeholder="Nombre del Paciente" type="text" tabindex="1" required autofocus name="n0">
            </fieldset>
            <fieldset>
                <input placeholder="Apepat" type="text" tabindex="1" required name="n1">
            </fieldset>
            <fieldset>
                <input placeholder="Apemat" type="text" tabindex="1" required name="n2">
            </fieldset>
            <fieldset>
                <input placeholder="Direccion" type="text" tabindex="1" required name="n3">
            </fieldset>
            <fieldset>
                <input placeholder="Numero de Telefono" type="text" tabindex="1" required name="n4">
            </fieldset>
            <fieldset>
                <input placeholder="Nacionalidad" type="text" tabindex="1" required name="n5">
            </fieldset>
            <fieldset>
                Fecha de Nacimiento <br> <br>
                <input placeholder="Fecha de Nacimiento" type="date" tabindex="1" required name="n6">
            </fieldset>
            <fieldset>
                <br>
                <input placeholder="Sexo" type="text" tabindex="1" required name="n7">
            </fieldset>
            <fieldset>  
                <input placeholder="Estado Civil" type="text" tabindex="1" required name="n8">
            </fieldset>
            <fieldset>
                <input placeholder="Ocupacion" type="text" tabindex="1" required name="n9">
            </fieldset>
            <fieldset>
                <input placeholder="Id Paciente" type="text" tabindex="1" required name="n10">
            </fieldset>
            <fieldset>
                <input placeholder="Lugar de Residencia" type="text" tabindex="1" required name="n11">
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="submit">Agregar</button>
            </fieldset>
        </form>
 
  
</div>
   
</html>