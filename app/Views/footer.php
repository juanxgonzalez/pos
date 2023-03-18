<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Todos los Derechos Reservados Códigos Web JC <?php echo date('Y'); ?></div>
                <div>
                    <a href="#">Política de Privacidad</a>
                    &middot;
                    <a href="#">Términos &amp; Condiciones</a>
                </div>
            </div>
        </div>
    </div>
</footer
</div>

   <!--
<script src="<?php echo base_url();?>js/all.min.js"></script>   


-->
<script src="<?php echo base_url();?>js/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>js/scripts.js"></script>
<script src="<?php echo base_url();?>js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>js/simple-datatables@latest.js"></script>
<script src="<?php echo base_url();?>assets/demo/datatables-demo.js"></script>
<script src="<?php echo base_url();?>js/datatables-simple-demo.js"></script>

<script>
    $('#modal-confirma').on('show.bs.modal', function (e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

    });
</script>


</body>

</html>