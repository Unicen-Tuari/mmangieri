{include file="header.tpl"}
{include file="navUsuario.tpl"}

<div class="row">
  <div class="col-md-1 col-xs-1 col-sm-1"></div>
  <div class="col-md-8 col-xs-8 col-sm-8 text-center">
    <h1>{$autor['nombre']}</h1>

    <h2>{$libro['titulo']}</h2>
    <h3>Género: {$libro['genero']}</h3>
  </div>
  <div class="col-md-3 col-xs-3 col-sm-3"></div>
</div>

<div class="row">
  <div class="col-md-1 col-xs-1 col-sm-1"></div>
  <div class="col-md-8 col-xs-8 col-sm-8">
    <p class="text-justify">{$libro['sinopsis']}</p>
  </div>
  <div class="col-md-3 col-xs-3 col-sm-3">
    <img src="{BASEURL}images/{$libro['titulo']}.jpg" class="img-rounded img-responsive" alt="{$libro['titulo']}">
  </div>
</div>
{include file="footer.tpl"}
