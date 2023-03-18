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
                <form action="<?php echo base_url(); ?>clientes/insertar" method="post" autocomplete="off">
                      <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                    <label>Nombre</label>
                                    <input class="form-control" id="nombre" name="nombre" type="text"  value="<?php echo set_value('nombre')?>" autofocus required />
                            </div>    
                            <div class="col-12 col-sm-6">
                                    <label>Dirección</label>
                                    <input class="form-control" id="direccion" name="direccion" type="text" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <label>Teléfono</label>
                                <input class="form-control" id="telefono" name="telefono" type="text" required />
                            </div>
                            <div class="col-12 col-sm-6">
                                    <label>Correo</label>
                                    <input class="form-control" id="correo" name="correo" type="email" required />
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