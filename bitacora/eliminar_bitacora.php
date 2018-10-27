<?php
include("conexion.php");//Conexion base de datos
require("bitacora.php");
include("funciones_mysql.php");
$cod=$_GET['cod'];
$datos['codigo'] = $cod;
if(eliminar_cliente($datos)==0){
       echo '<script>alert("Error al eliminar el registro.")</script>';
       echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=index.php'>";
}
       else{
          echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=index.php'>";
       }
?>