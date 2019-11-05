<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 1.0
  </div>
  <strong>Copyright &copy; 2019 <a href="https://www.indihome.co.id/">Digital Service & Wifi</a>.</strong> All rights reserved.
</footer>

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('<?php echo base_url() ?>assets/uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url() ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>

<script src="<?php echo base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<!-- page script -->
<script>
  $(function() {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging': true,
      'lengthChange': false,
      'searching': false,
      'ordering': true,
      'info': true,
      'autoWidth': false
    })
  })
</script>
<script type="text/javascript">
  $(document).ready(function() {

    $('#datepicker').datepicker({
      //merubah format tanggal datepicker ke dd-mm-yyyy
      format: "yyyy-mm-dd",
      //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
      //format: "dd-mm-yyyy",
      autoclose: true
    });
    $('#datepicker1').datepicker({
      //merubah format tanggal datepicker ke dd-mm-yyyy
      format: "yyyy-mm-dd",
      //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
      //format: "dd-mm-yyyy",
      autoclose: true
    });
  });
</script>

<script type="text/javascript">
  var MyTable = $('#list-data').dataTable();


  window.onload = function() {
    tampilWitel();
    tampilOtt();
    tampilMovin();
    tampilIndihomeGamer();
    tampilIndihomeMusic();
    tampilVideoCall();
    tampilIndiStorage();
    tampilIndiServer();
    tampilPlc();
    tampilWifiExtender();
    tampilIndihomeSmart();
    tampilIndihomeStudy();



    <?php
    if ($this->session->flashdata('msg') != '') { }
    ?>
  }

  function refresh() {
    MyTable = $('#list-data').dataTable();
  }

  function tampilOtt() {
    var periodeAwal = $('.periode_awal').val();
    var periodeAkhir = $('.periode_akhir').val();
    var cacing = '~';
    $.get('<?php echo base_url('c_ott/view_ott/'); ?>' + periodeAwal + cacing + periodeAkhir, function(data) {
      MyTable.fnDestroy();
      $('#view_ott').html(data);
      refresh();

    });
  }

  function tampilMovin() {
    var periodeAwal = $('.periode_awal').val();
    var periodeAkhir = $('.periode_akhir').val();
    var cacing = '~';
    $.get('<?php echo base_url('c_movin/view_movin/'); ?>' + periodeAwal + cacing + periodeAkhir, function(data) {
      MyTable.fnDestroy();
      $('#view_movin').html(data);
      refresh();

    });
  }

  function tampilIndihomeGamer() {
    var periodeAwal = $('.periode_awal').val();
    var periodeAkhir = $('.periode_akhir').val();
    var cacing = '~';
    $.get('<?php echo base_url('c_indihome_gamer/view_indihome_gamer/'); ?>' + periodeAwal + cacing + periodeAkhir, function(data) {
      MyTable.fnDestroy();
      $('#viewIndihomeGamer').html(data);
      refresh();

    });
  }

  function tampilIndihomeMusic() {
    var periodeAwal = $('.periode_awal').val();
    var periodeAkhir = $('.periode_akhir').val();
    var cacing = '~';
    $.get('<?php echo base_url('c_indihome_music/view_indihome_music/'); ?>' + periodeAwal + cacing + periodeAkhir, function(data) {
      MyTable.fnDestroy();
      $('#viewIndihomeMusic').html(data);
      refresh();

    });
  }

  function tampilVideoCall() {
    var periodeAwal = $('.periode_awal').val();
    var periodeAkhir = $('.periode_akhir').val();
    var cacing = '~';
    $.get('<?php echo base_url('c_video_call/view_video_call/'); ?>' + periodeAwal + cacing + periodeAkhir, function(data) {
      MyTable.fnDestroy();
      $('#viewVideoCall').html(data);
      refresh();

    });
  }

  function tampilIndiStorage() {
    var periodeAwal = $('.periode_awal').val();
    var periodeAkhir = $('.periode_akhir').val();
    var cacing = '~';
    $.get('<?php echo base_url('c_indi_storage/view_indi_storage/'); ?>' + periodeAwal + cacing + periodeAkhir, function(data) {
      MyTable.fnDestroy();
      $('#viewIndiStorage').html(data);
      refresh();

    });
  }

  function tampilPlc() {
    var periodeAwal = $('.periode_awal').val();
    var periodeAkhir = $('.periode_akhir').val();
    var cacing = '~';
    $.get('<?php echo base_url('c_plc/view_plc/'); ?>' + periodeAwal + cacing + periodeAkhir, function(data) {
      MyTable.fnDestroy();
      $('#viewPlc').html(data);
      refresh();

    });
  }

  function tampilWifiExtender() {
    var periodeAwal = $('.periode_awal').val();
    var periodeAkhir = $('.periode_akhir').val();
    var cacing = '~';
    $.get('<?php echo base_url('c_wifi_extender/view_wifi_extender/'); ?>' + periodeAwal + cacing + periodeAkhir, function(data) {
      MyTable.fnDestroy();
      $('#viewWifiExtender').html(data);
      refresh();

    });
  }

  function tampilIndihomeSmart() {
    var periodeAwal = $('.periode_awal').val();
    var periodeAkhir = $('.periode_akhir').val();
    var cacing = '~';
    $.get('<?php echo base_url('c_indihome_smart/view_indihome_smart/'); ?>' + periodeAwal + cacing + periodeAkhir, function(data) {
      MyTable.fnDestroy();
      $('#viewIndihomeSmart').html(data);
      refresh();

    });
  }

  function tampilIndihomeStudy() {
    var periodeAwal = $('.periode_awal').val();
    var periodeAkhir = $('.periode_akhir').val();
    var cacing = '~';
    $.get('<?php echo base_url('c_indihome_study/view_indihome_study/'); ?>' + periodeAwal + cacing + periodeAkhir, function(data) {
      MyTable.fnDestroy();
      $('#viewIndihomeStudy').html(data);
      refresh();

    });
  }

  function tampilWitel() {
    var tampilWitel = $('#idWitel').val();
    var tampilDatel = $('#idDatel').val();
    var cacing = '~';
    $.get('<?php echo base_url('c_indihome/view_list/'); ?>' + tampilWitel + cacing + tampilDatel, function(data) {
      MyTable.fnDestroy();
      $('#view_list').html(data);
      refresh();

    });
  }

  function tampilIndiServer() {
    var periodeAwal = $('.periode_awal').val();
    var periodeAkhir = $('.periode_akhir').val();
    var cacing = '~';
    $.get('<?php echo base_url('c_indi_server/view_indi_server/'); ?>' + periodeAwal + cacing + periodeAkhir, function(data) {
      MyTable.fnDestroy();
      $('#viewIndiServer').html(data);
      refresh();

    });
  }

  $("#showWitel").click(function() {
    tampilWitel();
  });
  $("#idOtt").click(function() {
    tampilOtt();
  });
  $("#idIndiStorage").click(function() {
    tampilIndiStorage();
  });
  $("#idMovin").click(function() {
    tampilMovin();
  });
  $("#idIndihomeGamer").click(function() {
    tampilIndihomeGamer();
  });
  $("#idIndihomeMusic").click(function() {
    tampilIndihomeMusic();
  });
  $("#idVideoCall").click(function() {
    tampilVideoCall();
  });
  $("#idIndiServer").click(function() {
    tampilIndiServer();
  });
  $("#idPlc").click(function() {
    tampilPlc();
  });
  $("#idWifiExtender").click(function() {
    tampilWifiExtender();
  });
  $("#idIndihomeSmart").click(function() {
    tampilIndihomeSmart();
  });
  $("#idIndihomeStudy").click(function() {
    tampilIndihomeStudy();
  });
</script>