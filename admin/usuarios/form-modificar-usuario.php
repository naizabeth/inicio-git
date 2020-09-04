<?php 
include '../../header.php';
//recoger la variable que nos llega por get
if(isset($_GET['id_usuario'])){
    $id=$_GET['id_usuario'];
    //preparamos la consulta
    $consulta= "SELECT * FROM  usuarios WHERE id_usuario=$id";
    //AHORA HAY QUE CONECTARSE A LA BASE DE DATOS POR LO CUAL VA INCLUDE
    include '../../conexion.php';
    //ejecutamos la consulta lo khacemos con un if 
    if($datos=mysqli_query($conexion,$consulta)){
        //una vez que nos ha ejecutado la consulta nos devuelve los dastos por lo 
        //tanto hay que colocar los while(fetch _array) nos devuelve la fila
        while($fila=mysqli_fetch_array($datos)){
            //mostrar html con los datos obtenidos
            include 'template-form-modificar-usuario.php';
        }
  
    }else{
        echo ' la consulta no se ha realizado';
    }
}  else{
    // este else tiene que ver con el if que si la pagina funciona que te lleve a header
    header ('location:../../index.php');
}
include '../../footer.php';


?>