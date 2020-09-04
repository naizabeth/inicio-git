

<form action="procesar-modificar-usuario.php" method="post">
<div class='form-group'>
<label for="id_usuario">ID</label>
<input value="<?php echo $fila['id_usuario']?>" 
class="form-control"  type="text" name="id_usuario" id="id_usuario" readonly>
</div>
<div class='form-group'>
<label for="nombre">Nombre</label>
<input value="<?php echo $fila['nombre']?>" 
class="form-control"  type="text" name="nombre" id="nombre">
</div>
<div class="form-group">
<label for="email">Email</label>
<input value="<?php echo $fila['email']?>"

class="form-control"  type="email" name="email" id="email">

<div class="form-group">
<label for="password">Password</label>
<input value="<?php echo $fila['password']?>"
class="form-control"  type="text" name="password" id="password">


<button  class= 'btn btn-primary' type='submit'>Modificar Usuario</button>


















</form>









