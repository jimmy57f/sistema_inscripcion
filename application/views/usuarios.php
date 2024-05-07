<!DOCTYPE html>
<html lang="es">
<head>

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
  <h2 class="mb-4">Distrito # </h2><h2></h2>
  <button class="btn btn-primary " data-toggle="modal" data-target="#modalAgregar" style="margin: 5px"> Agregar</button>
   <button class="btn btn-danger " style="margin: 5px"> Pendientes pago</button>
  <table id="miembrosTable" class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Distrito</th>
        <th>Iglesia</th>
        <th>Sexo</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tbody>
  <tr>
    <td>1</td>
    <td>Nombre1</td>
    <td>Distrito1</td>
    <td>Iglesia1</td>
    <td>Masculino</td>
    <td>
      <button class="btn btn-info"><i class="fas fa-search" data-toggle="modal" data-target="#modalInspeccionar"></i></button>
      <button class="btn btn-warning" data-toggle="modal" data-target="#modalEditar"><i class="fas fa-pencil-alt"></i></button>
      <button class="btn btn-danger"><i class="fas fa-trash-alt" ></i></button>
      <button class="btn btn-success" data-toggle="modal" data-target="#modalTabla"><i class="fas fa-file-invoice"></i>
</button>
    </td>
  </tr>
  <!-- Puedes agregar más filas aquí -->
</tbody>

      <!-- Aquí irán los datos de los miembros -->
    </tbody>
  </table>
</div>
<!-- modal abonos -->
<div class="modal fade" id="modalTabla" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tabla de Abonos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Input para agregar abono -->
        <div class="form-inline" >
          
            <input type="number" style="margin: 6px; width: 20%; " step="0.01" class="form-control" id="inputAbono">
         
          
            <!-- Botón para agregar abono -->
            <button type="button" style="margin: 5px" class="btn btn-success mb-2" id="btnAgregarAbono"><i class="fas fa-plus"></i></button>
       
        </div>
        <!-- Tabla de abonos -->
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Fecha</th>
              <th scope="col">Abonos</th>
              <th scope="col">Saldo</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Abonado1</td>
              <td>Saldo1</td>
            </tr>
            <tr>
              <td>Abonado2</td>
              <td>Saldo2</td>
            </tr>
            <!-- Agrega más filas según sea necesario -->
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!--fin modal abono -->

<!-- Modal para agregar joven -->
<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario -->
        <form>
          <div class="form-inline">
            <label for="nombre" style="margin-left: -5px; margin-right: 5px">Nombre</label>
            <input type="text" class="form-control" id="nombre" >
          </div>
          <div class="form-row">
            <div class="form-inline col" style="margin-top: 15px;">
              <label for="edad" style="margin-right: 5px; margin-left: 20px; ">Edad</label>
              <input type="number" style="width: 80px;" class="form-control" id="edad">
            </div>
            <div class="form-inline col">
              <label for="tallaCamisa" style="margin-right: 5px">Talla de Camisa</label>
              <select class="form-control" id="sexo">
                <option value="s">S</option>
                <option value="m">M</option>
                <option value="l">L</option>
                 <option value="xs">XS</option>
                <option value="xl">XL</option>
                <option value="xxl">XXL</option>
                <option value="xxxl">XXXL</option>
              </select>
              
            </div>
          </div>
          <div class="form-inline" style="margin-top: 15px;">
            <div class="form-inline col" >
              <label for="sexo" style="margin-right: 5px; margin-left: 7px;" >Sexo</label>
              <select class="form-control" id="sexo">
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-inline col">
              <label for="distrito" style="margin-right: 5px; margin-left: 5px;">Distrito</label>
              <select class="form-control" style="margin-top: 15px" id="distrito">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
            </div>
            <div class="form-inline col">
              <label for="iglesia" style="margin-right: 5px">Iglesia</label>
              <input type="text" class="form-control" style="width: 170px" id="iglesia" >
            </div>
          </div>
          
          <div class="form-inline col" style="margin-top: 15px;">
              <label for="edad" style="margin-right: 5px; margin-left: -5px">Abono</label>
              <input type="number" style="width: 80px;" class="form-control" step="0.01" id="edad">
            </div>
            <button type="submit" style="margin-top: 10px; margin-left: 200px" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--fin modal agregar joven -->


<!-- modal editar joven-->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar joven</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario -->
        <form>
          <div class="form-inline">
            <label for="nombre" style="margin-left: -5px; margin-right: 5px">Nombre</label>
            <input type="text" class="form-control" id="nombre" >
          </div>
          <div class="form-row">
            <div class="form-inline col" style="margin-top: 15px;">
              <label for="edad" style="margin-right: 5px; margin-left: 20px; ">Edad</label>
              <input type="number" style="width: 80px;" class="form-control" id="edad">
            </div>
            <div class="form-inline col">
              <label for="tallaCamisa" style="margin-right: 5px">Talla de Camisa</label>
              <select class="form-control" id="sexo">
                <option value="s">S</option>
                <option value="m">M</option>
                <option value="l">L</option>
                 <option value="xs">XS</option>
                <option value="xl">XL</option>
                <option value="xxl">XXL</option>
                <option value="xxxl">XXXL</option>
              </select>
              
            </div>
          </div>
          <div class="form-inline" style="margin-top: 15px;">
            <div class="form-inline col" >
              <label for="sexo" style="margin-right: 5px; margin-left: 7px;" >Sexo</label>
              <select class="form-control" id="sexo">
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-inline col">
              <label for="distrito" style="margin-right: 5px; margin-left: 5px;">Distrito</label>
              <select class="form-control" style="margin-top: 15px" id="distrito">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
            </div>
            <div class="form-inline col">
              <label for="iglesia" style="margin-right: 5px">Iglesia</label>
              <input type="text" class="form-control" style="width: 170px" id="iglesia" >
            </div>
          </div>
          
          <div class="form-inline col" style="margin-top: 15px;">
              <label for="edad" style="margin-right: 5px; margin-left: -5px">Abono</label>
              <input type="number" style="width: 80px;" class="form-control" step="0.01" id="edad">
            </div>
            <button type="submit" style="margin-top: 10px; margin-left: 200px" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--fin modal editar joven  -->
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
