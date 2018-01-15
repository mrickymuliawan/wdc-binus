  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Tambah Mahasiswa
      </h1>
    </section>
    <section class="content container-fluid">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Registrasi Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open('admin/createmhs',array('class'=>'form-horizontal','method'=>'post')); ?>
              <div class="box-body">
                <?php if (form_error('nim')): ?>
                  <div class="col-md-10 col-lg-offset-2 text-danger">
                    <p><?=form_error('nim')?></p>
                  </div>  
                <?php endif ?>
                <div class="form-group">
                  <label for="nim" class="col-sm-2 control-label">NIM</label>
                  <div class="col-sm-10">
                    <input type="type" class="form-control" name="nim" placeholder="NIM harus 4 karakter">
                  </div>
                </div>
                <?php if (form_error('nama')): ?>
                  <div class="col-md-10 col-lg-offset-2 text-danger">
                    <p><?=form_error('nama')?></p>
                  </div>  
                <?php endif ?>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="type" class="form-control" name="nama" placeholder="Nama" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fakultas" class="col-sm-2 control-label">Fakultas</label>
                  <div class="col-sm-10">
                    <input type="type" class="form-control" name="fakultas" placeholder="Fakultas" required>
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