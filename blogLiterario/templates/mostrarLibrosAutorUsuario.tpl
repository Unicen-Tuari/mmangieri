{include file="header.tpl"}
{include file="navUsuario.tpl"}
<h1 class= "text-center"><a href="{BASEURL}mostrarDetalleAutor/{$autor['id_autor']}">{$autor['nombre']}</a>  </h1>
<div class="row">
    <div class="col-md-2 col-xs-2 col-sm-2">
    </div>
    <div class="col-md-10 col-xs-10 col-sm-10">
      {foreach from= $librosAutor item= libros}
        <h3> <a href="{BASEURL}verLibro/{$libros['id_libro']}"> {$libros['titulo']}</a></h3>
      {/foreach}
    </div>
  </div>

  {include file="footer.tpl"}
