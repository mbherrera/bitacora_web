<?php
include("conexion.php");//Conexion base de datos
include("funciones_mysql.php");

if(crear_cliente($_POST['empresa'],$_POST['titulo'],$_POST['descripcion'])==0){
       echo '<script languaje="javascript" type="text/javascript">alert("Error al crear el registro.");window.close();</script>';}
       else{echo '<script languaje="javascript" type="text/javascript">window.close();</script>';}
?>