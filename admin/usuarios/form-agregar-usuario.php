<?php include '../../header.php';?>
<h2 class="text-center">REGISTRO DE USUARIO</h2>
<form method='post' action="procesar-agregar-usuario.php">
<div class='form-group'>
<label for="nombre">NOMBRE</label>
<input class="form-control"  type="text" name="nombre" id="nombre">
</div>
<div class='form-group'>
<label for="email">EMAIL</label>
<input class="form-control"  type="email" name="email" id="email">
</div>

<div class='form-group'>
<label for="password">PASSWORD</label>
<input class="form-control"  type="password" name="password" id="password">
</div>

<button  class= 'btn btn-primary mb-2'type="submit">Añadir Usuario</button>

</form>
 <?php include '../../footer.php'; ?>
















?>