<?php

    include 'production/admin/netting/connect.php';

    $searchabout=$db->prepare("SELECT * FROM about where about_id=:id");
    $searchabout->execute(array(
        'id' => 1
    ));
            
    $getabout=$searchabout->fetch(PDO::FETCH_ASSOC);



    $searchprofile=$db->prepare("SELECT * FROM profile where profile_id=:id");
	$searchprofile->execute(array(
		'id' => 1
	));
	
    $getprofile=$searchprofile->fetch(PDO::FETCH_ASSOC);
    


    $searchsocial=$db->prepare("SELECT * FROM social where social_id=:id");
	$searchsocial->execute(array(
		'id' => 1
	));
	
    $getsocial=$searchsocial->fetch(PDO::FETCH_ASSOC);
    



    $searchcontact=$db->prepare("SELECT * FROM contact where contact_id=:id");
	$searchcontact->execute(array(
		'id' => 1
	));
	
    $getcontact=$searchcontact->fetch(PDO::FETCH_ASSOC);
    







    $skills = explode(",",$getabout['about_skills']);
    $skills_percent = explode(",",$getabout['about_skills_percents']);
    $languages = explode(",",$getabout['about_languages']);
    $languages_percent = explode(",",$getabout['about_languages_percents']);
    $photos = explode(",",$getabout['about_photos']);

    
    
    
    






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../halil.PNG">
    <title>About Me | <?php echo $getprofile['profile_name']; ?></title>

    <link rel="shortcut icon" href="production/admin/images/<?php echo $getprofile['profile_favicon'] ?>" type="image/x-icon">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
        .darkMode{
            float: right;
        }
        .dark {
            float: left;
            display: block;
            color: #554949;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 30px;
        }
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
            margin: 15px;
        }
        
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }
        .gallery {
    display: grid;
    grid-template-columns: repeat(8, 1fr);
    grid-template-rows: repeat(8, 5vw);
    grid-gap: 15px;
}
.gallery__img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }
        
        input:checked + .slider {
            background-color: #2196F3;
        }
        
        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }
        
        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }
        
        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }
        
        .slider.round:before {
            border-radius: 50%;
        }

        #mySidebar{
            background-color: black;
        }
        #education{
            background-color: black;
        }
        #skills{
            background-color: black;
        }
        #languages{
            background-color: black;
        }
        #aboutMe{
            background-color: black;
        }
        #header{
            background-color: #2B2C2B;
        }

        
    </style>
