 <div class="admin_add_associate">
 <?php
      require('layout/header.php');
      extract($_POST);
      if (!$firstname || !$lastname || !$regnumber ||!$year_completed || !$phonenumber || !$ministry)
              {
              echo 'You have not entered all the required details.Please <a href="new_user.php">check your details again</a><br>';
              }
      //connection to database
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
           $rs=mysql_query("select * from tumas_associates where reg_number='$regnumber'");
            if (mysql_num_rows($rs)>0)
            {
              echo '<div class=head1>'.$firstname.' already registered, check registration number and try again. <a href="profile.php">.</a></div>';
              exit;
            }
             $query="insert into tumas_associates ( fname,sname,reg_number,year_completed,phone_number,ministry)
                        values('$firstname','$lastname','$regnumber','$year_completed','$phonenumber','$ministry')";
 
					    $result = mysql_query($query);
					     if ($result)
					          echo'Hi Admin, You have succesifully registered '.$firstname.', Check the database.<a href="associates.php">.</a></div>';
                      ?>
      <?php
           require('layout/footer.php');
      ?>
       <a href="profile.php">Back to admin panel.</a>
      </div>