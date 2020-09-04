<?php 
if(isset($_POST['titulo'],$_POST['contenido'],$_POST['temas'])){
$titulo = $_POST['titulo'];
$contenido =$_POST['contenido'];
$temas = $_POST['temas'];
//var_dump($_POST);

include '../../conexion.php';
//var_dump($conexion);


$consulta = "INSERT INTO post (id_post,titulo,contenido, imagen_destacada,temas) VALUES ('0','$titulo','$contenido','' ,'$temas')";

    if(mysqli_query($conexion,$consulta)){
       header('location:index.php');
        }else{
        echo 'no se ha grabado nada';
        }
}else{
    echo 'por favor, rellene bien el formulario';
}




?>
