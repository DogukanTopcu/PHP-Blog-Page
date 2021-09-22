<?php include 'header.php'; 



$searchcategories=$db->prepare("SELECT * FROM categories where categori_id=:id");
$searchcategories->execute(array(
	'id' => 1
));

$getcategories=$searchcategories->fetch(PDO::FETCH_ASSOC);




?>

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Categories <small>
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
										    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Categories</label>
										    <div class="col-md-6 col-sm-6 ">
											    <textarea type="text" id="first-name" required="required" name="categori_names" class="form-control col-xs-12"><?php echo $getcategories['categori_names']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Categories Number</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getcategories['categori_number']; ?>" name="categori_number" class="form-control col-xs-12">
											</div>
                                        </div>

                                        <input type="hidden" name="social_id" value="<?php echo $getcategories['categori_id']; ?>">
										
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" name="editCategories" class="btn btn-success">Update</button>
                                            </div>
                                        </div>
                                    </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

							
						

						


									
						
			<?php include 'footer.php'; ?>