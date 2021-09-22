<?php include 'header.php'; 



$searchpost=$db->prepare("SELECT * FROM posts where post_status=:statu order by post_id DESC");
$searchpost->execute(array(
    'statu' => 1
));

?>





<section class="blog-area section">
<style>
	.blog-area {
	background-image: url('production/admin/images/<?php echo $getprofile['profile_bgimage'] ?>');
	background-repeat: no-repeat;
	background-attachment: fixed;  
	background-size: cover;
	}
    </style>
    <div class="container">
    <div class="row">

        <?php
        
        while ($getpost=$searchpost->fetch(PDO::FETCH_ASSOC)) { 
            if ($getpost['post_topic'] === $_GET['categori']) { ?>
                
            
            <div class="col-lg-3 col-md-6">
                <div class="card h-100">
                    <div id="blog-post" class="single-post post-style-1" style="background-color:#ffffff;">
                        <style>
                            #blog-post{
                                border-radius:15px;
                            }
                        </style>
                        <div class="blog-image"><img src="production/admin/images/<?php echo $getpost['post_mini_image']; ?>" alt="Blog Image"></div>
                        
                        <div class="blog-info">
                            <div style="text-align:left; color:grey;" class="title"><a href="#"><?php echo $getpost['post_topic']; ?></a></div>
                            <h4 class="title"><a href="contents/content.php?post_id=<?php echo $getpost['post_id']; ?>"><b><?php echo $getpost['post_title']; ?></b></a></h4>
                            <div class="middle-area">
								<a class="name" href="about.php"><b><?php echo $getpost['post_author']; ?></b></a>
								<h6 class="date"> on <?php echo $getpost['post_date']; ?></h6>
							</div>
                        </div> 
                                
                    </div> 
                </div> 
            </div> 
        <?php } else { ?>
            
        <?php } ?>
        
        
        <?php } ?>
        
  
    </div>
    <br>
        
    </div>
</section><!-- section -->



<?php include 'footer.php'; ?>