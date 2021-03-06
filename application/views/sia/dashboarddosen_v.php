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
    <?php if ($this->session->flashdata('info')): ?>
      <div class="col-sm-12">
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Info!</h4>
          Berhasil menyimpan absensi <i class="text-uppercase"><?= $this->session->flashdata('info') ?></i>
        </div>
      </div>
    <?php endif ?>
		<div class="col-sm-12">
			<h4> <a href="<?= base_url('dashboard/dosen') ?>" class='text-muted'><i class="fa fa-home"></i> Home</a> 
            </h4>
			<div class="box box-primary">
        
        <div class="box-header with-border">
        	<div class="row">
        
						<div class="col-sm-8">
						 	<h3>Selamat datang, <?php echo $this->session->userdata('nama'); ?>!</h3>
						 	<hr align="left" />
							<p class="text-uppercase"> <b>Dosen <?php echo $this->session->userdata('fakultas'); ?></b></p>
						
							<p class="text-danger">Himbauan : Ganti password anda secara berkala, dan pastikan bukan hal yang mudah ditebak (seperti : nim, tanggal lahir dst).</p>
						</div>

						<div class="col-sm-4">
							<h3><?= date("l, d M Y") ?></h3>
								<hr align="left" class="bg-yellow"/>
							<p>Kalender:<a href=""> Reguler</a> | <a href="">Karyawan </a></p>
						</div></p>
						<div class="col-sm-12">
							<div class="callout callout-warning">
                <p>PERHATIAN : Anda diwajibkan mengisi kuisioner realisasi perkuliahan pada daftar matakuliah (tab kuliah), pengisian kuisioner berpengaruh pada pengumuman nilai.</p>
              </div>
						</div><!-- /.col-sm-12 -->
					</div>
        
        </div>
        <!-- /.box-header -->

        <!-- /.box-body -->
        
        <!-- /.box-footer -->
      </div>
			
			<h3 class="">Jadwal Kelas</h3>

      <?php 
      $no=1;
      foreach ($matakuliah as $key => $value): ?>
        <div class="box box-custom">
          <div class="box-header with-border">
            <div class="row">
              <div class="col-sm-9">

               <table class="table">
                 <tr>
                    <td><p class="text-black text-uppercase">Mata kuliah</p></td>
                    <td><p class="text-blue text-uppercase"> 
                      000<?= $value['id_matakuliah'] ?> - <?= $value['nama_matakuliah'] ?></p>
                    </td>
                  </tr>
                  <tr>
                    <td><p class="text-black text-uppercase">Fakultas / prodi</p></td>
                    <td><p class="text-blue text-uppercase"> <?= $value['fakultas'] ?> / <?= $value['prodi'] ?></p></td>
                  </tr>
               </table>
               <hr align="left" />
              
              
              </div><!-- /.col-sm-6 -->
              <div class="col-sm-3">
                <table class="table">
                  <tr>
                    <td><p class="text-black text-uppercase">Waktu</p></td>
                    <td><p class="text-muted text-uppercase"> <?= $value['hari'].", ".$value['waktu'] ?></p></td>
                  </tr>
                  <tr>
                    <td><p class="text-black text-uppercase">Ruangan</p></td>
                    <td><p class="text-muted text-uppercase"> <?= $value['ruangan'] ?></p></td>
                  </tr>
                </table>
              
                <hr class="bg-yellow" />
              </div><!-- /.col-sm-6 -->
            </div>
            
          
          </div><!-- /.box-header -->
          <div class="box-body">

            <div class="row">
              
              <div class="col-sm-12 col-detailabsen">
                <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1<?=$no?>" data-toggle="tab">Absensi</a></li>
                    <li><a href="#tab_2<?=$no?>" data-toggle="tab">Perkuliahan</a></li>
                    <li><a href="#tab_3<?=$no?>" data-toggle="tab">Nilai</a></li>
                  
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_1<?=$no?>">
                    <div class="row">
                      <div class="col-sm-12 table-responsive table-bordered text-center">
                        
                        <table class="table table-striped">
                          <tr class="tr-biru">
                            <th>Pertemuan</th>
                            <?php for ($i=1; $i < 17; $i++) { 
                              echo "<td><b>$i</b></td>";
                            } ?>
                            
                          </tr>
                         
                          <tr>
                          <tr>
                          <th>Tanggal</th>
                            <?php for ($i=1; $i < 17; $i++) { 
                              $where=array('id_matakuliah'=>$value['id_matakuliah'],'pertemuan'=>$i);
                              $query = $this->db->get_where('tb_absensi',$where); 
                              $this->db->group_by("pertemuan");
                              $result = $query->row_array(); 
                              if ($result['tanggal'] != '') {
                                $tmstamp=strtotime($result['tanggal']);
                                echo "<td>". date('d/m',$tmstamp) ."</td>";
                              }
                              else{
                                echo "<td> </td>";
                              }
                              
                            } 
                            ?>
                          
                          </tr>
                          <th>Jenis Pertemuan</th>
                            <?php for ($i=1; $i < 17; $i++) { 
                              $where=array('id_matakuliah'=>$value['id_matakuliah'],'pertemuan'=>$i);
                              $query = $this->db->get_where('tb_absensi',$where); 
                              $this->db->group_by("pertemuan");
                              $result = $query->row_array(); 
                              echo "<td>$result[jenis_pertemuan]</td>";
                            } 
                            ?>
                          
                          </tr>
                          <tr>
                            <th>Absensi Siswa</th>
                            <?php for ($i=1; $i < 17; $i++) { 
                              $url=base_url("absensi/pertemuan/$i/$value[id_matakuliah]");
                              echo "<td><a href='$url' class='btn btn-outline-success btn-sm'> <i class='fa fa-pencil'></i></a></td>";
                            } ?>
                            
                          </tr>
                        </table>
                        <?php 
                          $totalpertemuan = $this->db->query("select count(distinct pertemuan) total from tb_absensi where id_matakuliah= '$value[id_matakuliah]'")->row_array();
                          echo "<h5 class='text-center text-blue margin-top-xs'>Total pertemuan:$totalpertemuan[total] </h5>";
                         ?>

                      </div><!-- /.col-sm-10 -->
                    </div><!-- /.row -->
                      
                      
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2<?=$no?>">
                      <table class="table table-striped text-center">
                        <tr>
                          <th>Pertemuan</th>
                          <th>Materi</th>
                          <th>Download</th>
                        </tr>
                        <?php for ($i=5; $i < 10; $i++) { 
                          echo "<tr>
                                  <td>$i</td>
                                  <td>Materi $i</td>
                                  <td> <a href=''><i class='fa fa-download'></i></a></td>
                                </tr>";
                        } ?>
                      </table><!-- /.striped -->
                      <div class="text-center">
                        <a href="" class="btn btn-outline-info">Tampilkan perkuliahan yang sudah berlalu</a>
                      </div>
                      
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3<?=$no?>">
                      <table class="table table-striped text-center">
                        <tr>
                          <th>Komponen</th>
                          <th>Presentase</th>
                          <th>Nilai</th>
                        </tr>
                        <tr>
                          <td colspan="3"><p class="text-danger">Nilai belum ada</p></td>
                        </tr>
                      </table><!-- /.striped -->
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div>
              </div><!-- /.col-sm-8 -->
            </div><!-- /.row -->
          </div>
        </div>
      <?php 
      $no++;
      endforeach ?>
      

      
		</div><!-- /.col-sm-12 -->
	
	</div><!-- /.row -->
</div><!-- /.container -->
</body>
<script>
  ToxProgress.create();
  ToxProgress.animate();

</script>