{include file="header.tpl"}

{foreach from=$libros item=libro}
  <li> {$libro['titulo']}
       {foreach from=$autores item=autor}
          {if ($autor['id_autor'] == $libro['id_autor'])}
            {$autor['nombre']}
          {/if}
        {/foreach}
  </li>
  {/foreach}

{include file="footer.tpl"}
