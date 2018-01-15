  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <section class="content container-fluid">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Matakuliah</h3>
            </div>
            <div class="box-body">
              <div class="table-responsive">
              <table id="mahasiswa" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Matakuliah</th>
                  <th>Hari</th>
                  <th>Waktu</th>
                  <th>Ruangan</th>
                  <th>Fakultas</th>
                  <th>Prodi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($datamatkul as $value): ?>
                    <tr>
                      <td><?=$value['nama_matakuliah']?></td>
                      <td><?=$value['hari']?></td>
                      <td><?=$value['waktu']?></td>
                      <td><?=$value['ruangan']?></td>
                      <td><?=$value['fakultas']?></td>
                      <td><?=$value['prodi']?></td>
                  </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
            </div>
          </div>
    </section>
  </div>
  <!-- /.content-wrapper -->