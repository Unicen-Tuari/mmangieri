{include file="header.tpl"}
{include file="nav.tpl"}
      <div class="row">
        <h1 class="text-center">Registrarse:</h1>
        <div class="col-md-6 col-md-offset-3">
          <form action="{BASEURL}ingresarUsuario" method="post">
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control"  name="email" placeholder="ejemplo@123.com" required>
            </div>
            <div class="form-group">
              <label for="pass">Password:</label>
              <input type="password" class="form-control"  name ="pass" placeholder="Contraseña" required>
            </div>
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control"  name ="nombre" placeholder="Nombre" required>
            </div>
            <div class="form-group">
              <label for="apellido">Apellido:</label>
              <input type="text" class="form-control"  name ="apellido" placeholder="Apellido" required>
            </div>
            <!-- {if !empty($error) }
              <div class="alert alert-danger" role="alert">{$error}</div>
            {/if} -->
            <button type="submit" class="btn btn-default">Registrar</button>
          </form>
        </div>
      </div>
{include file="footer.tpl"}
