{include file="header.tpl"}

<div class="banner">

<h3 class="titulo">FORMULARIO JUGADOR</h3>
<form method="post" action="agregar">
<div class="container">
  <select class="custom-select" name="id_equipo">
    <option selected>equipo</option>
    {foreach from=$equipos item=equipo}
      <option value= {$equipo['id_equipo']}  >{$equipo['nombre_equipo']}</option>
     {/foreach}
  </select>
</div>

<div class="form-group">
  <label class="titulo"for="dorsal">dorsal</label>
  <input type="text" class="form-control" id="exampleInputPassword1"name="dorsal">
</div>
<div class="form-group">
  <label class="titulo"for="nombre_jugador">nombre_jugador</label>
  <input type="text" class="form-control" id="exampleInputPassword1"name="nombre_jugador">
</div>
<div class="form-group">
  <label class="titulo" for="fecha_nac">fecha_nacimiento</label>
  <input type="text" class="form-control" id="exampleInputPassword1"name="fecha_nac">
</div>
<div class="form-group">
  <label class="titulo" for="altura">altura</label>
  <input type="text" class="form-control" id="exampleInputPassword1"name="altura">
</div>
<button type="submit" class="btn btn-success">crear jugador</button>
</form>
{include file="footer.tpl"}
