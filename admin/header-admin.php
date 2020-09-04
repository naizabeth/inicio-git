<?php 
//esta pagina es para autenticar o sea el contenido protegido
//esto es una condicion de acceso al usuario.
session_start();
if(isset($_SESSION['autenticacion'])&&$_SESSION['autenticacion']!=='si'){

header('location:../login');
}





?>