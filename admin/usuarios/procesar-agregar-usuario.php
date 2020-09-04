<?php 
//coge los datos del form y los envia a la tabla de usuario
//var_dump($_POST); se usa para verificar si se encuentran el proceso de las variables 
//se validan los datos if isset 
if(isset($_POST['nombre'],$_POST['email'],$_POST['password'])){
    $nombre= $_POST['nombre'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    include '../../conexion.php';
    $consulta="INSERT INTO usuarios(id_usuario,nombre,email,`password`)VALUES('0'
    ,'$nombre','$email','$password')";
    //ejecutamos la consulta con if el se para que nos avise en caso de fallo
    if(mysqli_query($conexion,$consulta)){
        mysqli_close($conexion);
        header('location:index.php');
    }else{
        echo 'No se ha podido ejecuto';
    }
}
//ahora generams la conexion paa que cuando ya esten validadas
//se envien a la base de datos 




















?>