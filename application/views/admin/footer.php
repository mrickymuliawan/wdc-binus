  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#">Tim Sukses</a>.</strong>
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?=base_url('assets/plugins/jquery/jquery-2.2.3.min.js')?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/dist/js/adminlte.min.js')?>"></script>

<script src="<?=base_url('assets/plugins/datatables/js/datatables.min.js')?>"></script>

<script src="<?=base_url('assets/plugins/datatables/js/datatables.bootstrap.min.js')?>"></script>

<script>
  $(function () {
    $('#mahasiswa').DataTable()
    $('#dosen').DataTable()
  })
</script>

</body>
</html>