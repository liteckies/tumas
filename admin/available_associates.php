
<div class="all_associates">
   <h4>Kindly view associates in the system</h4>
	    <?php
	         require('layout/header.php');
			 include 'includes/config.php';
			mysql_select_db("TUMAMS"); 
			// set the query
			$query = "select * from tumas_associates";
			// run the query using mysql_query function
			$result = mysql_query($query);
			// return the number of rows the query returns and stores it in a variable called num_results
			$num_results = mysql_num_rows($result);
			echo "<p>Associates found: ".$num_results."</p>";
			// loop through the rows
			for ($i=0; $i <$num_results; $i++)
			{
			 $row = mysql_fetch_array($result);
			echo "<h5><strong>".($i+1).". First Name: ";
	         echo htmlspecialchars( stripslashes($row["fname"]));
			echo "</strong><br>Surname: ";
			echo htmlspecialchars (stripslashes($row["sname"]));
			echo "<br>Registration Number: ";
			echo htmlspecialchars (stripslashes($row["reg_number"]));
			echo "<br>Phone Number: ";
			echo htmlspecialchars (stripslashes($row["phone_number"]));
			echo "<br>Ministry: ";
			echo htmlspecialchars (stripslashes($row["ministry"]));
			echo "<br>Additional Info: ";
				echo htmlspecialchars (stripslashes($row["addition"]));
			}
	   ?>
   </div>