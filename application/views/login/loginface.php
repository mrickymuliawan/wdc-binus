
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
      <div class="row">
        <div class="col-sm-12 col-kanan2"  align="center">
         <h3 class="text-center"> <b>FACE DETECTION</b></h3>
         <hr /><br />
          <video id="video" width="400" autoplay></video>
          
            <h4 class="text-center">Posisikan wajah anda tepat ditengah kamera</h4>
            <br />
            <p class=" text-center"><i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw text-primary"></i></p>
            <p class="text-center">Scanning...</p>
         
        </div><!-- /.col-sm-12 -->
      </div><!-- /.row -->
    </div><!-- /.col-sm-8 -->

  </div><!-- /.row -->

</div>

</body>
<script>
  // alert('a')
  var video = document.getElementById('video');

  // Get access to the camera!
  if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
      // Not adding `{ audio: true }` since we only want video now
      navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
          video.src = window.URL.createObjectURL(stream);
          video.play();
      });
  }
  <?php if ($this->session->userdata('role')=='admin'): ?>
    setTimeout(function(){ 
        window.location="<?= base_url('admin') ?>"
      }, 6000);  
  <?php elseif ($this->session->userdata('role')=='dosen'): ?>
    setTimeout(function(){ 
        window.location="<?= base_url('dashboard/dosen') ?>"
      }, 6000);
  <?php else: ?>
    setTimeout(function(){ 
        window.location="<?= base_url('dashboard/mahasiswa') ?>"
      }, 6000);
  <?php endif ?>
  

</script>
</html>
