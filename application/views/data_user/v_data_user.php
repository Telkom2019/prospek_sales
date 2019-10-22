  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA USER
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Kelola Data</a></li>
        <li class="active">Data User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tampil Data User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Mahasiswa</button>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th colspan="2">Aksi</th>
                </tr>
                </thead>
                <tbody>

                  <?php $no = 1; foreach($data_user as $ihs){ ?>
                <tr>
                  <td> <?php echo $no++ ?> </td>
                  <!-- <td><?php echo $ihs->id?></td> -->
                  <td><?php echo $ihs->nama?></td>
                  <td><?php echo $ihs->username?></td>
                  <!-- <td><?php echo $ihs->password?></td> -->
                  <!-- <td><?php echo $ihs->role_id?></td> -->
                  <td><?= anchor('c_data_user/detail/'.$ihs->id,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                  <td onclick="javascript: return confirm('Anda yakin akan menghapus data ini?')">
                        <?= anchor('c_data_user/hapus/'.$ihs->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                  </td>
                  <td>
                        <?= anchor('c_data_user/edit/'.$ihs->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
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
            <?= form_open_multipart('c_data_user/tambah_aksi'); ?>
            <div class="form-group">
            <div class="form-group">
            <label>Nama User</label>
                <input type="text" name="nama" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
            <label>Username</label>
                <input type="text" name="username" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
            <label>Password</label>
                <input type="text" name="password" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
            <label>Role</label>
                <select class="form-control" name="role_id">
                  <option selected>--Pilih Role--</option>  
                  <option>1</option>
                  <option>2</option>
                </select>
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