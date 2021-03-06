<!doctype html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/assets/img/icon.png">
<?php include "assets/includes/head.php"; ?>
    <title>PILKETOS | SMKN 1 UDANAWU</title>

  </head>
  <body>

<?php include "assets/includes/navbar.php"; ?>

  <div class="container my-4">
    <div class="row text-center">
      <div class="col-12">
        <h3>Pilketos Online SMK Negeri 1 Udanawu</h3>
        <p>Selamat Datang di Situs Pilketos Online SMKN 1 Udanawu. Lembaga Pendidikan dituntut untuk mampu merespon hadirnya Revolusi Industri 4.0 dengan cara harus dapat menyesuaikan pola dan pendekatan pembelajaran berbasis teknologi dan internet, sehingga tercipta pola pembelajaran yang terstruktur dan terukur pada tiap materi pembelajaran yang ditawarkan kepada anak didik di semua jenjang.</p>
        <p>Melalui pilketos online SMKN 1 Udanawu ini, siswa dapat memilih kandidat ketua OSIS masa bakti 2020/2021 tanpa keluar rumah untuk memutus rantai penularan virus COVID-19.</p>
      </div>
    </div>
  </div>

<div class="container my-4">
  <div class="card">
    <div class="card-body">
      <div class="text-center">
        <h3>Waktu pemilihan tinggal :</h3>
        <h5 id="countdown"></h5>
        <p>Voting/pilih sebelum terlambat</p>
      </div>
    </div>
  </div>
</div>

<div id="call-to-action">
  <div class="container">
  <div class="row">
    <div class="col-lg-7 text-center text-lg-left">
      <h3 class="cta-title animate__animated animate__jackInTheBox">Login!! untuk memilih</h3>
      <p class="cta-text animate__animated animate__fadeInLeftBig"> Masuk sebagai Admin, Guru, dan Siswa..</p>
    </div>
    <div class="col-lg-5 cta-btn-container text-center">
      <a class="cta-btn align-middle animate__animated animate__backInLeft wow" href="/siswa"><i class="fas fa-users"></i> Siswa</a>
      <a class="cta-btn align-middle animate__animated animate__backInLeft wow" href="/guru"><i class="fas fa-chalkboard-teacher"></i> Guru</a>
      <a class="cta-btn align-middle animate__animated animate__backInLeft wow" href="/admin"><i class="fas fa-user-secret"></i> Admin</a>
    </div>
  </div>
</div>
</div>

<div class="text-center my-3">
  <img src="/assets/img/among.gif" class="img-fluid">
</div>

<section id="kandidat">
<div class="container my-3 text-center">
  <h3 class="card-title animate__animated animate__jackInTheBox">Voting yang menjadi impostor</h3>
  <hr>

<!--    <div class="card">
       <div class="card-body">
       <h3>Video visi misi semua kandidat.</h3>
          <div class="embed-responsive embed-responsive-16by9">
             <iframe width="560" height="315" src="https://www.youtube.com/embed/MbCtqhkUcxU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
       </div>
    </div> -->

    <div class="row">

<?php
include_once "sambungan.php";
$sqljs="SELECT sum(jumlahsuara) as jsuara FROM kandidat";
$queryjs=mysqli_query($koneksi,$sqljs);
$rjs=mysqli_fetch_array($queryjs);
$sql="SELECT * FROM kandidat ORDER BY nokandidat";
$query=mysqli_query($koneksi,$sql);
while($r=mysqli_fetch_array($query)){
  echo '<div class="col-sm-6 my-3 animate__animated animate__fadeInLeft wow">
        <div class="card">
        <div class="card-body">';
	echo '<div class="text-justify" id="text-about-left">
	       <center>';
	echo "<h3>No. ".$r['nokandidat']." - ".$r['nama']."</h3>";
	echo '<img src="gambar/kandidat/'.$r['foto'].'" class="img-circle" height="150px" alt id="img-about'.$r['nokandidat'].'">';
	//echo "<h2>".round(($r['jumlahsuara']/$rjs['jsuara']*100),2)."%</h2>";
	//echo "<div class='font-color'>".$r['jumlahsuara']." suara</div>";
/*	echo '		</center>
	        <div class="font-color">
						<b>VISI:</b><br/>
						<center>'.$r['visi'].'</center>
						<b>MISI:</b><br/>
						'.$r['misi'].'
					</div>'; */
	echo '</div>
	      </div>
	      </div>
	      </div>';
}
?>
  </div> 
</div>
</section>

<?php include "assets/includes/footer.php"; ?>

<?php include "assets/includes/js.php"; ?>

<script src="/assets/js/index.js"></script>
<script src="/assets/js/countdownindex.js"></script>
  </body>
</html>
