
                   <?php
			       $username = $_POST['username'];
			       $email = $_POST['email'];
			       $password = $_POST['password'];
                    //basic validation
			        if(empty($_POST['username'])){
			           echo "Username required.";
		              }
			          echo "</br>";
                     if(strlen($_POST['passwordConfirm']) < 3){
		               echo "Confirm password is too short.";
	                                                       }
	                      echo "</br>";
                     if($_POST['password'] != $_POST['passwordConfirm']){
							 echo "Passwords do not match.";
						}
						echo "</br>";
                        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	                        echo "Please enter a valid email address";
	                    }	
	                    // formats user input before entering in the database
					
					$username=addslashes($username);
					$email =addslashes($email);
					$password= addslashes($password);
					@ $db = mysql_pconnect("localhost", "root", "root");
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
							echo '<br><br><br><div class=head1>User Already Exists, <a href="register.php"> choose a different one.</a></div>';
							exit;
						}
						$query="insert into tumas_members(username, email, password) values('$username','$email','$password')";
						$rs=mysql_query($query)or die("Could Not Perform the Query");
						
					echo '<br><br><br><div class=head1>Hi '.$username.' You have succesifully been signed up, please <a href="login.php">login</a></div>';
					?>
		  </div>
	  </body>
</html>
  