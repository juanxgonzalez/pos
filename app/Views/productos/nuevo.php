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
            <?php if (isset($validation)) { ?>
                <div class="alert alert-danger">
                <?php echo $validation->listErrors(); ?>
                </div>
            <?php } ?>
            <div>
                <form action="<?php echo base_url(); ?>productos/insertar" method="post" autocomplete="off">
                      <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <label>Código</label>
                                <input class="form-control" id="codigo" name="codigo" type="text" autofocus required />
                            </div>
                            <div class="col-12 col-sm-6">
                                <label>Nombre</label>
                                <input class="form-control" id="nombre" name="nombre" type="text"  value="<?php echo set_value('nombre')?>" required />
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <label>Unidad</label>
                                <select class="form-control" id="id_unidad" name="id_unidad" required>
                                    <option value="">Seleccione una unidad</option>
                                    <?php foreach ($unidades as $unidad) { ?>
                                        <option value="<?php echo $unidad['id']; ?>"><?php echo $unidad['nombre']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label>Categoría</label>
                                <select class="form-control" id="id_categoria" name="id_categoria" required>
                                    <option value="">Seleccione una categoría</option>
                                    <?php foreach ($categorias as $categoria) { ?>
                                        <option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['nombre']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <label>Precio Venta</label>
                                <input class="form-control" id="precio_venta" name="precio_venta" type="text" required />
                            </div>
                            <div class="col-12 col-sm-6">
                                <label>Precio Compra</label>
                                <input class="form-control" id="precio_compra" name="precio_compra" type="text" required />
                            </div>
                        </div>   
                        <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label>Stock minimo</label>
                                    <input class="form-control" id="stock_minimo" name="stock_minimo" type="text" required />
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Es inventariable</label>
                                    <select class="form-control" id="inventariable" name="inventariable" required>
                                        <option value="">Seleccione una opción</option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                          </div>
                    </div>
                        <br>
                        <a href="<?php echo base_url(); ?>productos" class="btn btn-primary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                </form>
            </div>
        </div>
    </main>