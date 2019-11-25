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
              <div>
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Upload Data</button>
              </div><br>
 <!-- box -->
    <div class="row">
      <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <center><h3 class="box-title"><b>KAWASAN TELKOM REGIONAL III</b></h3></center>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped" style="width:100%">
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
              <?php $no = 1; foreach($indihome1 as $ihs){ ?>
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


          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- End Box -->
  </section>

  <!-- Box -->
 <section class="content">
<div class="box">
  <div class="box-header">
     <center><h1 class="box-title"><b>PEMETAAN PELANGGAN INDIHOME</b></h1></center><br>  
  <div class="row">
    <div class="col-sm-7">
      <div class="panel panel-primary">
        <div class="panel-heading">Lokasi Pelanggan Indihome</div>
        <div class="panel-body">
 
          <!-- <input id="autocomplete_search" name="autocomplete_search" type="text" class="form-control" placeholder="Search" />
                    <input type="hidden" name="lat">
                    <input type="hidden" name="long"> -->
          
          <?php echo $map['html']; ?>
          <?php echo $map['js']; ?>
        </div>
        <div class="panel-footer"></div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Form Input Data Pelanggan</div>
        <div class="panel-body">
          <?php 
          //notifikasi error
          echo validation_errors('<div class="alert alert-warning" id="warning-alert" >','</div>');
          
          //notifikasi sukses
          if ($this->session->flashdata('sukses')) {
             echo '<div class="alert alert-success" id="success-alert">';
            echo $this->session->flashdata('sukses');
            echo '</div>';
          }
          echo form_open(base_url('c_indihome'), 'class="form-horizontal" entype="multipart/formdata"');   
           ?>

           <form class="form-horizontal"> 
              <div class="form-group">
              <label class="col-sm-4 control-label"> No Internet </label> 
              <div class="col-sm-8">
              <input id="GetNoInetTelkom" type="text" name="NO_INET" class="form-control" placeholder="No Internet" required> 
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Nama </label> 
              <div class="col-sm-8">
              <div id="NamaPelTel">
                <div id="RemoveNamaPelTel">
                  <input type="text" name="NAMA" class="form-control" placeholder="Nama" required>
                </div> 
              </div>
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Jalan </label> 
              <div class="col-sm-8">
              <div id="JalanPelTel">
                <div id="RemoveJalanPelTel">
                  <input type="text" name="JALAN" class="form-control" placeholder="Jalan" required>
                </div> 
              </div>
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> No Jalan </label> 
              <div class="col-sm-8">
              <div id="NoJalanPelTel">
                <div id="RemoveNoJalanPelTel">
                  <input type="text" name="NOJALAN" class="form-control" placeholder="No Jalan" required>
                </div> 
              </div>
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Distrik </label> 
              <div class="col-sm-8">
              <div id="DistrikPelTel">
                <div id="RemoveDistrikPelTel">
                  <input type="text" name="DISTRIK" class="form-control" placeholder="Distrik" required>
                </div> 
              </div> 
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Kota </label> 
              <div class="col-sm-8">
              <div id="KotaPelTel">
                <div id="RemoveKotaPelTel">
                  <input type="text" name="KOTA" class="form-control" placeholder="Kota" required>
                </div> 
              </div> 
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Latitude </label> 
              <div class="col-sm-8">
              <input type="text" name="latitude" class="form-control" placeholder="Latitude " required> 
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Longitude </label> 
              <div class="col-sm-8">
              <input type="text" name="longitude" class="form-control" placeholder="Longitude" required> 
              </div>
              </div> 

              <div class="form-group">
              <label class="col-sm-4 control-label"> Add On </label> 
              <div class="col-sm-8">
             <!--  <input type="text" name="ADD_ON" class="form-control" placeholder="Add On" >  -->
              <select name="ADD_ON" class="form-control" required > 
                <option>INDIHOME</option>
              </select>
              </div>
              </div>


              <div class="form-group">
              <label class="col-sm-4 control-label"> </label> 
              <div class="col-sm-8">
              <button class="btn btn-primary" type="submit">Simpan</button>
              <button class="btn btn-success" onClick="refreshPage()">Reset</button>
              </div>
              </div>


           </form>


           <?php  echo form_close(); ?>


        </div>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
    
  <!-- End Box -->

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

