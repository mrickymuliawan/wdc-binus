  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Edit Dosen
      </h1>
    </section>
    <section class="content container-fluid">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Dosen</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open('admin/updatedosen/'.$dosen['nik'],array('class'=>'form-horizontal','method'=>'post')); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="nik" class="col-sm-2 control-label">NIK</label>

                  <div class="col-sm-10">
                    <input type="type" class="form-control" name="nik" placeholder="nik" value="<?=$dosen['nik']?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="type" class="form-control" name="nama" placeholder="nama" value="<?=$dosen['nama']?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fakultas" class="col-sm-2 control-label">Fakultas</label>
                  <div class="col-sm-10">
                    <input type="type" class="form-control" name="fakultas" placeholder="Fakultas" value="<?=$dosen['fakultas']?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="prodi" class="col-sm-2 control-label">Prodi</label>
                  <div class="col-sm-10">
                    <input type="type" class="form-control" name="prodi" placeholder="Prodi Jurusan" value="<?=$dosen['prodi']?>" required>
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