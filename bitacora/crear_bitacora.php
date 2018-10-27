<?php
session_start();
if($_SESSION['vr']==md5('20')){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Nuevo Registro</title>
            <link rel="shortcut icon" href="../imagenes/icono.ico" />
            <link rel="stylesheet" type="text/css" href="../css/bitacora.css">
                </head>
<body>
<form action="crear.php" method="POST" name="form1">
<table width="100%" heigth="100%" border="0" cellspacing="0" cellpadding="0" >
  <tbody>
    <tr>
      <th width="20%" scope="row" style="text-align:left;">Empresa</th>
      <td width="80%"><input type="text" name="empresa" id="empresa" maxlength="50" size="50"></td>
    </tr>
    <tr>
      <th scope="row" style="text-align:left;">Titulo</th>
      <td><input type="text" name="titulo" id="titulo" maxlength="50" size="50"></td>
    </tr>
    <tr>
      <th scope="row" colspan="2">Descripcion</th>
    </tr>
    <tr>
      <td colspan="2"><textarea name="descripcion" id="descripcion" class="descripcion"></textarea></td>
    </tr>
        <tr>
      <th scope="row" colspan="2">&nbsp;</th>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" value="CREAR" width="50px" height="20px"></td>
    </tr>
  </tbody>
</table>
</form>
    </body>
</html>
<?php
}
else{
    session_destroy();
    echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";
}
?>