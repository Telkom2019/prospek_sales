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

    <section class="content">
        <h4>DETAIL DATA USER</h4>

        <table class="table">
            <tr>
                <th>Nama</th>
                <td><?= $detail->nama ?></td>
            </tr>
            <tr>
                <th>Username</th>
                <td><?= $detail->username ?></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><?= $detail->password ?></td>
            </tr>
            <tr>
                <th>Role</th>
                <td><?= $detail->role_id ?></td>
            </tr>
        </table>
        <a href="<?= base_url('c_data_user/index'); ?>" class="btn btn-primary">Kembali</a>
    </section>
</div>