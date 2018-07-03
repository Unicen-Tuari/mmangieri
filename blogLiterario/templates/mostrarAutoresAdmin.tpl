{include file="header.tpl"}
{include file="navAdmin.tpl"}

<h1 class="text-center">Autores</h1>

<div class="row">
	<div class="col-md-2 col-xs-2 col-sm-2">
	</div>

	<div class="col-md-8 col-xs-8 col-sm-8">
		<form action="{BASEURL}crearAutor" method="get">
			<button type="submit" class="btn btn-success" >Agregar autor</button>
		</form>
	
		<table class="table table-striped">
		<thead>
			<tr>
				<th>Autor</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$autores item=autor}
				<tr>
					<td><a href="{BASEURL}verLibrosAutorAdmin/{$autor['id_autor']}">{$autor['nombre']}</a></td>
					<td>
						<form action="{BASEURL}editarAutor/{$autor['id_autor']}" method="get">
							<button type="submit" class="btn btn-info" ><i class="glyphicon glyphicon-edit"></i></button>
						</form>
					</td>
					<td>
						<form action="{BASEURL}borrarAutor/{$autor['id_autor']}" method="get">
							<button type="submit" class="btn btn-danger" ><i class="glyphicon glyphicon-trash"></i></button>
						</form>
					</td>
				</tr>
			{/foreach}
		</tbody>
		</table>
	</div>
	<div class="col-md-2 col-xs-2 col-sm-2">
	</div>
</div>

{include file="footer.tpl"}
