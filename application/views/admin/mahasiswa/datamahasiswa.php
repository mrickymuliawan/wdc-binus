  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <section class="content container-fluid">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Mahasiswa</h3>
            </div>
            <div class="box-body">
              <table id="mahasiswa" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nim</th>
                  <th>Nama</th>
                  <th>Fakultas</th>
                  <th>Prodi</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($mahasiswa as $vmahasiswa): ?>
                    <tr>
                      <td><?=$vmahasiswa['nim'];?></td>
                      <td><?=$vmahasiswa['nama'];?></td>
                      <td><?=$vmahasiswa['fakultas'];?></td>
                      <td><?=$vmahasiswa['prodi'];?></td>
                      <td class="col-md-2">
                        <a href="<?php echo site_url("admin/hapusmhs/$vmahasiswa[nim]") ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> <span>Delete</span></a>
                        <a href="<?php echo site_url("admin/updatemhs/$vmahasiswa[nim]") ?>" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i><span>Edit</span></a>
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