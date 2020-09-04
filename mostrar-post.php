
<?php 
include 'header.php';
// recogemos la variable por get
if (isset($_GET['id_post'])){
$id = $_GET['id_post'];
}
// 
include 'conexion.php';

// verificamos la conexión
if(!$conexion){
    // si falla la conexión
    echo 'No has podido conectarte, revisa los datos de accesso';
}else{
    // si la conexión no falla
    //echo 'Tienes una conexión excelente';
   // 2. preparamos la consulta y realizamoos la consulta
    $consulta=" SELECT * FROM post WHERE id_post = $id ";
    
    if($datos=  mysqli_query($conexion,$consulta)){
       // recorremos la consulta
        // aquí usaremos los datos
      while($fila= mysqli_fetch_array($datos)) {
        include 'templates/template-post.php';
      } 
      mysqli_close($conexion);
      
    }else{
        echo 'no se ha podido realizar la consulta';
    }
   
 

}

include 'footer.php';
?>