<?php


ob_start();
session_start();
include '../netting/connect.php';






$searchuser=$db->prepare("SELECT * FROM user where user_mail=:mail");
$searchuser->execute(array(
  'mail' => $_SESSION['user_mail']
  ));
$say=$searchuser->rowCount();
$getuser=$searchuser->fetch(PDO::FETCH_ASSOC);

if ($say==0) {

  Header("Location:login.php?durum=unauthorized");
  exit;

}





?>






<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Welcome Doğukan! </title>

	<!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="../../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">

	<!-- CKEditor --> 
	<script src="//cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.php" class="site_title"> <span>Content Settings</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="../../../css-js/images/IMG_2951.jpg" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2>Doğukan Topçu</h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							
							<ul class="nav side-menu">
                                
                                <li><a href="index.php"><i class="fa fa-home"></i> Home </a></li>
                                
                                <li><a href="add-content.php"><i class="fa fa-plus"></i> Add Content </a></li>
								
                                <li><a href="posts-list.php"><i class="fa fa-list"></i> Posts </a></li>
                                
								<li><a href="categories.php"><i class="fa fa-compass"></i> Categories </a></li>
								
                                <li><a href="contact.php"><i class="fa fa-users"></i> Contact Settings </a></li>
                                
								<li><a href="social.php"><i class="fa fa-facebook"></i> Social Settings </a></li>
                                
                                <li><a href="comment-settings.php"><i class="fa fa-comment"></i> Comment Settings </a></li>
                                
                                <li><a href="profile-settings.php"><i class="fa fa-edit"></i> Profile Settings </a></li>
                                
                                <li><a href="about.php"><i class="fa fa-user"></i> About Me </a></li>
								
								<li><a href="add-photo.php"><i class="fa fa-plus"></i> Add Photo or GIF </a></li>
								
								<li><a href="messages.php"><i class="fa fa-comments"></i> Incoming Messages </a></li>
							
                            </ul>
                            

						</div>
                        
						

					</div>
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->
					<div class="sidebar-footer hidden-small">
						<a data-toggle="tooltip" data-placement="top" title="Settings">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="FullScreen">
							<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Lock">
							<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Logout" href="#">
							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
						</a>
					</div>
					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
					<nav class="nav navbar-nav">
						<ul class=" navbar-right">
							<li class="nav-item dropdown open" style="padding-left: 15px;">
								<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
									<img src="../../../css-js/images/IMG_2951.jpg" alt="">Doğukan Topçu
								</a>
								<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="javascript:;"> Profile</a>
									
									<a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
								</div>
							</li>

							
							
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->