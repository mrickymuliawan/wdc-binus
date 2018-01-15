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
        <?php 
        if ($this->session->userdata('role') == 'dosen') {
          $role='dosen';
        }
        else{
          $role='mahasiswa';
        } 
        ?>
        <li class="halaman"><a href="<?= base_url("dashboard/$role") ?>"><i class="fa fa-home"></i> HOME</a></li>
        <?php if ($this->session->userdata('role') == 'mahasiswa'): ?>
          <li class="halaman"><a href="<?= base_url('tagihan/')?>">TAGIHAN</a></li>
        <?php endif ?>
        <li class="halaman"><a href="<?= base_url('dashboard/faq') ?>">FAQ</a></li>
        <li class="halaman"><a href="<?= base_url('dashboard/aboutus') ?>">ABOUT US</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="halaman"><a href="<?= base_url('login/logout') ?>">SIGN OUT</a></li>

        
      </ul>
    </div>
  </div>
</nav>

<div class="container animasigeser">

    
	<h4> <a href="<?= base_url("dashboard/$role") ?>" class='text-muted'><i class="fa fa-home"></i> Home</a> 
  <i class="text-muted fa fa-angle-right"> </i>
  <a href="" class='text-muted'>FAQ</a> </h4>	<div class="box box-primary">
    
    <div class="box-header with-border">
    	<div class="row">
      
				
			</div>
      
    </div>  
    <div class="box-body">
      <div class="row">
        <div class="col-sm-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h5 class="box-title text-uppercase text-black">Frequently asked questions  (FAQ)</h5>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#col1" class="" aria-expanded="false" class="collapsed">
                        Website apakah ini?
                      </a>
                    </h4>
                  </div>
                  <div id="col1" class="panel-collapse collapse in" aria-expanded="false" style="">
                    <div class="box-body">
                      <p class="text-justify">Website ini adalah website profil Universitas Mercu Buana yang di integrasikan dengan Sistem Informasi Akademik (SIA) yang diperuntukan untuk memperlancar keperluan proses akademik Universitas Mercu Buana seperti absensi mahasiswa, pembayaran uang kuliah dan informasi kehadiran </p> 
                    </div>
                  </div>
                </div>
                
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#col3" class="collapsed" aria-expanded="false">
                        Apa saja fitur yang dimiliki website ini?
                      </a>
                    </h4>
                  </div>
                  <div id="col3" class="panel-collapse collapse" aria-expanded="false"">
                    <div class="box-body">
                      <p class="text-justify">Fitur dalam website yaitu tedapat untuk absensi mahasiswa yang di absen oleh dosen serta fitu financial summary untuk masalah keuangan tagihan mahasiswa yang harus dibayar
                      Fitur utama website ini yaitu absensi mahasiswa oleh dosen dan mahasiswa dapat melihat total kehadiran serta melihat persentase kahadiran. Selain absensi, fitur lainnya yaitu melihat tagihan mahasiswa dan mengupload bukti pembayaran</p>
                    </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#col4" class="collapsed" aria-expanded="false">
                        Siapa saja yang dapat mengakses website ini?
                      </a>
                    </h4>
                  </div>
                  <div id="col4" class="panel-collapse collapse" aria-expanded="false"">
                    <div class="box-body">
                      <p class="text-justify">Website ini dapat digunakan untuk semua orang yang tidak mempunyai akun SIA, namun hanya dapat mengakses halaman depan (profil universitas). Untuk Dosen dan Mahasiswa yang mempunyai akun dapat login dan menggunakan aplikasi SIA. Untuk admin dapat mengakses aplikasi administrasi yang dapat membuat data dosen, mahasiswa dan mata kuliah</p>
                    </div>
                  </div>
                </div>
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#col2" aria-expanded="true" class="collapsed">
                        Bagaimana saya mendapatkan akun untuk SIA?
                      </a>
                    </h4>
                  </div>
                  <div id="col2" class="panel-collapse collapse" aria-expanded="true" style="height: 0px;">
                    <div class="box-body">
                      <p>Akun hanya dapat didaftarkan oleh admin, silahkan hubungi admin jika ingin membuat akun</p>
                    </div>
                  </div>
                </div>
                  <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#col5" aria-expanded="true" class="collapsed">
                        Bagaimana cara dosen mengabsen siswa ?
                      </a>
                    </h4>
                  </div>
                  <div id="col5" class="panel-collapse collapse" aria-expanded="true" style="height: 0px;">
                    <div class="box-body">
                      <p>Dosen perlu login terlebih dahulu, setelah itu memilih mata kuliah yang ingin diubah absensinya, lalu dapat menceklis kehadiran, keaktifan dan ketepatan waktu mahasiswa dan klik tombol  save </p>
                    </div>
                  </div>
                </div>
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#col6" aria-expanded="true" class="collapsed">
                        Berapa batas ketidakhadiran mahasiswa?
                      </a>
                    </h4>
                  </div>
                  <div id="col6" class="panel-collapse collapse" aria-expanded="true" style="height: 0px;">
                    <div class="box-body">
                      <p>Batas maksimal ketidak hadiran mahasiwan adalah 4,jika lebih dari 4 maka mahasiswa akan mendapatkan nilai E</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div><!-- /.row -->
    </div><!-- /.box-body -->
  </div>
			
	
</div><!-- /.container -->
</body>
