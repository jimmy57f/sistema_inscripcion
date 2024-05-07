<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla de miembros</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php include("navbar.php") ?>

<div class="container mt-5">
  <h2 class="mb-4">Seleccione Distrito</h2><h2></h2>
  
  <button class="btn btn-primary " style="margin: 5px">  1</button>
  <button class="btn btn-dark " style="margin: 5px">  2</button>
  <button class="btn btn-dark " style="margin: 5px">  3</button>
  <button class="btn btn-dark " style="margin: 5px">  4</button>
  <button class="btn btn-dark " style="margin: 5px">  6</button>
  <button class="btn btn-dark " style="margin: 5px">  7</button>
  <button class="btn btn-dark " style="margin: 5px">  8</button>
  <button class="btn btn-danger " style="margin: 5px"> Mostrar Todos</button>
  <table id="miembrosTable" class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Distrito</th>
        <th>Saldo</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tbody>
  <tr>
    <td>1</td>
    <td>Nombre1</td>
    <td>Distrito1</td>
    <td>$30</td>
    <td>
      <button class="btn btn-info" data-toggle="modal" data-target="#modalInspeccionar"><i class="fas fa-search"></i></button>
     
    </td>
  </tr>
  <!-- Puedes agregar más filas aquí -->
</tbody>


      <!-- Aquí irán los datos de los miembros -->
    </tbody>
  </table>
</div>
<!-- modal -->

<!--modal inspeccionar joven -->
<div class="modal fade" id="modalInspeccionar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inspeccionador de información</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario -->
        <form>
          <div class="form-inline">
            <label for="nombre" style="margin-left: -5px; margin-right: 7px">Nombre: </label>
            <h7>Juan Perez</h7>
          </div>
          <div class="form-row">
            <div class="form-inline col" style="margin-top: 15px;">
              <label for="edad" style="margin-right: 5px; margin-left: -5px; ">Edad: </label>
              <h7>22</h7>
            </div>
            <div class="form-inline col">
              <label for="tallaCamisa" style="margin-right: 5px">Talla de Camisa: </label>
              <h7>XL</h7>
              
            </div>
          </div>
          <div class="form-inline" style="margin-top: 15px;">
            <div class="form-inline col" >
              <label for="sexo" style="margin-right: 5px; margin-left: -20px;" >Sexo: </label>
              <h7>Masculino</h7>
            </div>
          </div>
          <div class="form-row">
            <div class="form-inline col">
              <label for="distrito" style="margin-right: 5px; margin-left: -5px;">Distrito: </label>
              <h7>7</h7>
            </div>
            <div class="form-inline col">
              <label for="iglesia" style="margin-right: 5px">Iglesia:</label>
              <h7>San isidro</h7>
            </div>
          </div>
          
          <div class="form-inline col" style="margin-top: 15px;">
              <label for="edad" style="margin-right: 5px; margin-left: -20px">Abono: </label>
              <h7>22.50</h7>
            </div>
            <button type="submit" style="margin-top: 10px; margin-left: 200px" class="btn btn-primary">cerrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--fin modal inspeccionar joven -->




<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    // Inicializar DataTable
    $('#miembrosTable').DataTable();

    // Agregar iconos a la última columna (Acciones)
    $('#miembrosTable tbody').on('click', 'tr', function () {
      var data = $('#miembrosTable').DataTable().row(this).data();
      alert('Has clickeado en: ' + data[0]);
    });
  });
</script>

</body>
</html>
