  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Welcome Dashboard 
      </h1>
    </section>
    <section class="content container-fluid">
      <div class="row">
          <div class="col-md-6 ">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $mahasiswa ?></h3>

                <p>Mahasiswa</p>
              </div>
              <div class="icon">
                <i class="ion-android-person"></i>
              </div>
              <a href="<?=site_url('/admin/datamhs')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-md-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo $dosen?> </h3>

                <p>Dosen</p>
              </div>
              <div class="icon">
                <i class="ion-android-person"></i>
              </div>
              <a href="<?=site_url('/admin/datadosen')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->