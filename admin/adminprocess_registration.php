
<?php
require('layout/header.php');
      extract($_POST);
      if (!$firstname || !$lastname || !$regnumber ||!$year_completed || !$phonenumber || !$ministry)
              {
              echo 'You have not entered all the required details.Please <a href="new_user.php">check your details again</a><br>';
              }
      //connection to database
      @ $db = mysql_pconnect("localhost", "root", "ndururi");
          //checking connecting
            if (!$db)
            {
            echo "Error: Could not connect to database, Please try again.";
    }
          //selecting database to use
          $mysql = mysql_select_db("tum_asso");
          if(!$mysql)
            {
            echo "Cannot select database.";
                 }

					//quering the database
           $rs=mysql_query("select * from tumas_associates where reg_number='$regnumber'");
            if (mysql_num_rows($rs)>0)
            {
              echo '<br><br><br><div class=head1>'.$name.'already registered, Relax bana. <a href="new_user.php">.</a></div>';
              exit;
            }
             $query="insert into tumas_associates ( fname,sname,reg_number,year_completed,phone_number,ministry)
                        values('$firstname','$lastname','$regnumber','$year_completed','$phonenumber','$ministry')";
 
					    $result = mysql_query($query);
					     if ($result)
					          echo'Hi '.$firstname.' You have succesifully registered, Your data is secure.<a href="index.php">.</a></div>';
                      ?>
         <?php
           require('layout/footer.php');
         ?>