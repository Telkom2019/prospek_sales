<footer>
<div class="footer">
  <p>Sistem Informasi Geografis</p>
</div>
</footer>
<!-- ======================================================================================================================================================-->
    <script src="<?php echo base_url(); ?>assets/map/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/map/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/map/js/jquery.metisMenu.js"></script>
  <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url(); ?>assets/map/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/map/js/morris/morris.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/map/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/map/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
            $(document).ready(function () {
                $('#tabel').dataTable();
            });
    </script>
  
  <script type="text/javascript">
      
      function setMapToForm(latitude, longitude) 
        {
          $('input[name="latitude"]').val(latitude);
          $('input[name="longitude"]').val(longitude);
        }

    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/map/js/custom.js"></script>
</body>
</html>
