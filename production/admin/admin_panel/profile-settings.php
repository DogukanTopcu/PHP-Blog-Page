<?php 

include 'header.php'; 


$searchprofile=$db->prepare("SELECT * FROM profile where profile_id=:id");
$searchprofile->execute(array(
    'id' => 1
));

$getprofile=$searchprofile->fetch(PDO::FETCH_ASSOC);






?>

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					
                    <div class="clearfix"></div>
                    

					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Post Edit <small>
                                    <?php
                            
                                        if ($_GET['status']=="ok") { ?>

                                            <b style="color:green;">Successful</b>    
                                    
                                    <?php } elseif ($_GET['status']=="no") { ?>

                                            <b style="color:red;">Unsuccesful</b>

                                    <?php } else {
                                        echo "...";
                                    } ?>
                                    </small></h2>
									
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
                                    <form action="../netting/process.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Profile Photo</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getprofile['profile_photo']; ?>" name="profile_photo" class="form-control col-xs-12">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Background Image</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getprofile['profile_bgimage']; ?>" name="profile_bgimage" class="form-control col-xs-12">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Background Color</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getprofile['profile_bgcolor']; ?>" name="profile_bgcolor" class="form-control col-xs-12">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Color</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getprofile['profile_color']; ?>" name="profile_color" class="form-control col-xs-12">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getprofile['profile_name']; ?>" name="profile_name" class="form-control col-xs-12">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Favicon</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getprofile['profile_favicon']; ?>" name="profile_favicon" class="form-control col-xs-12">
											</div>
										</div>
										
										
										

                                        <input type="hidden" name="post_id" value="<?php echo $getpost['post_id']; ?>">
										
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" name="updateProfile" class="btn btn-success">Update</button>
                                            </div>
                                        </div>
                                        

                                    </form>
                                    
								</div>
							</div>
                                    <br><br><br><br><br>
						</div>
					</div>
				</div>
			</div>

							
						

						


									
						
			<?php include 'footer.php'; ?>