<?php
include('loginscript.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
  header("location: register_associate.php");
}
?>
        <?php
          require('layout/login_header.php'); 
        ?> 
        <div class="main wow fadeInDown" data-wow-delay="0.5s">
            <div class="box login">
                   <div class="login_img">
                       <a href="index.php"><img src="assets/img/logo.png" title="home"></a>
                    </div>
               <div class="error_message">
                 <span><?php echo $error; ?></span>
                </div> 
               <form action="" method="post" data-validate="parsley">
                    <div class="form-group">
                      <div class="input-group">
                          <input id="name" name="username" data-required="true" data-trigger="change" placeholder="login (username)" type="text" title="">
                      </div>
                    </div>
                    <input id="password" name="password"  type="password" data-required="true" data-trigger="change" placeholder="password">
					<input class="btnlogin" name="submit" type="submit" value="Login"></br>
                    <span class="login_signup_option">Not a member ? <a href="register.php">signup</span></a>
               </form>
            </div>
        </div>
        <?php
          require('layout/footer.php'); 
        ?>