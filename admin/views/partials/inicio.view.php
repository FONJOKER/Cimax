<!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
<div class="content-wrapper" onload="cargarDatos()">
  <div class="content">
    <!-- Top Statistics -->
    <div class="row">
      <!-- Nuevos usuarios -->
      <div class="col-xl-3 col-lg-6 col-sm-12 ">
        <div class="card card-default card-mini bg-dark">
          <div class="card-header  text-light">
            <h2 class=" text-light">Nuevos usuarios</h2>

            <div class="sub-title  text-light">
              <span class="mr-1">Año <?= date("Y") ?></span>
              <!-- |
                    <span class="mx-1">45%</span>
                    <i class="mdi mdi-arrow-up-bold text-success"></i> -->
            </div>
          </div>
          <div class="card-body">
            <div class="chart-wrapper">
              <div>
                <div id="nuevosUsuarios"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Publicasciones creadas -->
      <div class="col-xl-3 col-lg-6 col-sm-12">
        <div class="card card-default card-mini bg-dark">
          <div class="card-header">
            <h2 class=" text-light">Publicaciones creadas</h2>
            <div class="sub-title  text-light">
              <span class="mr-1">Año <?= date("Y") ?></span>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-wrapper">
              <div>
                <div id="publicacionesCreadas"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Servicios disponibles -->
      <div class="col-xl-3 col-lg-6 col-sm-12">
        <div class="card card-default card-mini bg-dark">
          <div class="card-header">
            <h2 class=" text-light">Servicios disponibles</h2>
            <div class="sub-title  text-light">
              <span class="mr-1">Año <?= date("Y") ?></span>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-wrapper">
              <div>
                <div id="serviciosDisponibles"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Inscripciones -->
      <div class="col-xl-3 col-lg-6 col-sm-12">
        <div class="card card-default card-mini bg-dark">
          <div class="card-header">
            <h2 class=" text-light">Inscripciones</h2>
            <div class="sub-title  text-light">
              <span class="mr-1">Año <?= date("Y") ?></span>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-wrapper">
              <div>
                <div id="usuariosInscritos"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-xl-8">

        <!-- PUBLICACIONES CON MAS VISITAS -->
        <div class="card card-default bg-dark ">
          <div class="card-header">
            <h2 class=" text-light">Publicaciones mas vistas</h2>
          </div>
          <div class="card-body">
            <div class="chart-wrapper">
              <div id="publicacionesMasVistas"></div>
            </div>
          </div>

        </div>


      </div>
      <div class="col-xl-4">
        <!-- USUARIOS POR NIVEL  -->
        <div class="card card-default bg-dark">
          <div class="card-header">
            <h2 class=" text-light">Usuarios por nivel</h2>
          </div>
          <div class="card-body">
            <div id="usuariosNivel"></div>
          </div>
        </div>
      </div>
    </div>

</div>