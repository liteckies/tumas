<!DOCTYPE html>
<html lang="en">
    <head>
         <meta charset="utf-8">
        <title>TUMAS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.min.css">
        <link href="styles.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.css">
         <!-- Custom Theme files -->
         <!---- animated-css ---->
        <link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
         <script src="assets/js/wow.min.js"></script>
          <script src="assets/js/jquery-1.10.2.min.js"></script>
         <script type="text/javascript" src="assets/js/jquery.dataTables.js"></script>
        <script>
         new WOW().init();
        </script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
            $(".scroll").click(function(event){   
              event.preventDefault();
              $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
          });
    </script>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="icon" type="image/ico" href="assets/img/favicon_logo.png"/>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
      <div class="header navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="logo span2 wow fadeInLeft" data-wow-delay="0.3s">
                       <a href="profile.php"><img src="assets/img/logo.png"></a>
                    </div>
                    <div class="logo_info span2 wow fadeInRight" data-wow-delay="0.6s">
                      <h1><span class="red">tumas</span></h1>
                    </div>
                    <div class="admin-right">
                      <span  class="fa fa-user"></span>
                        <div class="welcome">
      
                        </div>
                        <div class="logout">
                           <b><a href="logout.php">Log Out</a></b>
                        </div>
                    </div>
                </div>
            </div>
        </div>