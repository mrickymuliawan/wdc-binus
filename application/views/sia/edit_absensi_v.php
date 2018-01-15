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
        <li class="halaman"><a href="<?= base_url('dashboard/dosen') ?>"><i class="fa fa-home"></i> HOME</a></li>
        <li class="halaman"><a href="<?= base_url('dashboard/faq') ?>"> FAQ</a></li>
        <li class="halaman"><a href="<?= base_url('dashboard/aboutus') ?>">ABOUT US</a></li>

        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="halaman"><a href="<?= base_url('login/logout') ?>">SIGN OUT</a></li>

        
      </ul>
    </div>
  </div>
</nav>

<div class="container">

	
	<div class="row">
    
		<div class="col-sm-12">
			
        <h4> <a href="<?= base_url('dashboard/dosen') ?>" class='text-muted'><i class="fa fa-home"></i> Home</a> 
            <i class="text-muted fa fa-angle-right"> </i>
            <a href="" class='text-muted'>Absensi Mahasiswa</a> </h4>
           
      </table>
			<div class="box box-primary">
        
        <div class="box-header with-border">
        	<div class="row">
						<div class="col-sm-9 col-persentase">

               <table class="table">
                 <tr>
                    <td><p class="text-black text-uppercase">Mata kuliah</p></td>
                    <td><p class="text-blue text-uppercase"> 
                      000<?= $matkul['id_matakuliah'] ?> - <?= $matkul['nama_matakuliah'] ?></p>
                    </td>
                  </tr>
                  <tr>
                    <td><p class="text-black text-uppercase">Fakultas / prodi</p></td>
                    <td><p class="text-blue text-uppercase"> <?= $matkul['fakultas'] ?> / <?= $matkul['prodi'] ?></p></td>
                  </tr>
               </table>
               <hr align="left" />
               <table class="table">
                 <tr>
                   <th> <p class="text-blue text-uppercase">PERTEMUAN KE: <?= $pertemuan ?></p></th>
                 </tr>
               </table>
              
              </div><!-- /.col-sm-6 -->
              <div class="col-sm-3 col-persentase">
                <table class="table">
                  <tr>
                    <td><p class="text-black text-uppercase">Waktu</p></td>
                    <td><p class="text-muted text-uppercase"> <?= $matkul['hari'].", ".$matkul['waktu'] ?></p></td>
                  </tr>
                  <tr>
                    <td><p class="text-black text-uppercase">Ruangan</p></td>
                    <td><p class="text-muted text-uppercase"> <?= $matkul['ruangan'] ?></p></td>
                  </tr>
                </table>
              
                <hr class="bg-yellow" />
              </div><!-- /.col-sm-6 -->

            <?php echo form_open(base_url('absensi/update_absensi'),array('method'=>'post')); ?>
            <input type="hidden" name="idmatkul" value="<?=$idmatkul?>" />
            <input type="hidden" name="tanggal" value="<?=date('Y/m/d')?>" />

            <?php if ($pertemuan == 8 or $pertemuan == 16): ?>
              <input type="hidden" name="jenispertemuan" value="<?='U'?>" />
            <?php else: ?>
              <input type="hidden" name="jenispertemuan" value="<?='K'?>" />
            <?php endif ?>
            <input type="hidden" name="infokelas" 
            value="<?= "$matkul[nama_matakuliah] ( $matkul[waktu] $matkul[ruangan] )" ?>" />
            <input type="hidden" name="pertemuan" value="<?=$pertemuan?>" />
					  <div class="col-sm-12 table-responsive">
              <table class="table table-hover text-center table-absensi">
                <tr>
                  <th>NO</th>
                  <th>NIM</th>
                  <th>Nama Mahasiswa</th>
                  <th>Kehadiran</th>
                  <th>Keaktifan</th>
                  <th>Ketepatan Waktu</th>
                </tr>
                <?php $no=1; ?>
                <?php foreach ($mahasiswa as $value): ?>
                  <tr>


                    <td><b><?=$no;?></b></td>
                    <td>
                      <?=$value['nim'];?>
                      <input type="hidden" value="<?=$value['nim']?>" name="nim<?=$no?>">
                    </td>
                    <td class="text-capitalize">
                      <?=$value['nama'];?>
                    </td>
                    <?php 
                    $where=array('id_matakuliah'=>$idmatkul,'pertemuan'=>$pertemuan,'nim'=>$value['nim']);
                    $result = $this->db->get_where('tb_absensi',$where)->row_array(); 
                    $kehadiran = $result['kehadiran'];
                    $keaktifan = $result['keaktifan'];
                    $ketepatan = $result['ketepatan'];
                    ?>

                    <?php if ($kehadiran == 0): ?> 
                      <td class="td-statusoff td-clickable">
                        <input type="hidden" name="kehadiran<?=$no?>" value="0"><i class="fa fa-check"></i>
                      </td>
                    <?php else: ?>
                      <td class="td-statuson td-clickable">
                        <input type="hidden" name="kehadiran<?=$no?>" value="1"><i class="fa fa-check"></i>
                      </td>
                    <?php endif ?>

                    <?php if ($keaktifan == 0): ?> 
                      <td class="td-statusoff td-clickable">
                        <input type="hidden" name="keaktifan<?=$no?>" value="0"><i class="fa fa-check"></i>
                      </td>
                    <?php else: ?>
                      <td class="td-statuson td-clickable">
                        <input type="hidden" name="keaktifan<?=$no?>" value="1"><i class="fa fa-check"></i>
                      </td>
                    <?php endif ?>

                    <?php if ($ketepatan == 0): ?> 
                      <td class="td-statusoff td-clickable">
                        <input type="hidden" name="ketepatan<?=$no?>" value="0"><i class="fa fa-check"></i>
                      </td>
                    <?php else: ?>
                      <td class="td-statuson td-clickable">
                        <input type="hidden" name="ketepatan<?=$no?>" value="1"><i class="fa fa-check"></i>
                      </td>
                    <?php endif ?>


                    <?php $no++ ?>
                    <input type="hidden" name="row" value="<?= $no ?>">
                  </tr>
                <?php endforeach ?>
              </table>
              <div class="col-sm-12">
                <button class="btn btn-outline-primary pull-right btn-lg">Save</button>
              </div><!-- /.col-sm-12 -->
              
            </div><!-- /.col-sm-12 -->
          <?php echo form_close(); ?>
					</div>

        </div>
        <!-- /.box-header -->

        <!-- /.box-body -->
        
        <!-- /.box-footer -->
      </div>
			
			
    
		</div><!-- /.col-sm-12 -->
	
	</div><!-- /.row -->
</div><!-- /.container -->
</body>
<script>
  $(function() {
    $('.td-clickable').on('click',function(){
      var value = $(this).find('input[type=hidden]').val()
      if (value == 0){
        $(this).removeClass('td-statusoff')
        $(this).addClass('td-statuson')
        $(this).find('input[type=hidden]').val(1)
      }else{
        $(this).removeClass('td-statuson')
        $(this).addClass('td-statusoff')
        $(this).find('input[type=hidden]').val(0)
      }

      
    });

  });
</script>