{include file="header.tpl"}
<h1 class="text-center">Editar autor</h1>


  <form action="{BASEURL}actualizarAutor/{$autor['id_autor']}" method="post">
    <div class="row">
    <div class="col-md-4 col-xs-4 col-sm-4"></div>
    <div class="col-md-4 col-xs-4 col-sm-4">
      <label for="nombre">Nombre autor: </label>
      <div>
        <input type="text" name="nombre" value="{$autor['nombre']}">
      </div>


      <label for="biografia">Biografía:</label>
      <div>
        <textarea rows="5" cols="40" name="biografia">{$autor['biografia']}</textarea>
      </div>

      <button type="submit" name="button">Editar</button>
  </div>
  <div class="col-md-4 col-xs-4 col-sm-4"></div>
</div>
  </form>

{include file="footer.tpl"}
