<?php include("header_admin.php"); ?>



<div class="container">    
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-primary">
        <div class="panel-heading">Data Pelanggan Indihome</div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="tabel">
              <thead>
                <tr>
                  <th style="width : 50px">No</th>
                  <th>Nama Sekolah</th>
                  <th>Alamat Sekolah</th>
                  <th>No Telepon</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                  <th>Deskripsi</th>
                  <th style="width : 70px">Action</th>
                </tr>
              </thead>
              <?php $no=1 ; foreach($sekolah as $sekolah){ ?>
                <tr>
                  <td><?php echo $no++; ?>.</td>
                  <td><?php echo $sekolah->nama_sekolah ?></td>
                  <td><?php echo $sekolah->alamat ?></td>
                  <td><?php echo $sekolah->no_telepon ?></td>
                  <td><?php echo $sekolah->latitude ?></td>
                  <td><?php echo $sekolah->longitude ?></td>
                  <td><?php echo $sekolah->deskripsi ?></td>
                  <td>
                    <a href="#" class="btn btn-warning btn-sm" type="button"><i class="fa fa-pencil"></i></a>
                    <a href="#" class="btn btn-danger btn-sm" type="button"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
              <?php } ?>
            </table>
            
          </div>


        </div>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
</div>




<?php include("footer.php"); ?>












