<?php
session_start();
if($_SESSION['vr']==md5('20')){
include("conexion.php");//Conexion base de datos
require("bitacora.php");
include("funciones_mysql.php");
$cod=$_GET['cod'];
$bit= new bitacora();
$bit = detalle_bitacora($cod);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Detalle Registro</title>
            <link rel="shortcut icon" href="../imagenes/icono.ico" />
            <link rel="stylesheet" type="text/css" href="../css/bitacora.css">
                </head>
<body>
    <div>
         <p style="color: black; font-weight: bold;">* EMPRESA:   <?php echo $bit->empresa_bitacora(); ?></p>
         <p style="color: black;font-weight: bold;">* TITULO:   <?php echo $bit->titulo_bitacora(); ?></p>
         <p style="color: black;font-weight: bold;">* ULTIMA MODIFICACION:   <?php echo $bit->ultmod_bitacora(); ?></p>
         <p style="color: black;font-weight: bold;">* DESCRIPCION:</p>
         <textarea readonly class="descripcion"><?php echo $bit->descripcion_bitacora(); ?></textarea>
    </div>
    </body>
</html>
<?php
}
else{
    session_destroy();
    echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";
}
?>