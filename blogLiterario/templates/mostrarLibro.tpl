{include file="header.tpl"}
<h1>{$autor['nombre']}</h1>

<h1>{$libro['titulo']}</h1>
<h2>{$libro['genero']}</h2>
<h3>{$libro['sinopsis']}</h3>

<a href="../borrarLibro/{$libro['id_libro']}">Borrar</a>
{include file="footer.tpl"}
