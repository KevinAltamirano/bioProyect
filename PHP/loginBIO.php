<?php
    header("Content-Type: text/html;charset=utf-8");
    $servidor       = "localhost";
    $usuario        = "root";
    $clave          = "";
    $basedatos      = "biomedica2";
    $numeracion =0;
    session_start();
    $nombre="";
    $password="";
    $conexion=mysql_connect ($servidor, $usuario, $clave) or die ('problema conectando porque :' . mysql_error());
    mysql_select_db ($basedatos,$conexion);

    if (isset($_POST['user']) & isset($_POST['password'])) {
         $nombre= htmlentities($_POST['user']);
         $pass = htmlentities($_POST['password']);
         

        if($nombre=="enfermera"){
            if($pass=="enfermera"){
                 header("location:userIndex.php");
            }
        }else{
            if($nombre=="administrador"){
                    if($pass=="administrador"){
                        header("location:adminIndex.php");
            }
        }

        
            
            }
    }

?>

    <html lang="en">
        <head>
            <title></title>
            <meta charset="UTF-8">
            <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="../CSS/loginBIO.css" rel="stylesheet">
            
        </head>
        <body class="align">
            
           <div class="login-page">
                <div class="form" >
                    <h1>Control De Pacientes</h1>
                    <form class="login-form"  action="" method="post" >
                    <input type="text" placeholder="Usuario" name="user"/>
                    <input type="password" placeholder="Contraseña" name="password"/>
                    <button>Ingresar</button>
                    </form>
                </div>
            </div>
        </body>
       
    </html> 

