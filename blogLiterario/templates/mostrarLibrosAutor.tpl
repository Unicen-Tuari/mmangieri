{include file="header.tpl"}

<h1> {$autor['nombre']} </h1>
{foreach from= $librosAutor item= libros}
<li> <a href="../verLibro/{$libros['id_libro']}"> {$libros['titulo']}</a></li>
{/foreach}
{include file="footer.tpl"}
