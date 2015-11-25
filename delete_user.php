<?php
        include('session.php');
    ?>
<?php
require_once('layout/registration_header.php');
/*
session_start();
if(!isset($_SESSION['logged'])){
	header('location:login.php');
}
*/
if(isset($_GET['action'])) { logout(); } else { }

if(isset($_POST['submit']) && $_POST['submit']=='Yes'){
	$user_id = $_GET['user_id']; //retrieve user id from the list
	
	mysql_query("DELETE from tumas_asso WHERE user_id='".$_GET['user_id']."'")or die(MYSQL_ERROR());
	header('Location:associates.php');
}
elseif(isset($_POST['submit']) && $_POST['submit']=='No'){
	header('Location:header.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete a user</title>
<link href="styles/catalog.css" rel="stylesheet" type="text/css" />
<link href="styles/home.css" rel="stylesheet" type="text/css" />
<link href="styles/styledbuttons.css" rel="stylesheet" type="text/css" />
<link href="styles/main.css" rel="stylesheet" type="text/css" />
<link href="styles/menu.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="more_container">
<div id="more_header">
		<div id="logo"><a href="index.php"><img src="images/logo.jpg" alt="Logo" title="" border="0" height="80"></a>
		</div>
		<div id="prjtitle">Tumas</div>
		<?php include('includes/menu.php'); ?>
</div>
<div style="text-align:center; color:red;">
<h1>Do you really want to delete this user?</h1>
</div>
<form id="frminvoice" name="frminvoice" method="post" action="?do=delete&user_id=<?php echo $_GET['user_id']; ?>">
<div style="text-align:center;">
 <p><strong style="color:red;"><?php if(isset($msg)) { echo $msg; } else { echo ''; } ?></strong></p>
 <table cellpadding="2" cellspacing="2" id="catalog_list">
	<tr>
	<th>ID</th>
	<th>Firstname</th>
	<th>Surname</th>
	<th>Admin Number</th>
	<th>Year Compleated</th>
	<th>Phone</th>
	<th>Ministry</th>
	</tr>
<?php
	$user_id = $_GET['user_id']; //retrieve user id from the list

 $result = mysql_query("SELECT *FROM tumas_asso WHERE user_id='$user_id'")or die(MYSQL_ERROR());

 	//loop through the results and dispay data
while ($row=mysql_fetch_assoc($result)){
	extract($row);
	echo'<tr>';
	echo'<td>'.$user_id.'</td>';
	echo'<td>'.$fname.'</td>';
	echo'<td>'.$sname.'</td>';
	echo'<td>'.$reg_number.'</td>';
	echo'<td>'.$year_compleated.'</td>';
	echo'<td>'.$phone_number.'</td>';
	echo'<td>'.$ministry.'</td>';
	echo'<tr>';
	}
?>	
 </table>
</div>
<div style="text-align:right;">
<table align="center">
<tr>
	<td>
	<input type="submit" name="submit" id="send" value="Yes" class="green_button"/>
	</td>
	<td>
	<input type="submit" name="submit" id="send" value="No" class="green_button"/>
	</td>
</tr>	
</table>	
</div>		
</form>
</div>
</body>
</html>