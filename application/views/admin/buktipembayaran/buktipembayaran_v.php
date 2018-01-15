  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <section class="content container-fluid">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bukti Pembayaran Mahasiswa</h3>
            </div>
            <div class="box-body">
              <div class="table table-responsive">
              <table id="mahasiswa" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nim</th>
                  <th>Nama</th>
                  <th>Bukti</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($buktipembarayan as $value): ?>
                    <tr>
                      <td><?=$value['nim']?></td>
                      <td><?=$value['nama']?></td>
                      <td><img src="<?=base_url("assets/img/uploadbukti/$value[picture]")?>" height="100px" width="100px" alt=""></td>
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