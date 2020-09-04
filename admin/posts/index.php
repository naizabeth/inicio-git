<?php 
include '../../header.php';
if(isset($_GET['exito'])&&$_GET['exito']=='modificacion'){

echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Has modificado con exito </strong> You should check in on some of those fields below.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
}
include '../../conexion.php';
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
        // boton añadir post
        echo "<a class='btn btn-success' href='form-agregar-post.php'>Nuevo Post</a>";
// empieza la tabla

echo "<table class='table'>
<thead>
  <tr>
    <th scope='col'>ID</th>
    <th scope='col'>Titulo</th>
    <th scope='col'>Publicado</th>
    <th scope='col'>Modificar</th>
    <th scope='col'>Borrar</th>
  </tr>
</thead>
<tbody>";
      while($fila= mysqli_fetch_array($datos)) {
        include 'template-tabla-admin.php';
      }
// cierro la tabla
echo "  
</tbody>
</table>";
      mysqli_close($conexion);
      
    }else{
        echo 'no se ha podido realizar la consulta';
    }
   
 

}
include '../../footer.php';


?>