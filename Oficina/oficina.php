<?php

include("../Componentes/header.php");
include("../Componentes/menuA.php");
include("../Modelo/Oficina.php");
$oficina = new Oficina();
?>


<div class="container">
  <div class="alert alert-dismissible alert-success" style="margin-top:20px;">
    <center><strong>
        <h1>Oficinas</h1>
      </strong> </center>
  </div>


  <br>
  <form action="" method="POST">
    <div class="container">
      <div class="form-group">
        <div class="row">
          <input type="number" class="form-control" hidden id="codigooficina" placeholder="Codigo">
          <div class="col">
            <strong><label>Nombre de Oficina</label></strong>
            <input type="text" class="form-control" id="nombreoficina" placeholder="Nombre " required=''>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col">
            <button type="submit" class="btn btn-success" id="guardarO">Guardar</button>
          </div>
        </div>
      </div>
  </form>
</div>
</div>

<div class="container">
  <div id="tablaOficina"></div>
</div>

<?php include('edit_delete.php'); ?>
<?php include('../Componentes/footer.php');?>



<!-- REFRESCAR LA TABLA -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#tablaOficina').load('tablaOficina.php');
  });
</script>


<!-- FUNCION ACTUALIZAR Y GUARDAR -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#guardarO').click(function() {
      nombre = $('#nombreoficina').val();
      codigo = $('#codigooficina').val();
      agregarO(nombre, codigo);

      cleanOfi();

    });


    $('#actualizarO').click(function() {
      actualizaO();
    });
  });
</script>