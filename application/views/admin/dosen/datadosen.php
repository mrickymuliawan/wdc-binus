  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <section class="content container-fluid">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Dosen</h3>
            </div>
            <div class="box-body">
              <table id="dosen" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Fakultas</th>
                  <th>Prodi</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($dosen as $vdosen): ?>
                    <tr>
                      <td><?=$vdosen['nik'];?></td>
                      <td><?=$vdosen['nama'];?></td>
                      <td><?=$vdosen['fakultas']?></td>
                      <td><?=$vdosen['prodi']?></td>
                      <td class="col-md-2">
                        <a href="<?php echo site_url("admin/hapusdosen/$vdosen[nik]") ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> <span>Delete</span></a>
                        <a href="<?php echo site_url("admin/updatedosen/$vdosen[nik]") ?>" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i><span>Edit</span></a>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
    </section>
  </div>
  <!-- /.content-wrapper -->