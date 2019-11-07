<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      DATA INDIHOME
      <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Data tables</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <div class="form-group">
              <label class="col-sm-2 control-label">WITEL</label>
              <div class="col-sm-4">
                <select id="idWitel" name="ID_MENU" class="form-control" data-live-search="true">
                  <option value="-1">-- SELECT ITEM --</option>
                  <?php foreach ($witel as $wtl) {
                    echo '<option value="' . $wtl->witel . '">' . $wtl->witel . '</option>';
                  } ?>
                </select>
              </div>
            </div>
            <br>
            <div class="form-group">
              <label class="col-sm-2 control-label">DATEL</label>
              <div class="col-sm-4">
                <select id="idDatel" name="ID_MENU" class="form-control" data-live-search="true">
                  <option value="-1">-- SELECT ITEM --</option>
                  <?php foreach ($datel as $dtl) {
                    echo '<option value="' . $dtl->datel . '">' . $dtl->datel . '</option>';
                  } ?>
                </select>
              </div>
              <div class="col-sm-2">
                <button id="showWitel" type="submit" class="btn btn-primary notika-btn-primary"><i class="fa fa-eye"></i> Tampilkan</button>
              </div>
              <div>
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Upload Data</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
      <!-- /.box -->
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">KAWASAN TELKOM REGIONAL III</h3>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
          <table id="list-data" class="table table-bordered table-striped" style="width:100%">
            <thead>
              <tr>
                <th>NO</th>
                <th>KAWASAN</th>
                <th>WITEL</th>
                <th>DATEL</th>
                <th>STO</th>
                <th>NCLI</th>
                <th>NDOS</th>
                <th>NDEM</th>
                <th>NO_INET</th>

              </tr>
            </thead>
            <tbody id="view_list">

            </tbody>

          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
    <!-- /.col -->

<!-- /.row -->
</section>
<!-- /.content -->

<!-- /.content-wrapper -->
</body>
<!-- Modal --->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM UPLOAD DATA PELANGGAN INDIHOME</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('c_indihome/import'); ?>
        <form method="post" action="<?= base_url() . 'c_indihome/import'; ?>">
          <div class="form-group">
            <label for="inputEmail3" class="control-label">Lampirkan File</label>
            <input type="file" name="file" class="form-control" id="file" required accept=".xls, .xlsx, .csv" /></p>
            <p class="help-block">Format file yang didukung .xls, .xlsx atau .csv</p>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Upload" name="upload" id="upload">
          </div>
          <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>
</div>
