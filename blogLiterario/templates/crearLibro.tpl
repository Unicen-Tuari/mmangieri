{include file= "header.tpl"}
<form action="guardarLibro" method="post">
    <label for="titulo"> Titulo</label>
    <input type="text" name="titulo" value="">
    <label for="autor"> Autor</label>
    <input type="text" name="autor" value="">
    <label for="genero">Genero</label>
    <input type="text" name="genero" value="">
    <label for="sinopsis">Sinopsis</label>
    <input type="text" name="sinopsis" value="">
    <button type="submit" name="button">Crear</button>
  </form>
{include file="footer.tpl"}
