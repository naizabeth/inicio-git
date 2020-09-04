<?php 
include '../../header.php';
if(isset($_GET['exito'])&&$_GET['exito']=='modificacion'){
    echo '<div class="alert alert-success" role="alert">
    Has modificado los datos del usuario con exito 
  </div>';
}
 
echo '<a class="btn btn-success mb-2" href="form-agregar-usuario.php">Añadir usuario</a>';
// mostrar lista de usuarios
include '../../conexion.php';
if(!$conexion):
    echo 'no se ha podido establecer la conexion';
else:
    // preparado la consulta
   $consulta = "SELECT * FROM usuarios";
   // ejecutamos la consulta
   $datos = mysqli_query($conexion,$consulta);
   if($datos){
       echo '<table class="table">
       <th>id</th>
       <th>nombre</th>
       <th>email</th>
       <th>modificar</th> 
       <th>borrar</th> 
       ';
       while($fila = mysqli_fetch_array($datos)){
           // MUESTRA LAS FILAS
          include 'template-tabla-usuarios.php';
       }// aqui termina el loop
       echo '</table>';
   }else{
       echo 'ha fallado la consulta';
   }
endif;
include '../../footer.php';
?>