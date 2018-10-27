<?php
include("conexion.php");//Conexion base de datos
require("bitacora.php");
include("funciones_mysql.php");
if(modificar_cliente($_POST['codigo'],$_POST['empresa'],$_POST['titulo'],$_POST['descripcion'])==0){
       echo '<script>alert("Error al modificar el registro.");window.close();</script>';
}
       else{
        echo '<script>window.close();</script>';
       }
?>