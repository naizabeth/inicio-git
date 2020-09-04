<?php 
//recoger los datos que nos envian el formulario
if(isset($_POST['nombre'],$_POST['email'],$_POST['password'],$_POST['id_usuario'])){
    $nombre= $_POST['nombre'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $id= $_POST['id_usuario'];

    include '../../conexion.php';
    //preparamos la consulta 
    $consulta="UPDATE usuarios SET nombre='$nombre', email='$email',`password`='$password'
    WHERE id_usuario=$id";
    //le mandamos al index del fronted para comprobar cambios
    if(mysqli_query($conexion,$consulta)){
        header ('location:index.php?exito=modificacion');
  
    }
} else{ echo 'acordar de agosto';
   
}  
?>