
<body class="hold-transition login-page">
<div class="container-fluid">
  <div class="row">
    

    <div class="col-sm-5 col-kiri">
      <div class="row">
        <div class="col-sm-12 col-kiri2">
          <img src="<?= base_url('assets/img/icon/logowhite.png') ?>" class="img-responsive" width='40%'/>
          <h2 class="text-center">Selamat datang!</h2>
          <h5 class="text-center">SISTEM INFORMASI AKADEMIK UNIVERSITAS MERCU BUANA JAKARTA</h5><br />
          <p class="text-justify">Jika Anda mengalami permasalahan dengan sistem ini, silahkan emailkan ke sia@mercubuana.ac.id. Bagi mahasiswa diharap menyertakan NIM dan nama lengkap untuk dapat ditanggapi. Sebelum mengirimkan email, harap dipelajari FAQs terlebih dahulu.</p>
        </div><!-- /.col-sm-12 -->
      </div><!-- /.row -->
    </div><!-- /.col-sm-4 -->
    <div class="col-sm-7 col-kanan">
      <?php if (!isset($_GET['login'])): ?>
      <div class="row">
        <div class="col-sm-12 col-kanan2">
         <h3 class="text-center"> <b>LOGIN SEBAGAI:</b></h3>
         <hr /><br />
        </div>
        <div class="col-sm-4">
            <a href="<?= base_url("login?login=admin") ?>" type="submit" class="btn btn-outline-primary form-control">Admin</a>
        </div>
        <div class="col-sm-4">
           <a href="<?= base_url("login?login=dosen") ?>" type="submit" class="btn btn-outline-danger form-control">Dosen</a>
        </div>
        <div class="col-sm-4">
           <a href="<?= base_url("login?login=mahasiswa") ?>" type="submit" class="btn btn-outline-success form-control">Mahasiswa</a>
        </div>
        
        
      </div>
      <br />
      <div class="row">
        <div class="col-sm-12">
          <p class="text-center text-blue"><a href="<?= base_url() ?>">Kembali ke halaman utama</a></p>
        </div>
      </div><!-- /.row -->
      <?php else: ?>
      <div class="row">
        <div class="col-sm-12 col-kanan2">
         <h3 class="text-center text-uppercase"> <b>LOGIN <?= $_GET['login'] ?></b></h3>
         <hr /><br />
              
            <?php if ($_GET['login']=='admin'): ?>
              <form action="<?= base_url('login/validationloginadmin') ?>" method='post'>
            <?php elseif($_GET['login']=='dosen'): ?>
              <form action="<?= base_url('login/validationlogindosen') ?>" method='post'>
            <?php else: ?>
              <form action="<?= base_url('login/validationloginmhs') ?>" method='post'>
            <?php endif ?>
            <div class="form-group">
              <label for="email">NIM / NIK / USERNAME:</label>
              <input type="text" name='username'class="form-control input-custom" id="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" name='password'class="form-control input-custom" id="pwd">
            </div>
            <?php if ($this->session->flashdata('info')): ?>
            <div class="form-group">
              <label class="text-red">Username atau Password yang anda masukan salah</label>
            </div>
            <?php endif ?> 
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
            </div>
            <div class="form-group">
              <button type="submit" class="form-control btn btn-outline-primary" id="pwd">Login</button>
            </div>
          </form>


        </div><!-- /.col-sm-12 -->
      </div><!-- /.row -->
     <br />
      <div class="row">
        <div class="col-sm-6">
          <p class="text-center text-blue"><a href="<?= base_url('login') ?>">Kembali ke pilihan login</a></p>
        </div>
        <div class="col-sm-6">
          <p class="text-center text-blue"><a href="<?= base_url() ?>">Kembali ke halaman utama</a></p>
        </div>
      </div><!-- /.row -->

      <?php endif ?>
    </div><!-- /.col-sm-7 -->
    
  </div><!-- /.row -->
  
</div>

</body>
</html>
