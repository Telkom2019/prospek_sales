  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA SEKOLAH
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Kelola Data</a></li>
        <li class="active">Data Sekolah</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tampil Data Sekolah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Sekolah</button>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                        <th>NO</th>
                        <th>Nama Sekolah</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Deskripsi</th>
                        <th colspan="2">Aksi</th>
                </tr>
                </thead>
                <tbody>

                  <?php $no = 1; foreach($data_sekolah as $ihs){ ?>
                <tr>
                  <td> <?php echo $no++ ?> </td>
                  <td><?php echo $ihs->nama_sekolah?></td>
                  <td><?php echo $ihs->alamat?></td>
                  <td><?php echo $ihs->no_telepon?></td>
                  <td><?php echo $ihs->latitude?></td>
                  <td><?php echo $ihs->longitude?></td>
                  <td><?php echo $ihs->deskripsi?></td>

                  <td><?= anchor('c_data_sekolah/detail/'.$ihs->id_sekolah,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                  <td onclick="javascript: return confirm('Anda yakin akan menghapus data ini?')">
                        <?= anchor('c_data_sekolah/hapus/'.$ihs->id_sekolah,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                  </td>
                  <td>
                        <?= anchor('c_data_sekolah/edit/'.$ihs->id_sekolah, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                  </td>
            
                </tr>
                <?php } ?>
                
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA USER</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <?= form_open_multipart('c_data_sekolah/tambah_aksi'); ?>
            <div class="form-group">
            <div class="form-group">
            <label>Nama Sekolah</label>
                <input type="text" name="nama_sekolah" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
            <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
            <label>No Telepon</label>
                <input type="text" name="no_telepon" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
            <label>Latitude</label>
                <input type="text" name="latitude" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
            <label>Longitude</label>
                <input type="text" name="longitude" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
            <label>Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" required autocomplete="off">
            </div>
            
            <div class="form-group">
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>
</div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
</body>