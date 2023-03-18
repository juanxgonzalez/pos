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
        <form action="<?php echo base_url(); ?>clientes/actualizar" method="post" autocomplete="off">
            <input type="hidden" value="<?php echo $datos['id']; ?>" name="id">
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label>Nombre</label>
                        <input class="form-control" id="nombre" value="<?php echo $datos['nombre']; ?>" name="nombre" type="text" autofocus required />
                    </div>
                    <div class="col-12 col-sm-6">
                        <label>Dirección</label>
                        <input class="form-control" id="direccion" value="<?php echo $datos['direccion']; ?>" name="direccion" type="text" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label>Teléfono</label>
                        <input class="form-control" id="telefono" value="<?php echo $datos['telefono']; ?>" name="telefono" type="tel" required />
                    </div>
                    <div class="col-12 col-sm-6">
                        <label>Correo</label>
                        <input class="form-control" id="correo" name="correo" type="email" value="<?php echo $datos['correo'] ?>" required />
                    </div>
                </div>
            </div>
            <br>
            <a href="<?php echo base_url(); ?>clientes" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
</div>
</div>
</main>