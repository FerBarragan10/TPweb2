{include file="header.tpl"}
{include file="navbaradmin.tpl"}

  <div class="row">
    <div class="container col-lg-6 col-sm-12">
      <h1 class="titulo">{$Titulo1}</h1>
    <table class="table table-bordered table-dark col-3">
      <thead>
      <tr>
        <th scope='col'>nombre_equipo</th>
        <th scope='col'>pos_tabla</th>
        <th scope='col'>clasificacion_copa</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          {foreach from=$equipos item=equipo}
            <tr><td>{$equipo['nombre_equipo']}</td>
              <td>{$equipo['pos_tabla']}</td>
              <td>{$equipo['clasificacion_copa']}</td>
              <td >
                <a href="borrarEquipo/{$equipo['id_equipo']}">BORRAR</a>
                <a href="editarEquipo/{$equipo['id_equipo']}">EDITAR</a>
                <a href="addEquipo">NUEVO</a>
              </td>
            </tr>
           {/foreach}
        </tr>

      </tbody>
    </table>
    </div>






    <div class="container col-lg-6 col-sm-12">
    <h1 class="titulo">{$Titulo2}</h1>
    <table class="table table-bordered table-dark col-9">
    <thead>
    <tr>

      <th scope="col">#equipo</th>
        <th scope="col">dorsal</th>
      <th scope="col">nombre de jugador</th>
      <th scope="col">fecha nacimiento</th>
      <th scope="col">altura</th>
    </tr>
    </thead>
    <tbody>
    <tr>
     {foreach from=$jugadores item=jugador}
      <tr>
          <td>{$jugador['id_equipo']}</td>
          <td>{$jugador['dorsal']}</td>
          <td>{$jugador['nombre_jugador']}</td>
          <td>{$jugador['fecha_nac']}</td>
          <td>{$jugador['altura']}</td>
          <td >
            <a href="borrar/{$jugador['id_jugador']}">BORRAR</a>||
            <a href="editar/{$jugador['id_jugador']}">EDITAR</a>
          </td>
      </tr>
      {/foreach}

      </tr>
    </tbody>
    </table>
    <a  href="addJugador" class="btn btn-primary btn-lg active " role="button" aria-pressed="true">agregar jugador</a>

    </div>


  </div>
  {include file="footer.tpl"}
