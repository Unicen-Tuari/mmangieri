{include file="header.tpl"}
{include file="nav.tpl"}
<div class="container">
  <div class="row">
    <div class="col-xs-3 col-xs-offset-9">
      <form action="{BASEURL}registro" method="get">
          <button type="submit" class="btn btn-success" >Registrarse</button>
      </form>
      </div>
    </div>
  <div class="row">
    <form class="form-signin" method="post" action="{BASEURL}validarLogin">


        <div class="col-lg-4 col-md-4 col-xs-1 col-sm-1"></div>
        <div class="col-lg-4 col-md-4 col-xs-10 col-sm-10">
          <h2 class="form-signin-heading text-center">Iniciar sesión</h2>
          <div class="form-group">

            <label for= "email">Correo electrónico</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Correo electrónico" required autofocus>
          </div>
          <div class="form-group">
            <label for="pass">Contraseña</label>
            <input type="password" id="password" name="pass" class="form-control" placeholder="Introduce tu contraseña" required>
          </div>
          <div class="form-group">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Conectarse</button>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-1 col-sm-1"></div>
    </form>
    </div>
</div> <!-- /container -->


{include file="footer.tpl"}
