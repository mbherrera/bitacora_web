<?php
session_start();
if($_SESSION['vr']==md5('20')){
include("conexion.php");//Conexion base de datos
require("bitacora.php");
include("funciones_mysql.php");
$srch=htmlspecialchars($_POST['srch']);
$arrbitacoras = arreglo_bitacoras($srch);
$bit= new bitacora();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Bitacora de Clientes</title>
            <link rel="shortcut icon" href="../imagenes/icono.ico" />
            <link rel="stylesheet" type="text/css" href="../css/bitacora.css">
<!--====================================Tabla=================================-->
	<link rel="stylesheet" type="text/css" href="Tabla/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Tabla/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Tabla/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="Tabla/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="Tabla/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="Tabla/css/util.css">
	<link rel="stylesheet" type="text/css" href="Tabla/css/main.css">
<!--=================================Fin Tabla===================================-->

<script language="JavaScript" type="text/javascript">
function eliminar(id) {
if (confirm ("Esta seguro que desea eliminar el Registro?")) {
	window.location = "eliminar_bitacora.php?cod=" + id ;
 }
}
</script>
    </head>
<body>
<div id="cerrar_sesion"><p align="left"><a href="../desco.php"><img src="../imagenes/cerrar_sesion.png" title="Cerrar Sesion"/> Cerrar sesion </a></p></div>
<div id="nuevo_registro"><p align="left"><a href="crear_bitacora.php" target="_blank" onClick="window.open(this.href, this.target, 'width=800,height=600'); return false;"><img src="../imagenes/nuevo_registro.png" title="Nuevo Registro"/> Nuevo registro</a></p></div>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Empresa</th>
									<th class="cell100 column2">Titulo</th>
									<th class="cell100 column3">ULT. MODIFICACION</th>
									<th class="cell100 column4">ACCIONES</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
  <?php
foreach($arrbitacoras as $bit){
    echo "<tr class='row100 body'>";
    echo "<td class='cell100 column1'>".$bit ->empresa_bitacora()."</td>";
    echo "<td class='cell100 column2'>".$bit ->titulo_bitacora()."</td>";
    echo "<td class='cell100 column3'>".$bit ->ultmod_bitacora()."</td>";
    echo "<td class='cell100 column4'><a href='detalle_bitacora.php?cod=".$bit ->codigo_bitacora()."' title='".$bit ->titulo_bitacora()."' target='_blank' onClick=\"window.open(this.href, this.target, 'width=800,height=600'); return false;\"/>Detalles</a> / <a href='modificar_bitacora.php?cod=".$bit ->codigo_bitacora()."' title='".$bit ->titulo_bitacora()."' target='_blank' onClick=\"window.open(this.href, this.target, 'width=800,height=600'); return false;\"/>Modificar</a> / <a href='#' onclick='javascript: eliminar(".$bit ->codigo_bitacora().")' target='_self' title='Eliminar '".$bit ->titulo_bitacora()."?'>Eliminar</a></td>";
    echo "</tr>";
}
?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--================================Tabla============================-->	
	<script src="Tabla/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="Tabla/vendor/bootstrap/js/popper.js"></script>
	<script src="Tabla/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="Tabla/vendor/select2/select2.min.js"></script>
	<script src="Tabla/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});	
	</script>
    	<script src="js/main.js"></script>
<!--===============================Fin Tabla======================================-->
</body>
</html>
<?php
}
else{
    session_destroy();
    header('Location: ../index.php');
}
?>