<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Guru Pilketos | SMKN 1 UDANAWU</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  <link rel="shortcut icon" href="/asstest/img/icon.ico">
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>
<?php include "../assets/includes/head.php"; ?>

</head>

<body>

<?php include "../assets/includes/navbar.php"; ?>

<div class="row" style="margin:50px;">
  <h4 class="center">Guru login page</h4>
<div class="divider"></div>
    <form class="col s12" method="post" action="logincek.php">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" placeholder="Nama Lengkap" name="nama" required="required">
          <label for="icon_prefix">Nama Lengkap</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">lock_outline</i>
          <input id="icon_telephone" type="password" class="validate" placeholder="NIP" name="password" required="required">
          <label for="icon_telephone">NIP</label>
        </div>
        <div class="col s6">
         <p>
          <label>
             <input type="checkbox" onclick="showpw()"/>
             <span>Tampilkan Password</span>
          </label>
         </p>
        </div>
        <div class="col s6">
         <p>
           <label>
             <input type="checkbox" name="ingat" />
             <span>Ingat saya</span>
           </label>
         </p>
         </div>
         <div class="col s6 offset-s6">
          <button class="btn waves-effect waves-light right blue lighten-1 pulse" type="submit" name="simpan">Login
            <i class="material-icons right">send</i>
          </button>
         </div>
          <h6 class="container left" >Kembali ke Web&nbsp;<a href="../">Pilketos</a></h6>
      </div>
    </form>
</div>

<!-- Fungsi Show Password -->
<script>
function showpw() {
  var x = document.getElementById("icon_telephone");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<?php include "../assets/includes/footer.php"; ?>

<?php include "../assets/includes/js.php"; ?>

    <script src="js/index.js"></script>
-->
</body>
</html>
