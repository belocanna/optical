
<script src="../js/usuarios.js"></script>

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Usuarios</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#" onclick="cargarContenido('vista/dashboard.php','content-wrapper')">Inicio</a></li>
          <li class="breadcrumb-item active">Usuarios</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">CRITERIOS DE BUSQUEDAD</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-primary" id="btn-nuevoUsuario">Crear Usuario</button>
            </div>

            <div class="card-body">

            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-lg-12">
          <table class="table table-striped w100-shadow" id="tblUsuarios">
            <thead>
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
      </div>
    </div>
  </div>
