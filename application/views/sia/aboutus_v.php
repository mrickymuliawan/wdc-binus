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
  <a href="" class='text-muted'>About Us</a> </h4>	<div class="box box-primary">
    
    <div class="box-header with-border">
    	<div class="row">
      
				
			</div>
      
    </div>  
    <div class="box-body">
      <div class="row">
        <div class="col-sm-12">
          <div class="box box-solid">
            <div class="box-header with-border  text-center">
              <h5 class="box-title text-uppercase text-black">ABOUT US</h5>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="row text-center">
              <div class="col-sm-6">
                <img src="<?= base_url('assets/img/folder/fotoricky.jpg')?>" alt="" class='img-responsive'/><br />
                <h5 class="text-blue">Mochamad Ricky Muliawan</h5>
                <p class="text-justify">Halo perkenalkan nama aku Ricky, Biasa di panggil Ricky. Status aku sekarang berkuliah di Universitas Mercu Buana Jakarta program studi Sistem Informasi dan sekarang berusia 21 tahun. aku mempunyai ketertarikan di bidang musik. Cita-cita saya ingin jadi Gubernur. doakan saja ya:)</p>
                <h5 class="text-muted text-uppercase">You can find me here</h5>
                <h5><a href="https://www.instagram.com/rickyhehe/?hl=en"><i class="fa fa-instagram"></i> Instagram</a> &nbsp 
                 <a href="https://www.facebook.com/muhammad.r.muliawan.5"><i class="fa fa-facebook"></i> Facebook</a></h5>
              </div><!-- /.col-sm-6 -->
              <div class="col-sm-6">
                <img src="<?= base_url('assets/img/folder/fotoraka.jpg')?>" alt="" class='img-responsive'/><br />
                <h5 class="text-blue">Raka Hikmah Ramadhan</h5>
                <p class="text-justify">
                Halo nama saya raka hikmah ramadhan atau biasa dipanggil raka aja, aku semester 7 dan saya menyukai dunia website programing sejak semester 1 sejak saya mengenal website programing saya makin tertarik terhadap dunia website programing dan ingin lebih memperdalam lagi dan impian saya adalah menjadi software engginer dan membuat aplikasi untuk kebutuhan user</p>

                <h5 class="text-muted text-uppercase">You can find me here</h5>
                <h5><a href="https://github.com/rakahikmah"><i class="fa fa-github"></i> github</a> &nbsp 
                 <a href="https://www.facebook.com/raka.hikmah"><i class="fa fa-facebook"></i> Facebook</a></h5>
              </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->
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
