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
                                            echo '<option value="'.$wtl->witel.'">'.$wtl->witel.'</option>';
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
                                            echo '<option value="'.$dtl->datel.'">'.$dtl->datel.'</option>';
                                        } ?>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <button id="showWitel" type="submit" class="btn btn-primary notika-btn-primary"><i class="fa fa-eye"></i> Tampilkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
      <div class="row">
        <div class="col-xs-12">
          
            
        </div>
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
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
