{include file="header.tpl"}

<h1 class="text-center"> {$autor['nombre']} </h1>

<div class="row">
    <div class="col-md-2 col-xs-2 col-sm-2">
    </div>
    <div class="col-md-8 col-xs-8 col-sm-8">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Titulo</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
          </thead>
          <tbody>
              {foreach from= $librosAutor item= libros}
                  <tr>
                    <td><a href="{BASEURL}verLibro/{$libros['id_libro']}"> {$libros['titulo']}</a></td>
                    <td>
                       <form action="{BASEURL}editarLibro/{$libros['id_libro']}" method="get">
                           <button type="submit" class="btn btn-info" ><i class="glyphicon glyphicon-edit"></i></button>
                      </form>
                    </td>
                    <td>
                        <form action="{BASEURL}borrarLibro/{$libros['id_libro']}" method="get">
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
