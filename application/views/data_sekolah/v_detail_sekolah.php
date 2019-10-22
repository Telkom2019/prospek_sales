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

    <section class="content">
        <h4>DETAIL DATA SEKOLAH</h4>

        <table class="table">
            <tr>
                <th>Nama Sekolah</th>
                <td><?= $detail->nama_sekolah ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?= $detail->alamat ?></td>
            </tr>
            <tr>
                <th>No Telepon</th>
                <td><?= $detail->no_telepon ?></td>
            </tr>
            <tr>
                <th>Latitude</th>
                <td><?= $detail->latitude ?></td>
            </tr>
            <tr>
                <th>Longitude</th>
                <td><?= $detail->longitude ?></td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td><?= $detail->deskripsi ?></td>
            </tr>

        </table>
        <a href="<?= base_url('c_data_sekolah/index'); ?>" class="btn btn-primary">Kembali</a>
    </section>
</div>