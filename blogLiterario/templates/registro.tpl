{include file="header.tpl"} 
{include file="nav.tpl"}
<div class="row">
  <h2 class="text-center">Registrarse</h2>
  <div class="col-lg-4 col-md-4 col-sm-1 col-xs-1"></div>
  <div class="col-lg-4 col-md-4 col-sm-10 col-xs-10">
    <form action="{BASEURL}ingresarUsuario" method="post">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" placeholder="ejemplo@123.com" required>
        <h3 class="{$estado}">El email ya esta en uso</h3>
      </div>
      <div class="form-group">
        <label for="pass">Password:</label>
        <input type="password" class="form-control" name="pass" placeholder="Contraseña" required>
      </div>
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
      </div>
      <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" class="form-control" name="apellido" placeholder="Apellido" required>
      </div>

      <div class="col-xs-3 col-xs-offset-9">
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
    </form>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-1 col-xs-1"></div>
</div>
{include file="footer.tpl"}