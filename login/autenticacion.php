<?php
 
session_start();
//coger las variables del login, compararla con la base de ddtos y si alguna coincide
//le damos $session['atenticacion']=='si'
//y si no coincide ya veremos lo que hacemos 

if(isset($_POST['password'],$_POST['email'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    include '../conexion.php';
    //preparamos la consulta 
    $consulta= "SELECT* FROM usuarios";
    if($datos=mysqli_query($conexion,$consulta)){
        $coincidencia=false;
        while($fila=mysqli_fetch_array($datos)){
            //comparamos fila y fila de email y contraseña
            if($fila['email']===$email && $fila['password']===$password){
              $_SESSION['autenticacion']='si';
                $coincidencia=true;
   
        }
    }
    $coincidencia?header('location:../admin'):header('location:../index.php');
    }else{
        echo 'la consulta no ha podido realizarse';
    }
}else{
    header('location:../index.php');
}









?>