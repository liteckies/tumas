 <!DOCTYPE html>
<html lang="en">
    <head>
         <meta charset="utf-8">
        <title>TUMAS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- CSS -->
        <link rel='stylesheet' href="assets/fonts/sans.css">
        <link rel='stylesheet' href="assets/fonts/oleo+script.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
         <!-- Custom Theme files -->
         <!---- animated-css ---->
        <link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
         <script src="assets/js/wow.min.js"></script>
        <script>
         new WOW().init();
        </script>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="icon" type="image/ico" href="assets/img/favicon_logo.png"/>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
      <?php
           extract($_POST);
      //connection to database
      @$db = mysql_pconnect("localhost", "root", "ndururi");
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
           $rs=mysql_query("select * from tum_associates where reg_number='$regnumber'");
            if (mysql_num_rows($rs)>0)
            {
              echo '<br><br><br><br><div class=head1>'.$name.'already registered, Relax bana. <a href="new_user.php">.</a></div>';
              exit;
            }
             $query="insert into tum_associates ( fname,sname,reg_number,year_completed,phone_number,ministry)
                        values('$firstname','$lastname','$regnumber','$year_completed','$phonenumber','$ministry')";
 
                        $result = mysql_query($query);
                         if ($result)
                              echo'Hi '.$firstname.' You have succesifully registered, Your data is secure.<a href="index.php">.</a></div>';
       ?>
         <!-- Javascript -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
   </body>
 </html>
