<div class="container-fluid footer">
	<div class="row">
		<div class="col-sm-3">
			<img src="<?= base_url('assets/img/icon/logowhite.png') ?>" alt="" width='80%'/>
		</div><!-- /.col-sm-3 -->
		<div class="col-sm-9">
			<div class="row">
			<h3>KAMPUS UMB</h3>
				<div class="col-sm-4 ">
					<h4><span class="fa fa-map-marker"></span> Kampus Meruya</h4>
					Jl. Meruya Selatan, Kebon Jeruk, Jakarta Barat <br />
					Telp : 021 5840 816 ( Hunting), ext: 2751 <br />
					Fax : 021 5840 015
				</div>
				<div class="col-sm-4 ">
					<h4><span class="fa fa-map-marker"> Kampus Menteng</h4>
					Jl. Menteng Raya No.29, Jakarta Pusat <br />
					Telp : 021 3193 5454 <br />
					Fax : 021 3193 4474
				</div>
				<div class="col-sm-4 ">
					<h4><span class="fa fa-map-marker"> Kampus Menteng</h4>
					Jl. Keranggan No.6, Jatisampurna Bekasi <br />
					Telp : 021 8449 635
				</div>
			</div><!-- /.row -->

			<div class="row">
			<h3>FAKULTAS</h3>
				<div class="col-sm-4 ">
					<h4>STRATA 1</h4>
					<p><span class="glyphicon glyphicon-chevron-right"></span> <a href="">Fakultas Ilmu Komputer</a></p>
					<p><span class="glyphicon glyphicon-chevron-right"></span> <a href="">Fakultas Komunikasi</a></p>
					<p><span class="glyphicon glyphicon-chevron-right"></span> <a href="">Fakultas Teknik</a></p>
					<p><span class="glyphicon glyphicon-chevron-right"></span> <a href="">Fakultas Ekonomi dan Bisnis</a></p>
					<p><span class="glyphicon glyphicon-chevron-right"></span> <a href="">Fakultas Psikologi</a></p>
					<p><span class="glyphicon glyphicon-chevron-right"></span> <a href="">Fakultas Desain dan Seni Kreatif</a></p>
				</div>
				<div class="col-sm-4 ">
					<h4>STRATA 2</h4>
					<p><span class="glyphicon glyphicon-chevron-right"></span> <a href="">Magister Teknik Industri</a></p>
					<p><span class="glyphicon glyphicon-chevron-right"></span> <a href="">Magister Teknik Elektro</a></p>
					<p><span class="glyphicon glyphicon-chevron-right"></span> <a href="">Magister Ilmu Komunikasi</a></p>
					<p><span class="glyphicon glyphicon-chevron-right"></span> <a href="">Magister Akutansi</a></p>
					<p><span class="glyphicon glyphicon-chevron-right"></span> <a href="">Magister Manajemen</a></p>
				</div>
				<div class="col-sm-3">
				<h4>SARAN ANDA</h4>
					<form action="">
					<div class="row">
				        <div class="col-sm-6 form-group">
				          <input class="form-control" name="namekontak" placeholder="Nama" type="text" >
				        </div>
				        <div class="col-sm-6 form-group">
				          <input class="form-control" name="emailkontak" placeholder="Email" >
				        </div>
				    </div>
				    <textarea class="form-control" name="komenkontak" placeholder="Saran Anda" rows="5"></textarea><br>
				    <div class="row">
				    	<div class="col-sm-12 form-group">
				    		<button class="btn btn-default pull-right" type="submit">Kirim</button>
				        </div>
				    </div>
				    </form>
				</div>
			</div><!-- /.row -->
		</div><!-- /.col-sm-9 -->

	</div>
	<br />
	<p>Copyright 2017 Universitas Mercu Buana. All rights reserved.</p>
	<div class="row">
	<div class="col-sm-12 text-center">
		<a href="#top" class="" title="To Top"><span class="fa fa-chevron-up"></span></a> <br />
		To Top
	</div>
</div>

</div>

	
</body>
</html>
<script>

	$(".navbar2 a, a[href='#top']").on('click', function(event) {

  if (this.hash !== "") {

    event.preventDefault();

    var hash = this.hash;

    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
      window.location.hash = hash;
      });
    } 
  });
	$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>