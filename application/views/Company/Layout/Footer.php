 <footer class="main-footer">
  <!-- <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div> -->
  <strong>Copyright &copy; 2018 <a href="<?php echo base_url('trainer');?>">GTC E-Learning</a>.</strong> All rights
  reserved.
 </footer>

 <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/adm/bower_components/jquery/dist/jquery.min.js"></script>

<script src="<?php echo base_url()?>assets/adm/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/adm/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url()?>assets/adm/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url()?>assets/adm/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>assets/adm/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()?>assets/adm/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()?>assets/adm/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>assets/adm/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()?>assets/adm/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/adm/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->

<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()?>assets/adm/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()?>assets/adm/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/adm/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/adm/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>assets/adm/dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url()?>assets/adm/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url()?>assets/adm/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/adm/dist/js/demo.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
<script type="text/javascript">
  $('.form_date').datetimepicker({
    language:  'id',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
  });
</script>
<script>
  var checkboxes = $(".cekbox"), submitButt = $(".tombol");
  checkboxes.click(function() {
    submitButt.attr("disabled", !checkboxes.is(":checked"));
});
</script>

<script>
  $(function () {
    $('#example2').DataTable({
      "lengthMenu": [[5], [5]],
      'lengthChange':false,
      'ordering'    : false
    })
  })
</script>
<script>
  $(function () {
    $('#example3').DataTable({
      "lengthMenu": [[5], [5]],
      'lengthChange':false,
      'ordering'    : false
    })
  })
</script>
</body>
</html>
