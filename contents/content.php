<?php 

include 'header.php';
include '../production/admin/netting/connect.php'; 

$searchpost=$db->prepare("SELECT * FROM posts where post_id=:id");
$searchpost->execute(array(
	'id' => $_GET['post_id']
));

$getpost=$searchpost->fetch(PDO::FETCH_ASSOC);


$content_posts = explode(",",$getpost['post_other_posts']);

$searchfirstpost=$db->prepare("SELECT * FROM posts where post_id=:id");
$searchfirstpost->execute(array(
	'id' => $content_posts[0]
));
$getfirstpost = $searchfirstpost->fetch(PDO::FETCH_ASSOC);
$searchsecondpost=$db->prepare("SELECT * FROM posts where post_id=:id");
$searchsecondpost->execute(array(
	'id' => $content_posts[1]
));
$getsecondpost = $searchsecondpost->fetch(PDO::FETCH_ASSOC);
$searchthirdpost=$db->prepare("SELECT * FROM posts where post_id=:id");
$searchthirdpost->execute(array(
	'id' => $content_posts[2]
));
$getthirdpost = $searchthirdpost->fetch(PDO::FETCH_ASSOC);






$searchcomments=$db->prepare("SELECT * FROM comments where comment_post_id=:id order by comment_id DESC");
$searchcomments->execute(array(
	'id' => $_GET['post_id']
));





