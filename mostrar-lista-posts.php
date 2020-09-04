<?php 
include 'conexion.php';
// verificamos la conexión
if(!$conexion){
    // si falla la conexión
    echo 'No has podido conectarte, revisa los datos de accesso';
}else{
    // si la conexión no falla
    //echo 'Tienes una conexión excelente';
   // 2. preparamos la consulta y realizamoos la consulta
    $consulta=" SELECT * FROM post ";
    
    if($datos=  mysqli_query($conexion,$consulta)){
       // recorremos la consulta
        // aquí usaremos los datos
      while($fila= mysqli_fetch_array($datos)) {
        include 'templates/template-lista-posts.php';
      } 
      mysqli_close($conexion);
      
    }else{
        echo 'no se ha podido realizar la consulta';
    }
   
 

}


?>