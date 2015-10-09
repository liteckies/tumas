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
                <div class="right_widget span 4">
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
                  <div class="registration span 7 pull-right wow fadeInRight" data-wow-delay="1s">
                        <div class="registration_inner">
                            <form action="process_registration.php" method="post" data-validate="parsley">
                                <label for="firstname">First Name</label>
                                <input type="text" type="firstname" name="firstname" data-required="true" data-trigger="change" class="form-control" placeholder="enter your first name...">
                                <label for="lastname">Last Name</label>
                                <input type="text" type="lastname" name="lastname"  data-required="true" data-trigger="change" placeholder="enter your first name...  ">
                                <label for="username">Registration number</label>
                                <input type="text" id="phone_number" name="regnumber"  data-required="true" data-trigger="change" placeholder="Your phone number...">
                                <label for="username">Year Completed</label>
                                <input type="text" id="year-completed" name="year_completed" data-type="digits" data-required="true" data-trigger="change" placeholder="year completed...">
                                 <label for="username">Phone</label>
                                <input type="text" id="phone_number" name="phonenumber"  data-required="true" data-trigger="change" placeholder="Your phone number...">
                                <label for="username">Ministry Served</label>
                                <input type="text" id="ministry_served" name="ministry"  data-required="true" data-trigger="change" placeholder="which ministry did you serve in?...">
                               <div class="registration_button">
                                  <div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Register" class="registration_btn" tabindex="5"></div>
                               </div>
                            </form>
                       </div>
                  </div>
              </div>
           </div>
        </div>
           
      <?php
        require('layout/footer.php');
       ?>
    </div>