{include file="header.tpl"}
<h1 class="text-center">Ingresar nuevo autor</h1>


  <form action="{BASEURL}guardarAutor" method="post">
    <div class="row">
    <div class="col-md-4 col-xs-4 col-sm-4"></div>
    <div class="col-md-4 col-xs-4 col-sm-4">
      <label for="nombre">Nombre autor: </label>
      <div>
        <input type="text" name="nombre" value="">
      </div>


      <label for="biografia">Biografía:</label>
      <div>
        <textarea rows="5" cols="40" name="biografia"></textarea>
      </div>

      <button type="submit" name="button">Crear</button>
  </div>
  <div class="col-md-4 col-xs-4 col-sm-4"></div>
</div>
  </form>

{include file="footer.tpl"}
