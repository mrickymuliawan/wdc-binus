<div class="container-fluid footer2">
		<div class="row">
			<div class="col-sm-3">
				<img src="<?= base_url('assets/img/icon/logowhite.png') ?>" class="img-responsive center-block" width='40%'/>
			</div>
			<div class="col-sm-3">
				<img src="<?= base_url('assets/img/icon/timsukses.png')?>" class="img-responsive center-block" width="40%">
			</div>
			<div class="col-sm-3">
				<img src="<?= base_url('assets/img/icon/logowdc.png')?>" class="img-responsive center-block" width="40%">
			</div>
			<div class="col-sm-3">
				<img src="<?= base_url('assets/img/icon/logohimsisfo.png')?>" class="img-responsive center-block" width="40%">
			</div>

	</div>
	<br />
	<p class="text-center">Copyright 2017 Universitas Mercu Buana. All rights reserved.</p>

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