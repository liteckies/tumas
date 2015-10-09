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
        <!--<link href="styles.css" rel="stylesheet" type="text/css">-->
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
      <div class="registration_header navbar-fixed-top">
            <div class="container registration_container">
                <div class="row">
                    <div class="span 4 wow fadeInRight" data-wow-delay="0.6s">
                      <h1><span class="registration_logoinfo">tumas</span></h1>
                    </div>
                    <div class="span 4 search_button">
                    </div>
                    <div class=" span 4 register_logout" data-wow-delay="0.9s">
                        <b id="welcome" class="welcome_option" >Welcome : <i><?php echo $login_session; ?></i></b>
                        <b id="logout" class="logout_option"><a href="logout.php">Log Out</a></b>
                     </div>
                </div>
                <div class="row">
                  <div class="navigation_div">
                  <ul>
                    <li><a href="#">view your information</a></li>
                  </ul>                  
                  </div>
                </div>
            </div>
        </div>