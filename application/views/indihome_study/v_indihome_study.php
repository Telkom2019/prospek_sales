

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
        <li class="active">Indihome Study</li>
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
                   <td><button id="idIndihomeStudy" type="submit" class="btn bg-navy"  name="submit">Submit</button></td>
                 </tr>
                 </table>
              <h3 class="box-title">INDIHOME STUDY</h3>
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
                <tbody id="viewIndihomeStudy">

                                 
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

