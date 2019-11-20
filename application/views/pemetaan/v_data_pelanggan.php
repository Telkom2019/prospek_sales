  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA PELANGGAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Kelola Data</a></li>
        <li class="active">Data Pelanggan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php 
          //notifikasi sukses
          if ($this->session->flashdata('sukses')) {
             echo '<div class="alert alert-success" id="success-alert">';
            echo $this->session->flashdata('sukses');
            echo '</div>';
          }
          echo form_open(base_url('c_map/datapelanggan'), 'class="form-horizontal" entype="multipart/formdata"');   
           
           ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tampil Data Pelanggan</h3>
              <br>
              <br>
              <a href="<?php echo base_url()?>c_map/inputpelanggan"><button class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data Pelanggan</button></a>
            </div>
            <!-- /.box-header -->
            <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Pelanggan</button> -->

            

            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width : 50px">NO</th>
                  <th>NO INTERNET</th>
                  <th>NAMA PELANGGAN</th>
                  <th>JALAN</th>
                  <th>NO JALAN</th>
                  <th>DISTRIK</th>
                  <th>KOTA</th>
                  <th>LATITUDE</th>
                  <th>LONGITUDE</th>
                  <th>ADD ON</th>
                  <th style="width : 70px">Action</th>
                </tr>
                </thead>
                <tbody>

                  <?php $no = 1; foreach($pelanggan as $pelanggan){ ?>
                <tr>
                  <td><?php echo $no++; ?>.</td>
                  <td><?php echo $pelanggan->NO_INET ?></td>
                  <td><?php echo $pelanggan->NAMA ?></td>
                  <td><?php echo $pelanggan->JALAN ?></td>
                  <td><?php echo $pelanggan->NOJALAN ?></td>
                  <td><?php echo $pelanggan->DISTRIK ?></td>
                  <td><?php echo $pelanggan->KOTA ?></td>
                  <td><?php echo $pelanggan->LATITUDE ?></td>
                  <td><?php echo $pelanggan->LONGITUDE ?></td>
                  <td><?php echo $pelanggan->ADD_ON ?></td>
                  <td>
                    <a href="<?php echo base_url('c_map/update/'.$pelanggan->NO_INET); ?>" class="btn btn-warning btn-sm" type="button"><i class="fa fa-pencil"></i></a>
                    <a href="<?php echo base_url('c_map/delete/'.$pelanggan->NO_INET); ?>" class="btn btn-danger btn-sm" type="button"><i class="fa fa-trash" onclick="return confirm('Yakin data ini dihapus. ?')"></i></a>
                  </td> 
                </tr> 
                <?php } ?>
                </tbody>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>


</div>
</div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
</body>