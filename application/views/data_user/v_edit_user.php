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

<div class="content-wrapper">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tampil Data User</h3>
    </div>
    <section class="content">
        <?php foreach ($data_user as $ihs) : ?>
        <?= form_open_multipart('c_data_user/update'); ?>
            <div class="form-group">
            <label>Nama User</label>
                <input type="hidden" name="id" class="form-control" value="<?= $ihs->id ?>">
                <input type="text" name="nama" class="form-control" value="<?= $ihs->nama ?>">
            </div>
            <div class="form-group">
            <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?= $ihs->username ?>">
            </div>
            <div class="form-group">
            <label>Password</label>
                <input type="text" name="password" class="form-control" value="<?= $ihs->password ?>">
            </div>
            <div class="form-group">
            <label>Role</label>
                <select class="form-control" name="role_id" value="<?= $ihs->role_id ?>">
                  <option>1</option>
                  <option>2</option>
                </select>
            </div>
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('c_data_user/index'); ?>" class="btn btn-default">Kembali</a>
            <?= form_close(); ?>
            <!-- </form> -->
        <?php endforeach; ?>
    </section>
          </div>
    </div>
</div>