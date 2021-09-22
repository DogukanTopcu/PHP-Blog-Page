<?php

    include 'header.php';
    include '../netting/connect.php';

    $searchsocial=$db->prepare("SELECT * FROM social where social_id=:id");
    $searchsocial->execute(array(
        'id' => 1
    ));
            
    $getsocial=$searchsocial->fetch(PDO::FETCH_ASSOC);

?>
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					
                    <div class="clearfix"></div>
                    

					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Social <small>
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
                                    
                                    <?php
                                        #$time = explode(" ",$getpost['post_date']);
                                    ?>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Social Name</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea type="text" id="first-name" required="required" name="social_name" class="form-control col-xs-12"><?php echo $getsocial['social_name']; ?></textarea>
											</div>
										</div>
										
                                        
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Social Link</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea type="text" id="first-name" required="required" name="social_link" class="form-control col-xs-12"><?php echo $getsocial['social_link']; ?></textarea>
											</div>
										</div>
                                        

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Social Link Icon</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea type="text" id="first-name" required="required" name="social_link_icon" class="form-control col-xs-12"><?php echo $getsocial['social_link_icon']; ?></textarea>
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Social Number</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getsocial['social_number']; ?>" name="social_number" class="form-control col-xs-12">
											</div>
										</div>
                                    

                                        <input type="hidden" name="social_id" value="<?php echo $getsocial['social_id']; ?>">
										
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" name="editSocial" class="btn btn-success">Update</button>
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

