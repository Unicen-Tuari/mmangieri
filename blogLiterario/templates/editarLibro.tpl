{include file= "header.tpl"}
{include file="navAdmin.tpl"}
<h1 class="text-center">Editar libro</h1>
<form action="{BASEURL}actualizarLibro/{$libro['id_libro']}" method="post">
  <div class="row">
    <div class="col-md-4 col-xs-4 col-sm-4"></div>
    <div class="col-md-4 col-xs-4 col-sm-4">
      <label for="titulo"> Titulo del libro:</label>
      <div><input type="text" name="titulo" value="{$libro['titulo']}" size="35"></div>
      <label for="nombre">Autor: </label>
      <div>
        <select class="form-control" name="autor">
          {foreach from=$autores item= autor}
            <option  value="{$autor['id_autor']}">{$autor['nombre']}</option>
          {/foreach}
        </select>
      </div>
      <label for="genero">Género:</label>
      <div><input type="text" name="genero" value="{$libro['genero']}"></div>
      <label for="sinopsis">Sinopsis:</label>
      <div>
        <textarea rows="5" cols="40" name="sinopsis">{$libro['sinopsis']}</textarea>
      </div>
      <button type="submit" name="button">Editar</button>
    </div>
    <div class="col-md-4 col-xs-4 col-sm-4"></div>
  </div>
</form>
{include file="footer.tpl"}
