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
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">KAWASAN TELKOM REGIONAL III</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
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
                <tbody>
                <?php $no = 1; foreach($indihome as $ihs){ ?>
                <tr>
                  <td> <?php echo $no++ ?> </td>
                  <td><?php echo $ihs->KAWASAN?></td>
                  <td><?php echo $ihs->WITEL?></td>
                  <td><?php echo $ihs->DATEL?></td>
                  <td><?php echo $ihs->STO?></td>
                  <td><?php echo $ihs->NCLI?></td>
                  <td><?php echo $ihs->NDOS?></td>
                  <td><?php echo $ihs->NDEM?></td>
                  <td><?php echo $ihs->NO_INET?></td>
                  
                </tr>
                <?php } ?>
              </tbody>
                <tfoot>
                <tr>
                        <th>NO</th>
                        <th>KAWASAN</th>
                        <th>WITEL</th>
                        <th>DATEL</th>
                        <th>STO</th>
                              
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
