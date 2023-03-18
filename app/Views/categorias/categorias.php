<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4"><?php echo $titulo; ?></h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Tablero</a></li>
        <li class="breadcrumb-item active"><?php echo $titulo; ?></li>
      </ol>
      <div>
        <p>
          <a href="<?php echo base_url(); ?>categorias/nuevo" class="btn btn-info">Agregar</a>
          <a href="<?php echo base_url(); ?>categorias/eliminados" class="btn btn-warning">Eliminados</a>
        </p>
      </div>
      <?php if (isset($validation)) { ?>
        <div class="alert alert-danger">
          <?php echo $validation->listErrors(); ?>
        </div>
      <?php } ?>
      <div class="card mb-4">
        <div class="card-header">
          <i class="fas fa-table me-1"></i>
          Detalle de Categorias
        </div>
            <div class="card-body">
               <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                   
                        <tbody>
                              <?php foreach($datos as $dato){?>
                             <tr>
                                  <td><?php echo $dato['id'];?></td>
                                  <td><?php echo $dato['nombre'];?></td>
                                  <td><a href="<?php echo base_url().'categorias/editar/'.$dato['id'];?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a></td>
                                  <td><a href="<?php echo base_url().'categorias/eliminar/'.$dato['id'];?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                             </tr>
                             <?php }?>                       
                        </tbody>
                  
                    </table>
                </div>
            </div>         
</main>