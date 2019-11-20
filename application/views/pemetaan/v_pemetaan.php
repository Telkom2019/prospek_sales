<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJGxbuldQVV1qodn-Ge3uSqoe7rWRg8vk&sensor=true"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <div class="row">
         <div class="col-md-12 col-sm-10 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-map-marker"></i></span>

            <div class="info-box-content">
                  <center><h1><b>PEMETAAN PELANGGAN INDIHOME</b></h1></center>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      
    </section>

    <!-- Main content -->
<section class="content">
<div class="box">
  <div class="box-header">
      <div class="container">    
  <div class="row">
    <div class="col-sm-11">
            
      <div class="panel panel-primary">
        <div class="panel-heading">Lokasi Pelanggan Indihome</div>
        <div class="panel-body">
          
          <?php echo $map['html']; ?>
          <?php echo $map['js']; ?>
        </div>
        <div class="panel-footer"></div>
      </div>
    </div>

    
  </div>
</div>
</div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
</body>

