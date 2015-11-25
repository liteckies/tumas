 <div class="register_body">
    <?php
        include('session.php');
    ?>
     <?php
        require('layout/registration_header.php');
      ?>
      <div class="registeration_outer">
          <div class="container">
             <div class="row">
                <div class="right_widget span 6">
                   <p>user panel</p>
                   <div class="row">
                     <div class="img">

                     </div>
                     <div class="right pull-right">
                       <b id="welcome" class="welcome_option" >
                       Hi,<i><?php echo $login_session; ?></i></b>
                     </div>
                   </div>
                </div>
			</div>	
		</div>
	</div>	
   <?php
        require('layout/footer.php');
       ?>
    </div>