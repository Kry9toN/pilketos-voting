<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login Administrator Pilketos | SMKN 1 UDANAWU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="shortcut icon" href="/asstes/img/icon.ico">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>

    <link rel="stylesheet" href="css/style.css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

   <nav>
    <div class="nav-wrapper blue lighten-1">
        <img src="/assets/img/icon.png" width="100" height="56" viewBox="0 0 612 612" facusable="false">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>

<div class="row" style="margin:80px;">
  <h4 class="center">Admin login page</h4>
   <div class="divider"></div>
    <form class="col s12" method="post" action="logincek.php">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" placeholder="Username" name="username" required="required">
          <label for="icon_prefix">Username</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">lock_outline</i>
          <input id="icon_telephone" type="password" class="validate" placeholder="Password" name="password" required="required">
          <label for="icon_telephone">Password</label>
        </div>
        <div class="col s6">
         <p>
           <label>
             <input type="checkbox" name="ingat" />
             <span>Ingat saya</span>
           </label>
         </p>
         </div>
         <div class="col s6">
          <button class="btn waves-effect waves-light right blue lighten-1 pulse" type="submit" name="simpan">Login
            <i class="material-icons right">send</i>
          </button>
         </div>
          <h6 class="container" >Kembali ke Web&nbsp;<a href="../">Pilketos</a></h6>
      </div>
    </form>
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

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>
