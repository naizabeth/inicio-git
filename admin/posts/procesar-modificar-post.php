<?php 
 
//recoger los datos que nos envian el formulario
if(isset($_POST['titulo'],$_POST['contenido'],$_POST['temas'],$_POST['id_post'])){
    $titulo= $_POST['titulo'];
    $contenido= $_POST['contenido'];
    $temas= $_POST['temas'];
    $id= $_POST['id_post'];

    include '../../conexion.php';
    //preparamos la consulta 
    $consulta="UPDATE post SET titulo='$titulo', contenido='$contenido', temas='$temas'
    WHERE id_post=$id";
    //le mandamos al index del fronted para comprobar cambios
    if(mysqli_query($conexion,$consulta)){
        header ('location:index.php?exito=modificacion');
    }
} else{ echo 'acordar de agosto';
   
}  
?>

















