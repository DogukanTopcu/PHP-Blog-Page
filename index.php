<?php include 'header.php'; 



if (isset($_POST['loadMore'])) {
    $searchpost=$db->prepare("SELECT * FROM posts where post_status=:statu order by post_id DESC");
    $searchpost->execute(array(
        'statu' => 1
    ));
?>
   <style>
        .load-more-btn {
            display:none;
        }
   </style> 
    
<?php

} else {
    $searchpost=$db->prepare("SELECT * FROM posts where post_status=:statu order by post_id DESC limit 4");
    $searchpost->execute(array(
        'statu' => 1
    ));    
?>

    <style>
        .load-more-btn {
            border:none;
        }
   </style> 

<?php }

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
        
        while ($getpost=$searchpost->fetch(PDO::FETCH_ASSOC)) {?>
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
                            <div style="text-align:left; color:grey;" class="title"><a href="category-post.php?categori=<?php echo $getpost['post_topic']; ?>"><?php echo $getpost['post_topic']; ?></a></div>
                            <h4 class="title"><a href="contents/content.php?post_id=<?php echo $getpost['post_id']; ?>"><b><?php echo $getpost['post_title']; ?></b></a></h4>
                            
                            <div class="middle-area">
								<a class="name" href="about.php"><b><?php echo $getpost['post_author']; ?></b></a>
								<h6 class="date"> on <?php echo $getpost['post_date']; ?></h6>
							</div>
                            
                            <!-- <ul class="post-footer" >
                                    <li><a href="#"><i class="ion-heart"></i><?php echo $getpost['post_like']; ?></a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i><?php echo $getpost['post_comment']; ?></a></li>
                                    <li><a href="#"><i class="ion-eye"></i><?php echo $getpost['post_view']; ?></a></li>
                                </ul> -->
                        </div> 
                                
                    </div> 
                </div> 
            </div> 
        
        
        
        <?php } ?>
        
        
   <!--     <div class="col-lg-3 col-md-6">
            <div class="card h-100">
                <div class="single-post post-style-1">
                    
                    <div class="blog-image"><img src="css-js/images/marion-michele-330691.jpg" alt="Blog Image"></div>
                    
                    <div class="blog-info">
                        <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most ComplexConcepts in Physics?</b></a></h4>
                            <ul class="post-footer">
                                <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                <li><a href="#"><i class="ion-eye"></i>138</a></li>
                            </ul>
                    </div>
                            
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card h-100">
                <div class="single-post post-style-1">

                    <div class="blog-image"><img src="css-js/images/audrey-jackson-260657.jpg" alt="Blog Image"></div>

                    <div class="blog-info">
                        <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most ComplexConcepts in Physics?</b></a></h4>
                            <ul class="post-footer">
                                <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                <li><a href="#"><i class="ion-eye"></i>138</a></li>
                            </ul>
                    </div>

                </div> 

            </div> 
        </div> 

        <div class="col-lg-3 col-md-6">
            <div class="card h-100">
                <div class="single-post post-style-1">

                    <div class="blog-image"><img src="css-js/images/pexels-photo-370474.jpeg" alt="Blog Image"></div>

                        <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most ComplexConcepts in Physics?</b></a></h4>

                        <ul class="post-footer">
                            <li><a href="#"><i class="ion-heart"></i>57</a></li>
                            <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                            <li><a href="#"><i class="ion-eye"></i>138</a></li>
                        </ul>

                </div> 
            </div> 
        </div> 
                    
        <div class="col-lg-3 col-md-6">
            <div class="card h-100">
                <div class="single-post post-style-1">

                    <div class="blog-image"><img src="css-js/images/marion-michele-330691.jpg" alt="Blog Image"></div>

                        <div class="blog-info">

                            <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most ComplexConcepts in Physics?</b></a></h4>
                            
                            <ul class="post-footer">
                                <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                <li><a href="#"><i class="ion-eye"></i>138</a></li>
                            </ul>

                        </div> 
                </div> 
            </div> 
        </div> 
        
        <div class="col-lg-3 col-md-6">
            <div class="card h-100">
                <div class="single-post post-style-1">

                    <div class="blog-image"><img src="css-js/images/marion-michele-330691.jpg" alt="Blog Image"></div>

                        <div class="blog-info">

                            <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most ComplexConcepts in Physics?</b></a></h4>

                            <ul class="post-footer">
                                <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                <li><a href="#"><i class="ion-eye"></i>138</a></li>
                            </ul>

                        </div> 
                </div> 
            </div> 
        </div> 

        <div class="col-lg-3 col-md-6">
            <div class="card h-100">
                <div class="single-post post-style-1">

                    <div class="blog-image"><img src="css-js/images/audrey-jackson-260657.jpg" alt="Blog Image"></div>

                    <div class="blog-info">
                        <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most ComplexConcepts in Physics?</b></a></h4>

                        <ul class="post-footer">
                            <li><a href="#"><i class="ion-heart"></i>57</a></li>
                            <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                            <li><a href="#"><i class="ion-eye"></i>138</a></li>
                        </ul>
                    </div> 

                </div> 
            </div> 
        </div> 

        <div class="col-lg-3 col-md-6">
            <div class="card h-100">
                <div class="single-post post-style-1">

                    <div class="blog-image"><img src="css-js/images/pexels-photo-370474.jpeg" alt="Blog Image"></div>

                    <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most ComplexConcepts in Physics?</b></a></h4>

                    <ul class="post-footer">
                        <li><a href="#"><i class="ion-heart"></i>57</a></li>
                        <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                        <li><a href="#"><i class="ion-eye"></i>138</a></li>
                    </ul>

                </div> 
            </div> 
        </div> 
                    
        <div class="col-lg-3 col-md-6">
            <div class="card h-100">
                <div class="single-post post-style-1">

                    <div class="blog-image"><img src="css-js/images/marion-michele-330691.jpg" alt="Blog Image"></div>

                    <div class="blog-info">

                        <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most ComplexConcepts in Physics?</b></a></h4>

                        <ul class="post-footer">
                            <li><a href="#"><i class="ion-heart"></i>57</a></li>
                            <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                            <li><a href="#"><i class="ion-eye"></i>138</a></li>
                        </ul>

                    </div> 
                </div> 
            </div> 
        </div> 
        -->
    </div>
    <br>
        <form action="index.php" method="post">
            <button type="submit" name='loadMore' id="blog-post-button" class="load-more-btn"> See All </button>
            <style>
                #blog-post-button{
                    border-radius:5px;  
                }
            </style>
        </form>
    </div>
</section><!-- section -->



<?php include 'footer.php'; ?>