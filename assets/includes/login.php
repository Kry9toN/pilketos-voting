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
          <h6 class="container left" >Kembali ke Web&nbsp;<a href="../">Pilketos</a></h6>
      </div>
    </form>
