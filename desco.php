<?php
session_start();
session_destroy();
header('Location: index.php');
exit ('Te has desconectado del sistema.');
?>