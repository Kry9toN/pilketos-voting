<!doctype html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/asset/img/icon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PILKASIS | SMKN 1 UDANAWU</title>
    
  </head>
  <body class="bg-secondary">
    
      <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand text-hide" href="/">Pilkasis
			  <img src="/asset/img/icon.png" class="rounded-circle d-block" width="36" height="36" viewBox="0 0 612 612" facusable="false">
            </a>
            <a class="navbar-brand" href="/">Pilkasis SMEKSADA/a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#kandidat">Kandidat</a>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="#login">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <section id="download" class="">
      <div class="container text-center mt-2">
        <div class="card text-white bg-dark mb-3">
          <div class="card-body">
            <h1 class="display-6">Selamat datang</h1>
            <p class="lead">Pikasis SMKN 1 UDANAWU</p>
            <a class="btn btn-danger" href="#login" rol="buttom">Login</a>
          </div>
        </div>
      </div>
    </section>

<section id="kandidat" class="kandidat">
<div class="container">
  <div class="card text-white bg-dark mb-3">
    <div class="card-body">
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
			</div>
		</div>
	</section>
		
<section id="login" class="login">
<div class="container text-center">
  <div class="card text-white bg-dark mb-3">
    <div class="card-body">
	  <h1> LOGIN sebagai .... </h1>
	  <p>Silahkan login untuk memberikan suara. Login sebagai ...</p>
	</div>
	<br>
	<ul class="list-inline" id="chart-skill">
	  <li><a href="siswa/" target="_blank">
		  <div class="easy-pie-chart percentage" data-percent="100" data-color="#0000FF">
			<span class="percent">Login Siswa</span>
		  </div></a>
	  </li>
	  <li><a href="guru/" target="_blank">
		  <div class="easy-pie-chart percentage" data-percent="100" data-color="#F7F66B">
			<span class="percent">Login Guru</span>
		  </div></a>
	  </li>
	  <li><a href="kandidat/" target="_blank">
		  <div class="easy-pie-chart percentage" data-percent="100" data-color="#800080">
			<span class="percent">Login Kandidat</span>
		  </div></a>
	  </li>
	  <li><a href="admin/" target="_blank">
		  <div class="easy-pie-chart percentage" data-percent="100" data-color="#00A65A">
			<span class="percent">Login Admin</span>
		  </div></a>
	  </li>
	</ul>
  </div>
</div>
</section>

<footer class="bg-secondary text-white">
  <div class="container">
      <div class="card text-white bg-dark mb-3">
          <div class="card-body">
    <div class="row">
      <div class="col text-center">
        <p>Copyright @2019 <a href="https://t.me/kry9ton" target="_blank">KryPtoN</a>
          <a>Web by Dhimas XI TKJ 1</a></p>
        <a href="https://github.com/Kry9toN/pilketos-voting" target="_blank">Source web</a>
      </div>
    </div>
  </div>
  </div>
  </div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
