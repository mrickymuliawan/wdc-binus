  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Tambah Dosen
      </h1>
    </section>
    <section class="content container-fluid">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Registrasi Dosen</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open('admin/createdosen',array('class'=>'form-horizontal','method'=>'post')); ?>
              <div class="box-body">
                <?php if (form_error('nik')): ?>
                  <div class="col-md-10 col-lg-offset-2 text-danger">
                    <p><?=form_error('nik')?></p>
                  </div>  
                <?php endif ?>
                <div class="form-group">
                  <label for="nik" class="col-sm-2 control-label">NIK</label>
                  <div class="col-sm-10">
                    <input type="type" class="form-control" name="nik" placeholder="NIK harus 4 Karakter" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="type" class="form-control" name="nama" placeholder="nama" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fakultas" class="col-sm-2 control-label">Fakultas</label>
                  <div class="col-sm-10">
                    <input type="type" class="form-control" name="fakultas" placeholder="Fakultas">
                  </div>
                </div>
                <div class="form-group">
                  <label for="prodi" class="col-sm-2 control-label">Prodi</label>
                  <div class="col-sm-10">
                    <input type="type" class="form-control" name="prodi" placeholder="Prodi Jurusan" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label"></label>
                  <div class="col-sm-10">
                      <input type="submit" class="btn btn-primary" value="Daftar">
                      <input type="reset" class="btn btn-danger" value="Reset">
                  </div>
                </div>
              </div>
            <?php echo form_close(); ?>
          </div>
         </div>
        </div>
    </section>
  </div>
  <!-- /.content-wrapper -->