<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4"><?php echo $titulo; ?></h1>
      <div class="card mb-4">
        <div class="card-header">
          <i class="fas fa-table me-1"></i>
          Ventana de corrección de datos
        </div>
        <?php if (isset($validation)) { ?>
            <div class="alert alert-danger">
                <?php echo $validation->listErrors(); ?>
            </div>
        <?php } ?>
            <form action="<?php echo base_url();?>unidades/actualizar" method="post" autocomplete="off">
           <input type="hidden" value="<?php echo $datos['id'];?>" name="id">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" value="<?php echo $datos['nombre'];?>" class="form-control" id="nombre" name="nombre" autofocus required>
            </div>
            <div class="mb-3">
                <label for="nombre_corto" class="form-label">Nombre corto</label>
                <input type="text" value="<?php echo $datos['nombre_corto'];?>" class="form-control" id="nombre_corto" name="nombre_corto" required>
            </div>
            <a href="<?php echo base_url();?>unidades" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
            </form>

        </div>
                      
</main>