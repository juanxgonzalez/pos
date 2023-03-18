<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo;?></h4>
            <div>
                <p>
                   <a href="<?php echo base_url();?>categorias" class="btn btn-warning">Categorias</a>
                </p>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Detalle de Eliminados
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
                                  <td><a href="#" data-href="<?php echo base_url() . 'unidades/reingresar/' . $dato['id']; ?>" data-bs-toggle="modal" data-bs-target="#modal-confirma" data-placement="top" title="Reingresar registro"><i class="fas fa-arrow-alt-circle-up"></i></a></td>
                             </tr>
                             <?php }?>                       
                        </tbody>
                  
                    </table>
                </div>
            </div>
</main>

  <!-- Modal -->
  <div class="modal fade" id="modal-confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel">
            Reingresar registro</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Desea reingresar este registro?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-ligth" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-ligth" data-bs-dismiss="modal">No</button>
          <a class="btn btn-danger btn-ok">Si</button></a>
        </div>
      </div>
    </div>
  </div>