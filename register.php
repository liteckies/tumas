
   <?php
    require('layout/header.php'); 
    if(@$_POST['submit'])
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
                            $username=addslashes($username);
                            $email =addslashes($email);
                            $password= addslashes($password);
                            @$db = mysql_pconnect("localhost", "root", "root");
                            //checking connecting
                                if (!$db)
                                {
                                echo "Error: Could not connect to database, Please try again.";
                }
                            //selecting database to use
                            $mysql = mysql_select_db("TUMAMS");
                            if(!$mysql)
                                {
                                echo "Cannot select database.";
                                 }
                            //quering the database
                            $rs=mysql_query("select * from tumas_members where username='$username'");
                                if (mysql_num_rows($rs)>0)
                                { 
                                    echo '<br><div class="warning_message"> <span class="fa fa-warning"</span> Error!  '.$username.' Already Exists, <a href="register.php"> Choose a different username.</a></div>';
                                    exit;
                                }
                                $query="insert into tumas_members(username, email, password) values('$username','$email','$password')";
                                $rs=mysql_query($query)or die("Could Not Perform the Query");
                                
                 
                           echo '<br><br><br><div class="success_message" ><span class="alert alert-success"</span>
                                             Hi '.$username.' You have succesifully been signed up, please <a href="login.php">login</a>
                                        </div>';
        }
    ?>
    <div class="signup_form wow fadeInDown" data-wow-delay="0.5s">
       <div class="signup_inner">
          <form "form" method="post" data-validate="parsley">
                <h2>Please Sign Up</h2>
                <div class="form-group">
                        <input type="text" class="form-control" name="username" id="InputName" 
                        data-required="true" data-trigger="change" placeholder="Enter username">
                 </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailFirst"
                         name="email" data-required="true" data-type="email" data-trigger="change" placeholder="your valid email here.">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="password" class="form-control"  data-required="true" data-trigger="change" data-parsley-equalto="#password"  name="password" placeholder="set your password">
                    </div>
                </div>
                 <div class="form-group">
                     <div class="input-group">
                            <input type="password" name="password"  class="form-control" data-required="true" data-trigger="change" id="password" placeholder="confirm password">
                     </div>
                 </div>
                 <div class="register-button">
                  <div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg register-button" tabindex="5"></div>
                </div>
                <p>Already a member? <a href='login.php'>Login</a></p>
            </form>
       </div>
    </div>
      <div class="signup_footer">
         <p>By registering you agree to the terms of service and privacy </br> policy of tum christian union.</p>
      </div>
        <?php
              require('layout/footer.php'); 
         ?>
