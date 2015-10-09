<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
  header("location: profile.php");
}
?>
        <?php
          require('layout/loginheader.php'); 
        ?> 
		<div class="main wow fadeInLeft" data-wow-delay="0.5s">
			<div class="login">
				<legend>Admin login</legend>
				<hr>
				 <span><?php echo $error; ?></span></br>
               <form action="" method="post" data-validate="parsley">
					<label>UserName :</label>
					<input id="name" name="username" date-required="true" data-trigger="change" placeholder="username" type="text" title="">
					<label>Password :</label>
					<input id="password" name="password" placeholder="**********" type="password">
					<input name="submit" type="submit" class="btn" value=" Login ">
				</form>
			</div>
		</div>
        <?php
          require('layout/footer.php'); 
        ?>
        