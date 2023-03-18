<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4"><?php echo $titulo; ?></h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<a href="<?php echo base_url()?>/index.php">Tablero</a></li>
        <li class="breadcrumb-item active"><?php echo $titulo; ?></li>
      </ol>

      <?php if (isset($validation)) { ?>
        <div class="alert alert-danger">
          <?php echo $validation->listErrors(); ?>
        </div>
      <?php } ?>
      <div class="card mb-4">
        <div class="card-header">
          <i class="fas fa-table me-1"></i>
          Ingreso de Datos de Configuración del Sistema
        </div>
         <div class="card-body">
            <?php if(isset($validation)){ ?>
                <div class="alert alert-danger">
                    <?php echo $validation->listErrors();?>
                </div>
            <?php } ?>

            <form method="POST" action="<?php echo base_url();?>unidades/insertar"  autocomplete="off">
            <div class="form-group">
              <div class="row">
            <div class="col-12 col-sm-6">
                <label for="tienda_nombre" class="form-label">Nombre de la tienda</label>
                <input type="text" value="<?php echo $nombre['valor'];?>" class="form-control" id="tienda_nombre" name="tienda_nombre" autofocus required>
            </div>
            <div class="col-12 col-sm-6">
                <label for="tienda_rfc" class="form-label">RFC</label>
                <input type="text" value="<?php echo $rfc['valor'];?>"" class="form-control" id="tienda_rfc" name="tienda_rfc">
            </div>
            </div>
            </div>
            <div class="form-group">
              <div class="row">
            <div class="col-12 col-sm-6">
                <label for="tienda_telefono" class="form-label">Teléfono de la tienda</label>
                <input type="text" value="<?php echo $telefono['valor'];?>" class="form-control" id="tienda_telefono" name="tienda_telefono">
            </div>
            <div class="col-12 col-sm-6">
                <label for="tienda_email" class="form-label">Correo de la tienda</label>
                <input type="text" value="<?php echo $email['valor'];?>" class="form-control" id="tienda_email" name="tienda_email">
            </div>
            </div>
            </div>
            <div class="form-group">
              <div class="row">
            <div class="col-12 col-sm-6">
                <label for="tienda_direccion" class="form-label">Dirección de la tienda</label>
                <textarea class="form-control" id="tienda_direccion" name="tienda_direccion" required><?php echo $direccion['valor'];?></textarea>
            </div>
            <div class="col-12 col-sm-6">
                <label for="tienda_email" class="form-label">Leyenda del Ticket</label>
                <textarea class="form-control" id="tienda_email" name="tienda_email" required><?php echo $leyenda['valor'];?> </textarea>
            </div>
            </div>
            </div>
            <br>

            <a href="<?php echo base_url();?>unidades" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
            </form>
            

      </div>
    </div>
  </main>
