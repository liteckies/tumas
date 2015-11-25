<?php
		$username=$_POST['username'];
		$password=$_POST['password'];
		 //basic validation
		if(empty($_POST['username'])){
			   echo "Username required.";
			 }
		   echo "</br>";
		   // formats user input before entering in the database
		$username=addslashes($username);
		$password= addslashes($password);
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
		$rs=mysql_query("select * from tumas_admin where username='$username'");
		if (mysql_num_rows($rs)>0){
		echo '<br><br><br><div class=head1>User Already Exists, <a href="profile.php"> choose a different one.</a></div>';
		exit;
	    }
	    $query="insert into tumas_admin(username, password) values('$username', '$password')";
		$rs=mysql_query($query)or die("Could Not Perform the Query");
		echo '<br><br><br><div class=head1>Hi, You have succesifully added '.$username.' as admin.</a></div>';
	?>