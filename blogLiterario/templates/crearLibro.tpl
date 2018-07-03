{include file= "header.tpl"}
{include file="navAdmin.tpl"}

<h1 class="text-center">Ingresar nuevo libro</h1>

<form action="{BASEURL}guardarLibro" method="post">
	<div class="row">
		<div class="col-md-4 col-xs-4 col-sm-4">
		</div>
		<div class="col-md-4 col-xs-4 col-sm-4">
			<label for="titulo"> Titulo del libro:</label>
			<div>
				<input type="text" name="titulo" value="" size="35">
			</div>
			
			<label for="nombre">Autor: </label>
			<div>
				<select class="form-control" name="autor">
					{foreach from=$autores item= autor}
						<option  value="{$autor['id_autor']}">{$autor['nombre']}</option>
					{/foreach}
				</select>
			</div>
			
			<label for="genero">Género:</label>
			<div>
				<input type="text" name="genero" value="">
			</div>
			
			<label for="sinopsis">Sinopsis:</label>
				<div>
					<textarea rows="5" cols="40" name="sinopsis"></textarea>
				</div>
				
			<button type="submit" name="button">Crear</button>
		
		</div>
			
		<div class="col-md-4 col-xs-4 col-sm-4">
		</div>

	</div>
</form>

{include file="footer.tpl"}
