{include file="header.tpl"}
<h1>Autores</h1>
{foreach from=$autores item=autor}
    <li>{$autor['nombre']}
    </li>
{/foreach}

{include file="footer.tpl"}