</head>
<body class="w3-content" style="max-width:1600px; background-color:#2B2C2B; color:#ffffff;">

    

    <nav class="w3-sidebar w3-collapse w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
        <div class="w3-container">
          <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
            <i class="fa fa-remove"></i>
          </a>
          <img src="css-js/images/<?php echo $getprofile['profile_photo'] ?>" style="width:45%;" class="w3-round"><br><br>
          <h4><b><?php echo $getprofile['profile_name']; ?></b></h4>
        </div>
        <div class="w3-bar-block">
          <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding" ><i class="fa fa-th-large fa-fw w3-margin-right"></i>Home</a> 
          <a onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-user fa-fw w3-margin-right"></i>About Me</a> 
          <a href="contact.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>Contact</a>
        </div>
        <div class="w3-panel w3-large">
          <a class="fa fa-facebook-official w3-hover-opacity" href="<?php echo $getsocial['social_facebook']; ?>"></a>
          <a class="fa fa-instagram w3-hover-opacity" href="<?php echo $getsocial['social_instagram']; ?>"></a>
          <a class="fa fa-snapchat w3-hover-opacity" href="<?php echo $getsocial['social_snapchat']; ?>"></a>
          <a class="fa fa-pinterest-p w3-hover-opacity" href="<?php echo $getsocial['social_pinterest']; ?>"></a>
          <a class="fa fa-twitter w3-hover-opacity" href="<?php echo $getsocial['social_twitter']; ?>"></a>
          <a class="fa fa-linkedin w3-hover-opacity" href="<?php echo $getsocial['social_linkedin']; ?>"></a>
        </div>
      </nav>

      <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


    <div class="w3-main" style="margin-left:300px">
      <header id="header">
        <img src="css-js/images/<?php echo $getprofile['profile_photo'] ?>" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity">
        <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
        <div class="w3-container">
            <h1><b></b></h1>
        
        </div>
      </header>



      <div id="aboutMe" class="w3-container w3-card-4 w3-margin">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>About Me</h2>
        <div class="w3-container">
            <?php echo $getabout['about_me']; ?>
        </div>
      </div>
      <div id="education" class="w3-container w3-card-4 w3-margin">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>My Works</h2>
        <div class="w3-container">
            <?php echo $getabout['about_works']; ?>
        </div>
        <br><br>
      </div>
      
      <div id="education" class="w3-container w3-card-4 w3-margin">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Primary School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $getabout['about_education_primary_school_date']; ?></h6>
          <p><?php echo $getabout['about_education_primary_school']; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Middle School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $getabout['about_education_middle_school_date']; ?></h6>
          <p><?php echo $getabout['about_education_middle_school']; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>High School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $getabout['about_education_high_school_date']; ?></h6>
          <p><?php echo $getabout['about_education_high_school']; ?></p><br>
        <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>University</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $getabout['about_education_university_date']; ?></h6>
          <p><?php echo $getabout['about_education_university']; ?></p><br>
        </div>
      </div>


      <div id="skills" class="w3-container w3-card-4 w3-margin">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Skills</h2>
          
        <?php
        
        for ($i=0; $i < $getabout['about_skill_numbers']; $i++) { ?>
          
          <p><?php echo $skills[$i]; ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills_percent[$i]; ?>"><?php echo $skills_percent[$i]; ?></div>
          </div>

        <?php
                    
            }    ?>


          <br><br>
      </div>


      <div id="languages" class="w3-container w3-card-4 w3-margin">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Languages</h2>
        
        
        <?php
        
        for ($i=0; $i < $getabout['about_language_numbers']; $i++) { ?>
        <p><?php echo $languages[$i]; ?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?php echo $languages_percent[$i]; ?>"></div>
          </div><br>
        <?php
                    
             }    ?>
        
          <br>
          <br>
        </div>


      
      <div id="education" class="w3-container w3-card-4 w3-margin">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Contacts</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Primary School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $getabout['about_education_primary_school_date']; ?></h6>
          <p><?php echo $getabout['about_education_primary_school']; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Middle School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $getabout['about_education_middle_school_date']; ?></h6>
          <p><?php echo $getabout['about_education_middle_school']; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>High School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $getabout['about_education_high_school_date']; ?></h6>
          <p><?php echo $getabout['about_education_high_school']; ?></p><br>
        <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>University</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php #echo $getabout['about_education_university_date']; ?></h6>
          <p><?php echo $getabout['about_education_university']; ?></p><br>
        </div>
      </div>
      
      <div id="aboutMe" class="w3-container w3-card-4 w3-margin">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>My Photos</h2>
        <?php
              for ($k=0; $k < $getabout['about_photo_numbers']; $k++) { ?>
        <div class=”gallery”>
          <figure class=”gallery__item gallery__item--1">
            <img src="production/admin/images/<?php echo $photos[$k]; ?>" class="gallery__img" alt="Image 1">
          </figure>
        </div>
          
        <?php } ?>
          
      </div>


      </div>

    </div>





      <script>
        var darkDurum = 0;
        function ourFunction() {
        if (darkDurum == 0) {
            document.body.style.backgroundColor = "#2B2C2B";
            document.body.style.color = "#ffffff";
            
            document.querySelector("#mySidebar").style.backgroundColor = "black"
            document.getElementById("header").style.backgroundColor = "#2B2C2B"
            document.getElementById("education").style.backgroundColor = "black"
            document.getElementById("skills").style.backgroundColor = "black"
            document.getElementById("languages").style.backgroundColor = "black"
            document.getElementById("aboutMe").style.backgroundColor = "black"
            darkDurum = 1;
        }else {
            
            document.body.style.backgroundColor = "white";
            document.body.style.color = "#000000";
            document.getElementById("header").style.backgroundColor = "white"
            document.querySelector("#mySidebar").style.backgroundColor = "white"
            document.getElementById("education").style.backgroundColor = "white"
            document.getElementById("skills").style.backgroundColor = "white"
            document.getElementById("languages").style.backgroundColor = "white"
            document.getElementById("aboutMe").style.backgroundColor = "white"
            darkDurum = 0;
        }
        }


        // Script to open and close sidebar
        function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
}
      </script>
</body>
</html>