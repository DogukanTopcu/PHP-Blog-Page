<?php

    include 'header.php';
    include '../netting/connect.php';

    $searchcontact=$db->prepare("SELECT * FROM contact where contact_id=:id");
    $searchcontact->execute(array(
        'id' => 1
    ));
            
    $getcontact=$searchcontact->fetch(PDO::FETCH_ASSOC);

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
                                    
                                    <?php
                                        #$time = explode(" ",$getpost['post_date']);
                                    ?>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getcontact['contact_mail']; ?>" name="contact_mail" class="form-control col-xs-12">
											</div>
										</div>
										
                                        
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Contact Mesage by Writer</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea  id="editor1" class="ckeditor" name="contact_text" required="required"><?php echo $getcontact['contact_text']; ?></textarea>
											
												
												
												
												
												
												
												 
												
												
												
												
												
												<!-- <div id="sample">
													<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
                                                    //<![CDATA[
														bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
														//]]>
                                                    </script>
                                                    
                                                    <textarea name="area2" style="width: 100%;">
                                                        Write anything...
                                                    </textarea><br />
                                                    
                                                </div> -->
											 </div>
										</div>
										<script >
										
											CKEDITOR.replace( 'editor1',
												{
													filebrowserBrowseUrl : '/ckfinder/ckfinder.html',
													filebrowserImageBrowseUrl : '/ckfinder/ckfinder.html?type=Images',
													filebrowserFlashBrowseUrl : '/ckfinder/ckfinder.html?type=Flash',
													filebrowserUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
													filebrowserImageUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
													filebrowserFlashUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
												});
												var editor = CKEDITOR.replace( 'editor1' );
												CKFinder.setupCKEditor( editor, '/ck/ckfinder/config.php' );
										
										
										</script>

                                    

                                        <input type="hidden" name="contact_id" value="<?php echo $getcontact['contact_id']; ?>">
										
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" name="editContact" class="btn btn-success">Update</button>
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

