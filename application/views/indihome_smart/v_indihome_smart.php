

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA PROSPEK
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Prospek</a></li>
        <li class="active">Indihome Smart</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <table id="example1" class="table no-border" >
                 <tr>
                    <th>PERIODE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</th>
                    <td><div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right periode_awal" id="datepicker" name="periode_awal">
                        </div>
                    </td>
                    <th><center>TO</center></th> 
                    <td><div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right periode_akhir" id="datepicker1" name="periode_akhir">
                        </div>
                    </td> 
                    <td></td>
                   <td><button id="idIndihomeSmart" type="submit" class="btn bg-navy"  name="submit">Submit</button></td>
                 </tr>
                 </table>
                 <div>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Upload Data</button>
                  </div>
            </div>
          </div>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">INDIHOME SMART</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                        <th>NO</th>
                        <th>WITEL</th>
                        <th>Jumlah tidak berlangganan</th>
                </tr>
                </thead>
                <tbody id="viewIndihomeSmart">

                                 
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
</body>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM UPLOAD DATA PELANGGAN INDIHOME SMART</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('c_indihome_smart/import'); ?>
        <form method="post" action="<?= base_url() . 'c_indihome_smart/import'; ?>">
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

