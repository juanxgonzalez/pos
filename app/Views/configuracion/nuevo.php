<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4"><?php echo $titulo; ?></h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?php echo base_url()?>/index.php">Tablero</a></li>
        <li class="breadcrumb-item active"><?php echo $titulo; ?></li>
      </ol>
      <div>
  
      <div class="card mb-4">
        <div class="card-header">
          <i class="fas fa-table me-1"></i>
          Ventana de ingreso de datos
        </div>
        <div class="card-body">
            <?php if(isset($validation)){ ?>
                <div class="alert alert-danger">
                    <?php echo $validation->listErrors();?>
                </div>
            <?php } ?>
                <?php if(isset($validation)){ ?>
                <div class="alert alert-danger">
                    <?php echo $validation->listErrors();?>
                </div>
            <?php } ?>

            <form method="POST" action="<?php echo base_url();?>unidades/insertar"  autocomplete="off">
        
            <?php echo csrf_field();?>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de la tienda</label>
                <input type="text" value="<?php echo $nombre['valor'];?>" class="form-control" id="nombre_tienda" name="nombre_tienda" autofocus required>
            </div>
            <div class="mb-3">
                <label for="tienda_rfc" class="form-label">RFC de la tienda</label>
                <input type="text"value="<?php echo $rfc['valor'];?>"" class="form-control" id="tienda_rfc" name="tienda_rfc" required>
            </div>
            <div class="mb-3">
                <label for="tienda_telefono" class="form-label">Teléfono de la Tienda</label>
                <input type="text" value="<?php echo $telefono['valor'];?>" class="form-control" id="tienda_telefono" name="tienda_telefono" required>
            </div>
            <div class="mb-3">
                <label for="tienda_email" class="form-label">Email de la tienda</label>
                <textarea class="form-control" id="tienda_email" name="tienda_email" required>
            </div>
            <div class="mb-3">
                <label for="tienda_direccion" class="form-label">Dirección de la tienda</label>
                <input type="text" value="<?php echo $direccion['valor'];?>" class="form-control" id="tienda_direccion" name="tienda_direccion" required>
            </div>
            <div class="mb-3">
                <label for="ticket_leyenda" class="form-label">Nombre corto</label>
                <input type="text"value="<?php echo $leyenda['valor'];?>"" class="form-control" id="ticket_leyenda" name="ticket_leyenda" required>
            </div>
            <a href="<?php echo base_url();?>unidades" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
            </form>

        </div>
                      
</main>