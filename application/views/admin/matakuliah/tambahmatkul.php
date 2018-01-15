  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Tambah Matakuliah
      </h1>
    </section>
    <section class="content container-fluid">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Registrasi Matakuliah</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open('admin/storematkul',array('class'=>'form-horizontal','method'=>'post')); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_matkul" class="col-sm-3 control-label">ID Mata Kuliah</label>
                  <div class="col-sm-9">
                    <input type="type" class="form-control" name="id_matkul" placeholder="Nama Mata Kuliah" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama_matkul" class="col-sm-3 control-label">Nama Mata Kuliah</label>
                  <div class="col-sm-9">
                    <input type="type" class="form-control" name="nama_matkul" placeholder="Nama Mata Kuliah" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="hari" class="col-sm-3 control-label">Hari</label>
                  <div class="col-sm-9">
                    <input type="type" class="form-control" name="hari" placeholder="Hari" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="waktu" class="col-sm-3 control-label">Waktu</label>
                  <div class="col-sm-9">
                    <input type="type" class="form-control" name="waktu" placeholder="Waktu" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="ruangan" class="col-sm-3 control-label">Ruangan</label>
                  <div class="col-sm-9">
                    <input type="type" class="form-control" name="ruangan" placeholder="Ruangan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nik" class="col-sm-3 control-label">NIK</label>
                  <div class="col-sm-9">
                    <input type="type" class="form-control" name="nik" placeholder="NIK dosen" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nim" class="col-sm-3 control-label">NIM</label>
                  <div class="col-sm-9">
                    <input type="type" class="form-control" name="nim" placeholder="NIM Mahasiswa" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fakultas" class="col-sm-3 control-label">Fakultas</label>
                  <div class="col-sm-9">
                    <input type="type" class="form-control" name="fakultas" placeholder="Fakultas">
                  </div>
                </div>
                <div class="form-group">
                  <label for="prodi" class="col-sm-3 control-label">Prodi</label>
                  <div class="col-sm-9">
                    <input type="type" class="form-control" name="prodi" placeholder="Prodi Jurusan" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-3 control-label"></label>
                  <div class="col-sm-9">
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