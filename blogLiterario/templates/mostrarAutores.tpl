{include file="header.tpl"}
{include file="nav.tpl"}

<h1 class="text-center">Autores</h1>

<div class="row">
    <div class="col-md-2 col-xs-2 col-sm-2">
    </div>
    <div class="col-md-10 col-xs-10 col-sm-10">
        {foreach from=$autores item=autor}
            <h3><a href="{BASEURL}verLibrosAutor/{$autor['id_autor']}">{$autor['nombre']}</a>
            </h3>
        {/foreach}
    </div>
</div>


{include file="footer.tpl"}
