<body class="sia-page" data-spy="scroll" data-target=".navbar2" data-offset="199">

<nav class="navbar navbar-default navbar2" data-spy="affix" data-offset="200">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <img src="<?= base_url('assets/img/icon/logo4.png') ?>" alt="" width='50%'/>
    
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li class="halaman"><a href="<?= base_url('dashboard/mahasiswa') ?>"><i class="fa fa-home"></i> HOME</a></li>
        <li class="halaman"><a href="<?= base_url('tagihan/')?>">TAGIHAN</a></li>
        <li class="halaman"><a href="<?= base_url('dashboard/faq') ?>">FAQ</a></li>
        <li class="halaman"><a href="<?= base_url('dashboard/aboutus') ?>">ABOUT US</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="halaman"><a href="<?= base_url('login/logout') ?>">SIGN OUT</a></li>

        
      </ul>
    </div>
  </div>
</nav>

<div class="container">

	
	<div class="row animasigeser">
		<div class="col-sm-12">
			
  <h4> <a href="<?= base_url('dashboard/mahasiswa') ?>" class='text-muted'><i class="fa fa-home"></i> Home</a> 
            <i class="text-muted fa fa-angle-right"> </i>
            <a href="" class='text-muted'>Tagihan Mahasiswa</a> </h4>
		
			
      <div class="box box-custom">
      	<div class="box-header with-border">
          <div class="row">

          </div>
      	</div><!-- /.box-header -->
      	
        <div class="box-body">
           <div class="row">
				     <div class="col-sm-12 col-detailabsen">
						 	
              <section class="invoice">
                <div class="row">
                    <div class="col-xs-12">
                      <?php if ($this->session->flashdata('info')): ?>
                        
                          <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check"></i> Info!</h4>
                            Berhasil Mengupload Bukti Pembayaran
                          </div>
                       
                      <?php endif ?>
                      <h5 class="text-blue">
                        TAGIHAN PERKULIAHAN
                        <small class="pull-right">21/10/2017</small>
                        <hr />
                      </h5>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- info row -->
                  <div class="row invoice-info">
                    <div class="col-sm-6 invoice-col">
                      <table class="table table-striped">
                        <tr>
                          <td>Nama</td>
                          <td><?php echo $this->session->userdata('nama') ?></td>
                        </tr>
                        <tr>
                          <td>Nim</td>
                          <td><?php echo $this->session->userdata('username')?></td>
                        </tr>
                        <tr>
                          <td>SKS</td>
                          <td>10</td>
                        </tr>
                      </table>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6 invoice-col">
                      <table class="table table-striped">
                        <tr>
                          <td>Tahun/Akad</td>
                          <td>2017/2018</td>
                        </tr>
                        <tr>
                          <td>Fakultas</td>
                          <td>Ilmu Komputer</td>
                        </tr>
                        <tr>
                          <td>Jurusan</td>
                          <td>Sistem Informasi</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <!-- /.row -->
                
                <div class="row">
                    <!-- accepted payments column -->
                    <div class="col-md-6">
                      <h5 class='text-blue'>KEWAJIBAN</h5>
                      <hr />
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <tr>
                            <th>Item Kewajiban:</th>
                            <th>Jumlah</th>
                          </tr>
                          <tr>
                            <td>Tunggakan/Kelebihan Semester Lalu</td>
                            <td>Rp0</td>
                          </tr>
                          <tr>
                            <td>BPP Pokok</td>
                            <td>Rp3.200.000</td>
                          </tr>
                          <tr>
                            <td>BPP SKS (17 SKS X Rp150.000)</td>
                            <td>Rp2.500.000</td>
                          </tr>
                          <tr>
                            <td>Uang Kemahasiswaan</td>
                            <td>Rp100.000</td>
                          </tr>
                          <tr>
                            <td>Uang Pratikum</td>
                            <td>Rp0</td>
                          </tr>
                          <tr>
                            <td>Uang Tugas Akhir/Sidang</td>
                            <td>Rp0</td>
                          </tr>
                          <tr>
                            <td>Uang Wisuda</td>
                            <td>Rp0</td>
                          </tr>
                          <tr>
                            <td>Uang Cuti</td>
                            <td>Rp0</td>
                          </tr>
                          <tr>
                            <td>Uang Nonaktif</td>
                            <td>Rp0</td>
                          </tr>
                          <tr>
                            <td>Uang Lain-lain</td>
                            <td>Rp0</td>
                          </tr>
                          <tr>
                            <th>Total Tagihan</th>
                            <th>Rp5.800.000</th>
                          </tr>
                          <tr>
                            <th><h4>Sisa Pembayaran</h4></th>
                            <th><h4>-Rp3.300.000</h4></th>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <h5 class='text-blue'>PEMBAYARAN</h5>
                      <hr align="left"  class="bg-yellow" />
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <tr>
                            <th>Tanggal</th>
                            <th>No Bank</th>
                            <th>Jumlah</th>
                          </tr>
                          <tr>
                            <td>4 Agustus</td>
                            <td>0788</td>
                            <td>Rp.1.500.000</td>
                          </tr>
                          <tr>
                            <td>20 September</td>
                            <td>0899</td>
                            <td>Rp.1.000.000</td>
                          </tr>
                          <tr>
                            <th>Jumlah Dibayar</th>
                            <th></th>
                            <th>Rp2.500.000</th>
                          </tr>
                         </table> 
                      </div>

                      <div class="row no-print">
                    <div class="col-xs-12">
                      <h5 class="text-blue">UPLOAD BUKTI PEMBAYARAN</h5>
                    </div>
                  </div>


                  
                  <!-- this row will not appear when printing -->
                  <div class="row no-print">
                    <div class="col-xs-12">
                      <?php echo form_open_multipart('upload/do_upload'); ?>
                      <div class="form-group">
                        <?php if ($error): ?>
                          <?=$error?>
                        <?php endif ?>
                        <input type="file" id="uploadbukti" name="uploadbukti">
                      <button type="submit" class="btn btn-primary pull-right" style="margin-right: 5px;">
                        <i class="fa fa-upload"></i> Upload
                      </button>
                      </div>
                      <?php echo form_close(); ?>
                      
                    </div>
                  </div>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->


                <!-- this row will not appear when printing -->
                  
              </section>
                
             </div>
				    </div><!-- /.col-sm-8 -->
          </div><!-- /.row -->
        </div>
      </div>
    </div><!-- /.col-sm-12 -->
	</div><!-- /.row -->
</div><!-- /.container -->
</body>
