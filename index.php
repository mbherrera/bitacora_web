<?php
session_start();
	if(!$_SESSION['vr']){
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bitacora de clientes</title>
<link href="css/login.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="imagenes/icono.ico" />
</head>
<script>
//busca caracteres que no sean espacio en blanco en una cadena  
function vacio(q) {  
        for ( i = 0; i < q.length; i++ ) {  
                if ( q.charAt(i) != " " ) {  
                        return true  
                }  
        }  
        return false  
} 
//valida que el campo no este vacio y no tenga solo espacios en blanco  
function valida() {  
        if( vacio(document.form1.nombre.value) == false) {  
                alert("Introduzca un nombre.")
                document.form1.nombre.focus()
                return false  
        } 
        else if(vacio(document.form1.clave.value) == false){
                alert("Introduzca una contraseña.")
                document.form1.clave.focus()
                return false
        }
		else {  
		     return true
        }    
}
</script>
<body>
    <div id="Div_Titulo"><p id="Titulo">Bitacora de clientes</p></div>
    <p>&nbsp;</p>
    <form name="form1" id="form1" action="consultas.php" method="post" onsubmit="return valida()">
 <table width="400" border="0" align="center" id="Tabla">
  <tbody>
      <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td id="Columna">Usuario : </td>
      <td><input type="text" width="200px" id="Input" name="login_username"></td>
    </tr>
    <tr>
      <td id="Columna">Contraseña : </td>
      <td><input type="password" width="200px" id="Input" name="login_userpass"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
       <tr>
      <td colspan="2" align="center" id="Columna_boton"><input type="submit" value="Ingresar" id="Boton" onMouseOut="this.id='Boton'" onMouseOver="this.id='Boton_Cursor'"></td>
    </tr>
  </tbody>
</table></form>
<p>&nbsp;</p>
<p>&nbsp;</p>
    <p style="text-align:center;"><img src="imagenes/logo5.jpg" width="380" height="124" alt=""/></p>
</body>
</html>
<?php
}
else{
if($_SESSION['vr']==md5('20')){
            header ('Location: bitacora/index.php');
        }
}
?>