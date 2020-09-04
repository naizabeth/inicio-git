<?php
//recogemos la variable  
if(isset($_GET['id_usuario'])){
    $id=$_GET['id_usuario'];
    //preparams la consulta 
    $consulta="DELETE FROM usuarios WHERE id_usuario=$id";
    //incluimos la conexion a la base de dathos 
    include '../../conexion.php';
    //ejecutamos la query o sea la mconsulta la vamos a jecutar con un if y else 
    if(mysqli_query($conexion,$consulta)){
        header('location:index.php');

    }else{
        echo 'no consigo el ove to trasch';
    }
 
}


?>