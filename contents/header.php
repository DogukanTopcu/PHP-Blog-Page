<?php

include '../production/admin/netting/connect.php'; 

$searchpost=$db->prepare("SELECT * FROM posts where post_id=:id");
$searchpost->execute(array(
	'id' => $_GET['post_id']
));

$getpost=$searchpost->fetch(PDO::FETCH_ASSOC);


$searchprofile=$db->prepare("SELECT * FROM profile where profile_id=:id");
$searchprofile->execute(array(
    'id' => 1
));

$getprofile=$searchprofile->fetch(PDO::FETCH_ASSOC);





$searchcategories=$db->prepare("SELECT * FROM categories where categori_id=:id");
$searchcategories->execute(array(
	'id' => 1
));

$getcategories=$searchcategories->fetch(PDO::FETCH_ASSOC);

$categories = explode(", ",$getcategories['categori_names']);



$searchpost1=$db->prepare("SELECT * FROM posts where post_status=:statu order by post_id DESC");
$searchpost1->execute(array(
    'statu' => 1
));



?>


<!DOCTYPE HTML>
<html lang="en">
<head>
	<title><?php echo $getpost['post_title']; ?> | <?php echo $getprofile['profile_name']; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">

	<link rel="shortcut icon" href="../production/admin/images/<?php echo $getprofile['profile_favicon'] ?>" type="image/x-icon">


    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


	<!-- Stylesheets -->

	<link href="../css-js/common-css/bootstrap.css" rel="stylesheet">

	<link href="../css-js/common-css/ionicons.css" rel="stylesheet">


	<link href="../css-js/single-post-2/css/styles.css" rel="stylesheet">


    <link href="../css-js/single-post-2/css/responsive.css" rel="stylesheet">
    





	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">






</head>
<body >
<style>
body {
  background-image: url('../production/admin/images/<?php echo $getprofile['profile_bgimage']; ?>');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<style>

		
.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}







.overlay1 {
	height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content1 {
  position: relative;
  top: 46%;
  width: 80%;
  text-align: center;
  margin-top: 30px;
  margin: auto;
}
.overlay1 input[type=text] {
  padding: 15px;
  font-size: 17px;
  border: none;
  float: left;
  width: 80%;
  background: white;
}
.overlay1 input[type=text]:hover {
  background: #f1f1f1;
}

/* Style the submit button */
.overlay1 button {
  float: left;
  width: 20%;
  padding: 15px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.overlay1 button:hover {
  background: #bbb;
}
.overlay1 .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
  cursor: pointer;
  color: white;
}

.overlay1 .closebtn:hover {
  color: #ccc;
}

	</style>


<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div class="overlay-content">
			<a href="index.php">Home</a>
			<?php
			
				for ($i=0; $i < $getcategories['categori_number']; $i++) { ?>
					
					<a href="../category-post.php?categori=<?php echo $categories[$i]; ?>"><?php echo $categories[$i]; ?></a>
			
			<?php } ?>
			
		
		</div>
  </div>
  <div id="myNav1" class="overlay1">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
		<div class="overlay-content1">
			
				<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." name="search"> <br><hr> <br>

				<ul id="myMenu">
				<?php
			
					while ($getpost1=$searchpost1->fetch(PDO::FETCH_ASSOC)) { ?>

						<li><a style="color:white; font-size:20px;" href="content.php?post_id=<?php echo $getpost1['post_id']; ?>"><?php echo $getpost1['post_title']; ?></a></li><br>

			
				<?php } ?>
				</ul>
		</div>
	</div>

	<header style="background-color:<?php echo $getprofile['profile_bgcolor']; ?>; color:<?php echo $getprofile['profile_color']; ?>;">
		<div class="container-fluid position-relative no-side-padding">

			<a href="#" class="logo"><img src="../css-js/images/<?php echo $getprofile['profile_photo']; ?>" alt="..." ></a>
        <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>


      <ul class="main-menu visible-on-click" id="main-menu">
        <li><a onclick="openNav1()" href="#"><i class="ion-ios-search-strong"></i> Search</a></li>
        <li><a href="../index.php">Home</a></li>
				<li><a onclick="openNav()" href="#">Categories</a></li>
				<li><a href="../contact.php">Contact</a></li>
				<li><a href="../about.php">About Me</a></li>
			</ul><!-- main-menu -->
		</div><!-- conatiner -->
	</header>


	<script>
		function openNav() {
			document.getElementById("myNav").style.width = "100%";
		}

		function closeNav() {
			document.getElementById("myNav").style.width = "0%";
		}

    function openNav1() {
			document.getElementById("myNav1").style.width = "100%";
		}

		function closeNav1() {
			document.getElementById("myNav1").style.width = "0%";
		}
    

		function myFunction() {
			
			var input, filter, ul, li, a, i;
			
			input = document.getElementById("mySearch");
			
			filter = input.value.toUpperCase();
			
			ul = document.getElementById("myMenu");
			
			li = ul.getElementsByTagName("li");
			
			for (i = 0; i < li.length; i++) {
				a = li[i].getElementsByTagName("a")[0];
				if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
					li[i].style.display = "block";
				} else {
					li[i].style.display = "none";
				}
			}
		}
	</script>