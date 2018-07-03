{include file="header.tpl"}
{include file="nav.tpl"}
<div class="container">
  <form class="form-signin" method="post" action="{BASEURL}validarLogin">
    <h2 class="form-signin-heading">Please sign in</h2>
    <div class="row">
      <div class="col-md-4 col-xs-4 col-sm-4"></div>
      <div class="col-md-4 col-xs-4 col-sm-4">
          <label for="email" class="sr-only">Email address</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
          <label for="pass" class="sr-only">Password</label>
          <input type="password" id="password" name="pass" class="form-control" placeholder="Password" required>
          <div class="checkbox">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </div>
    </div>
  </form>
</div> <!-- /container -->

<form action="{BASEURL}registro" method="get">
    <button type="submit" class="btn btn-success" >Registrarse</button>
</form>

{include file="footer.tpl"}