{include file="header.tpl"}
{include file="navAdmin.tpl"}

<h1 class="text-center">Usuarios</h1>
<div class="row">
    <div class="col-md-2 col-xs-2 col-sm-2">
    </div>
    <div class="col-md-8 col-xs-8 col-sm-8">

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Usuario</th>
        <th>Editar Permisos</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$usuarios item=usuario}
      <tr>
        <td>{$usuario['nombre']}</td>
        <td>
            {$usuario['administrador']}
           <form action="{BASEURL}editarPermisos/{$usuario['id_usuario']}" method="get">
               <button type="submit" class="btn btn-info" ><i class="glyphicon glyphicon-edit"></i></button>
          </form>
        </td>
        <td>
            <form action="{BASEURL}borrarUsuario/{$usuario['id_usuario']}" method="get">
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
