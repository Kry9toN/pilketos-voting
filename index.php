<!doctype html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/asset/img/icon.ico">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>PILKETOS | SMKN 1 UDANAWU</title>

  </head>
  <body>

  <!-- Navbar -->
  <nav>
    <div class="nav-wrapper blue lighten-1">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>

    <div class="parallax-container">
      <div class="parallax"><img src="/gambar/galeri2.jpg"></div>
    </div>
    <div class="section white">
      <div class="row container">
        <h4 class="header">Pilketos Online | SMKN 1 UDANAWU</h4>
        <p class="grey-text text-darken-3 lighten-3">Untuk memulai memilih silakan login terlebih dahulu di bawah ini.</p>
  <!-- Dropdown Trigger -->
  <a class='dropdown-trigger btn blue lighten-1' href='#' data-target='dropdown1'>Login</a>

  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content blue-text text-lighten-1'>
    <li><a href="/siswa" class="blue-text text-lighten-1">Sebagai Siswa</a></li>
    <li><a href="/kandidat" class="blue-text text-lighten-1">Sebagai Kandidat</a></li>
  </ul>
      </div>
    </div>

      <div class="container">
		<h1 id="title-about"> KANDIDAT OSIS </h1>
<?php
include_once "sambungan.php";
$sqljs="SELECT sum(jumlahsuara) as jsuara FROM kandidat";
$queryjs=mysqli_query($koneksi,$sqljs);
$rjs=mysqli_fetch_array($queryjs);
$sql="SELECT * FROM kandidat ORDER BY nokandidat";
$query=mysqli_query($koneksi,$sql);
while($r=mysqli_fetch_array($query)){
	echo '
					<div class="col-md-6 text-justify col-sm-6" id="text-about-left">
						<center>';
	echo "<h3>No. ".$r['nokandidat']." - ".$r['nama']."</h3>";
	echo '
							<img src="gambar/kandidat/'.$r['foto'].'" class="img-circle" height="150px" alt id="img-about'.$r['nokandidat'].'">';
	echo "<h2>".round(($r['jumlahsuara']/$rjs['jsuara']*100),2)."%</h2>";
	echo $r['jumlahsuara']." suara";
	echo '					</center>
						<b>VISI:</b><br/>
						<center>'.$r['visi'].'</center>
						<b>MISI:</b><br/>
							'.$r['misi'].'
					</div>';
}
?>
     </div>

        <footer class="page-footer blue lighten-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2020 KryPtoN | XII TKJ 1.
            <a class="grey-text text-lighten-4 right" href="https://github.com/kry9ton">Tentang KryPtoN</a>
            </div>
          </div>
        </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="/js/style.js"></script>
  </body>
</html>
