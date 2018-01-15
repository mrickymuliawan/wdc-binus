  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Edit Mahasiswa
      </h1>
    </section>
    <section class="content container-fluid">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open('admin/updatemhs/'.$mahasiswa['nim'],array('class'=>'form-horizontal','method'=>'post')); ?>
              <input type="hidden" name="nim" value="<?=$mahasiswa['nim']?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="nim" class="col-sm-2 control-label">NIM</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nimk" placeholder="nim" value="<?=$mahasiswa['nim']?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" placeholder="nama" value="<?=$mahasiswa['nama']?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="fakultas" class="col-sm-2 control-label">Fakultas</label>
                  <div class="col-sm-10">
                    <input type="type" class="form-control" name="fakultas" placeholder="Fakultas" value="<?=$mahasiswa['fakultas']?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="prodi" class="col-sm-2 control-label">Prodi</label>
                  <div class="col-sm-10">
                    <input type="type" class="form-control" name="prodi" placeholder="Prodi Jurusan" value="<?=$mahasiswa['prodi']?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label"></label>
                  <div class="col-sm-10">
                      <input type="submit" class="btn btn-primary" value="Edit">
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