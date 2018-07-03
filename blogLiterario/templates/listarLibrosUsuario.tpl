{include file="header.tpl"}
{include file="navUsuario.tpl"}

<h1 class="text-center">Blog Literario</h1>

<div class="row">
	<div class="col-md-1 col-xs-1 col-sm-1">
	</div>
	<div class="col-md-10 col-xs-10 col-sm-10">

		<div class="row">

			{foreach from=$libros item=libro}
				<div class="col-md-4 col-xs-12 col-sm-5">
				<a href="{BASEURL}verLibro/{$libro['id_libro']}">
				<img src="{BASEURL}images/{$libro['titulo']}.jpg" class="img-rounded img-thumbnail img-responsive center-block" alt="{$libro['titulo']}"></a>
				<p class="text-center"><a href="{BASEURL}verLibro/{$libro['id_libro']}">{$libro['titulo']}</a></p>
					{foreach from=$autores item=autor}
						{if ($autor['id_autor'] == $libro['id_autor'])}
							<p class="text-center"><a href="{BASEURL}mostrarDetalleAutor/{$autor['id_autor']}">{$autor['nombre']}</a></p>
						{/if}
					{/foreach}
				</div>
			{/foreach}

		</div>

	</div>
	<div class="col-md-1 col-xs-1"></div>
</div>



{include file="footer.tpl"}
