<?php include("header_admin.php"); ?>



<div class="container">    
  <div class="row">
    <div class="col-sm-7">
      <div class="panel panel-primary">
        <div class="panel-heading">Lokasi Pelanggan Indihome</div>
        <div class="panel-body">
          
          <?php echo $map['html']; ?>

        </div>
        <div class="panel-footer"></div>
      </div>
    </div>

    <div class="col-sm-5">
      <div class="panel panel-primary">
        <div class="panel-heading">Input Data Pelanggan</div>
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
          echo form_open(base_url('c_map/inputsekolah'), 'class="form-horizontal" entype="multipart/formdata"');   
           ?>

           <form class="form-horizontal"> 
              <div class="form-group">
              <label class="col-sm-4 control-label"> Nama Sekolah </label> 
              <div class="col-sm-8">
              <input type="text" name="nama_sekolah" class="form-control" placeholder="Nama Sekolah" value="<?php echo set_value('nama_sekolah') ?>" required> 
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Alamat </label> 
              <div class="col-sm-8">
              <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo set_value('alamat') ?>" required> 
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> No Telepon </label> 
              <div class="col-sm-8">
              <input type="text" name="no_telepon" class="form-control" placeholder="No Telepon" value="<?php echo set_value('no_telepon') ?>" required> 
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
              <label class="col-sm-4 control-label"> Deskripsi </label> 
              <div class="col-sm-8">
              <textarea type="text" name="deskripsi" class="form-control" value="<?php echo set_value('deskripsi') ?>" required></textarea>
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




<?php include("footer.php"); ?>












