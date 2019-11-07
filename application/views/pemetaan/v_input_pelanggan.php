

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <div class="row">
         <div class="col-md-12 col-sm-10 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-map-marker"></i></span>

            <div class="info-box-content">
                  <center><h1><b>INPUT DATA PELANGGAN</b></h1></center>
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
    <div class="col-sm-7">
            
      <div class="panel panel-primary">
        <div class="panel-heading">Lokasi Pelanggan Indihome</div>
        <div class="panel-body">
          
          <?php echo $map['html']; ?>
          <?php echo $map['js']; ?>
        </div>
        <div class="panel-footer"></div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Form Input Data Pelanggan</div>
        <div class="panel-body">
          <?php 
          //notifikasi error
          echo validation_errors('<div class="alert alert-warning">','</div>');
          
          //notifikasi sukses
          if ($this->session->flashdata('sukses')) {
             echo '<div class="alert alert-success">';
            echo $this->session->flashdata('sukses');
            echo '</div>';
          }
          echo form_open(base_url('c_map/inputpelanggan'), 'class="form-horizontal" entype="multipart/formdata"');   
           ?>

           <form class="form-horizontal"> 
              <div class="form-group">
              <label class="col-sm-4 control-label"> No Internet </label> 
              <div class="col-sm-8">
              <input id="GetNoInetTelkom" type="text" name="NO_INET" class="form-control" placeholder="No Internet" value="<?php echo set_value('NO_INET') ?>" required> 
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Nama </label> 
              <div class="col-sm-8">
              <input id="NamaPelTel" type="text" name="NAMA" class="form-control" placeholder="Nama" value="<?php echo set_value('NAMA') ?>" required> 
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Jalan </label> 
              <div class="col-sm-8">
              <input type="text" name="JALAN" class="form-control" placeholder="Jalan" value="<?php echo set_value('JALAN') ?>" required> 
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> No Jalan </label> 
              <div class="col-sm-8">
              <input type="text" name="NOJALAN" class="form-control" placeholder="No Jalan" value="<?php echo set_value('NOJALAN') ?>" required> 
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Distrik </label> 
              <div class="col-sm-8">
              <input type="text" name="DISTRIK" class="form-control" placeholder="Distrik" value="<?php echo set_value('DISTRIK') ?>" required> 
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Kota </label> 
              <div class="col-sm-8">
              <input type="text" name="KOTA" class="form-control" placeholder="Kota" value="<?php echo set_value('KOTA') ?>" required> 
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Latitude </label> 
              <div class="col-sm-8">
              <input type="text" name="latitude" class="form-control" placeholder="Latitude " value="<?php echo set_value('latitude') ?>" required> 
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Longitude </label> 
              <div class="col-sm-8">
              <input type="text" name="longitude" class="form-control" placeholder="Longitude " value="<?php echo set_value('longitude') ?>" required> 
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Add On </label> 
              <div class="col-sm-8">
              <input type="text" name="ADD_ON" class="form-control" placeholder="Add On" value="<?php echo set_value('ADD_ON') ?>" required> 
              </div>
              </div>


              <div class="form-group">
              <label class="col-sm-4 control-label"> </label> 
              <div class="col-sm-8">
              <button class="btn btn-primary" type="submit">Simpan</button>
              <button class="btn btn-success" type="reset">Reset</button>
              </div>
              </div>


           </form>


           <?php  echo form_close(); ?>


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