?>

	<div class="slider" style="height:400px; width:100%; background-image: url(../production/admin/images/<?php echo $getpost['post_main_image'] ?>); background-size: cover;">
		<!-- <style>
			.slider{ height: 400px; width: 100%; background-image: url(../../images/<?php  ?>); background-size: cover; }  

		</style> -->
	</div><!-- slider -->

	<section class="post-area">
		<div class="container">

			<div class="row">

				<div class="col-lg-1 col-md-0"></div>
				<div class="col-lg-10 col-md-12">

					<div id="blog-post" class="main-post">
					<style>
                            #blog-post{
                                border-radius:15px;
                            }
                        </style>
						<div class="post-top-area">

							<h5 class="pre-title"><?php echo $getpost['post_topic']; ?></h5>

							<h3 class="title"><a href="content.php?post_id=<?php echo $getpost['post_id']; ?>"><b><?php echo $getpost['post_title']; ?></b></a></h3>

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="../css-js/images/<?php echo $getprofile['profile_photo']; ?>" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b><?php echo $getpost['post_author']; ?></b></a>
									<h6 class="date"> on <?php echo $getpost['post_date']; ?></h6>
								</div>

							</div><!-- post-info -->

							<div class="para">
								<?php echo $getpost['post_text']; ?>
							</div>
							
							<!-- <div class="post-image"><img src="../css-js/images/blog-1-1000x600.jpg" alt="Blog Image"></div> -->

							

							

							<div class="post-icons-area">
								<ul class="post-icons">
									
								</ul>

								<ul class="icons">
									<li>SHARE : </li>
									<li><a href="https://www.facebook.com/"><i class="ion-social-facebook"></i></a></li>
									<li><a href="https://twitter.com/"><i class="ion-social-twitter"></i></a></li>
									<li><a href="https://www.whatsapp.com/"><i class="ion-social-whatsapp"></i></a></li>
									<li><a href="https://plus.google.com/"><i class="ion-social-googleplus"></i></a></li>
									<li><a href="https://www.linkedin.com/"><i class="ion-social-linkedin"></i></a></li>
								</ul>
							</div>

							<div class="post-footer post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="../css-js/images/<?php echo $getprofile['profile_photo']; ?>" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="../about.php"><b><?php echo $getpost['post_author']; ?></b></a>
									<h6 class="date"> on <?php echo $getpost['post_date']; ?></h6>
								</div>

							</div><!-- post-info -->

						</div><!-- post-bottom-area -->

					</div><!-- main-post -->
				</div><!-- col-lg-8 col-md-12 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- post-area -->


	<section style="background-color:black;" class="recomended-area section">
		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div id="blog-post" class="single-post post-style-1">
							<style>
								#blog-post{
									border-radius:15px;
								}
							</style>
							<div class="blog-image"><img src="../production/admin/images/<?php echo $getfirstpost['post_mini_image']; ?>" alt="Blog Image"></div>

							<div class="blog-info">

								<h4 class="title"><a href="content.php?post_id=<?php echo $getfirstpost['post_id']; ?>"><b><?php echo $getfirstpost['post_title']; ?></b></a></h4>

								<div class="middle-area">
									<a class="name" href="../about.php"><b><?php echo $getpost['post_author']; ?></b></a>
									<h6 class="date"> on <?php echo $getpost['post_date']; ?></h6>
								</div>

							</div><!-- blog-info -->
						</div><!-- single-post -->
					</div><!-- card -->
				</div><!-- col-md-6 col-sm-12 -->
				<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div id="blog-post" class="single-post post-style-1">
							<style>
								#blog-post{
									border-radius:15px;
								}
							</style>
							<div class="blog-image"><img src="../production/admin/images/<?php echo $getsecondpost['post_mini_image']; ?>" alt="Blog Image"></div>

							<div class="blog-info">

								<h4 class="title"><a href="content.php?post_id=<?php echo $getsecondpost['post_id']; ?>"><b><?php echo $getsecondpost['post_title']; ?></b></a></h4>

								<div class="middle-area">
									<a class="name" href="../about.php"><b><?php echo $getpost['post_author']; ?></b></a>
									<h6 class="date"> on <?php echo $getpost['post_date']; ?></h6>
								</div>

							</div><!-- blog-info -->
						</div><!-- single-post -->
					</div><!-- card -->
				</div><!-- col-md-6 col-sm-12 -->
				<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div id="blog-post" class="single-post post-style-1">
							<style>
								#blog-post{
									border-radius:15px;
								}
							</style>
							<div class="blog-image"><img src="../production/admin/images/<?php echo $getthirdpost['post_mini_image']; ?>" alt="Blog Image"></div>

							<div class="blog-info">

								<h4 class="title"><a href="content.php?post_id=<?php echo $getthirdpost['post_id']; ?>"><b><?php echo $getthirdpost['post_title']; ?></b></a></h4>

								<div class="middle-area">
									<a class="name" href="../about.php"><b><?php echo $getpost['post_author']; ?></b></a>
									<h6 class="date"> on <?php echo $getpost['post_date']; ?></h6>
								</div>

							</div><!-- blog-info -->
						</div><!-- single-post -->
					</div><!-- card -->
				</div><!-- col-md-6 col-sm-12 -->
				

			</div><!-- row -->

		</div><!-- container -->
	</section>

	<section class="comment-section center-text">
		<div class="container">
			<h4><b>POST COMMENT</b></h4>
			<div class="row">

				<div class="col-lg-2 col-md-0"></div>

				<div class="col-lg-8 col-md-12">
					<div id="blog-post" class="comment-form">
					<style>
                            #blog-post{
                                border-radius:15px;
                            }
                        </style>
						<form action="../production/admin/netting/process.php?post_id=<?php echo $getpost['post_id']; ?>" method="post">
							<div class="row">

								<div class="col-sm-6">
									<input type="text" aria-required="true" name="comment_name" class="form-control"
										placeholder="Enter your name" aria-invalid="true" required >
								</div><!-- col-sm-6 -->

								<div class="col-sm-6">
									<input type="email" aria-required="true" name="comment_mail" class="form-control"
										placeholder="Enter your email" aria-invalid="true" required>
								</div><!-- col-sm-6 -->

								

								<div class="col-sm-12">
									<textarea name="comment_comment" maxlength="200" rows="2" class="text-area-messge form-control"
										placeholder="Enter your comment" aria-required="true" aria-invalid="false"></textarea >
								</div><!-- col-sm-12 -->
								<div class="col-sm-12">
									<button id="blog-post-button" name="sendComment" class="submit-btn" type="submit" id="form-submit"><b>POST COMMENT</b></button>
									<style>
										#blog-post-button{
											border-radius:5px;
										}
									</style>
								</div><!-- col-sm-12 -->

							</div><!-- row -->
						</form>
					</div><!-- comment-form -->

					

					<?php while ($getcomments=$searchcomments->fetch(PDO::FETCH_ASSOC)) { ?>
						
						<div class="commnets-area text-left">
	
							<div class="comment">
	
								<div class="post-info">
	
									<div class="left-area">
										<a class="avatar" href="#"><img src="../production/admin/images/<?php echo $getcomments['comment_image'] ?>" alt="Profile Image"></a>
									</div>
	
									<div class="middle-area">
										<a class="name" href="#<?php $getcomments['comment_name'] ?>"><b><?php echo $getcomments['comment_name'] ?></b></a>
										<h6 class="date"><?php echo $getcomments['comment_date'] ?></h6>
									</div>
	
	
								</div><!-- post-info -->
	
								<p><?php echo $getcomments['comment_comment']; ?></p>
	
							</div>
	
						</div><!-- commnets-area -->
						<?php
						

							$getpost['post_comment'] = $getpost['post_comment'] + 1;
							
								
						
						?>
					<?php } ?>

				</div><!-- col-lg-8 col-md-12 -->

			</div><!-- row -->

		</div><!-- container -->
	</section>

	<?php
	
	
	
	include 'footer.php'; ?>