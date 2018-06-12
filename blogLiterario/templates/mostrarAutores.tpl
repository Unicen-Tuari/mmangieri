{include file="header.tpl"}
<h1>Autores</h1>
{foreach from=$autores item=autor}
    <li><a href="verLibrosAutor/{$autor['id_autor']}">{$autor['nombre']}</a>
		  <a href="borrarAutor/{$autor['id_autor']}">Borrar</a>
	</li>
{/foreach}

{include file="footer.tpl"}
