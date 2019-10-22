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

<div class="content-wrapper">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tampil Data Sekolah</h3>
    </div>
    <section class="content">
        <?php foreach ($data_sekolah as $ihs) : ?>
        <?= form_open_multipart('c_data_sekolah/update'); ?>
            <div class="form-group">
            <label>Nama Sekolah</label>
                <input type="hidden" name="id_sekolah" class="form-control" value="<?= $ihs->id_sekolah ?>">
                <input type="text" name="nama_sekolah" class="form-control" value="<?= $ihs->nama_sekolah ?>">
            </div>
            <div class="form-group">
            <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?= $ihs->alamat ?>">
            </div><div class="form-group">
            <label>No Telepon</label>
                <input type="text" name="no_telepon" class="form-control" value="<?= $ihs->no_telepon ?>">
            </div><div class="form-group">
            <label>Latitude</label>
                <input type="text" name="latitude" class="form-control" value="<?= $ihs->latitude ?>">
            </div><div class="form-group">
            <label>Longitude</label>
                <input type="text" name="longitude" class="form-control" value="<?= $ihs->longitude ?>">
            </div><div class="form-group">
            <label>Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" value="<?= $ihs->deskripsi ?>">
            </div>

            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('c_data_sekolah/index'); ?>" class="btn btn-default">Kembali</a>
            <?= form_close(); ?>
            <!-- </form> -->
        <?php endforeach; ?>
    </section>
          </div>
    </div>
</div>