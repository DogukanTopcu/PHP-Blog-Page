<?php 

include 'header.php'; 


$searchpost=$db->prepare("SELECT * FROM posts where post_id=:id");
$searchpost->execute(array(
    'id' => $_GET['post_id']
));

$getpost=$searchpost->fetch(PDO::FETCH_ASSOC);






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
                                        $time = explode(" ",$getpost['post_date']);
                                    ?>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Date of Registration</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="date" id="first-name" required="required" disabled="" value="<?php echo $time[0]; ?>" name="post_date" class="form-control col-xs-12">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Topic</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getpost['post_topic']; ?>" name="post_topic" class="form-control col-xs-12">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getpost['post_title']; ?>" name="post_title" class="form-control col-xs-12">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Author</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getpost['post_author']; ?>" name="post_author" class="form-control col-xs-12">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Mini Picture</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getpost['post_mini_image']; ?>" name="post_mini_image" class="form-control col-xs-12">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Main Picture</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getpost['post_main_image']; ?>" name="post_main_image" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Other Posts</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" placeholder="3 post id with ',' example: '11,4,5' " required="required" value="<?php echo $getpost['post_other_posts']; ?>" name="post_other_posts" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Content</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea  id="editor1" class="ckeditor" name="post_text" required="required"><?php echo $getpost['post_text']; ?></textarea>
											
												
												
												
												
												
												
												
												
												
												
												
												
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
										
										
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Post Status</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select name="post_status" id="heard" class="form-control" required>
                                                    <option value="1" <?php echo $getpost['post_status']=='1' ? 'selected=""' : '' ?>>Active</option>
                                                    <option value="0" <?php echo $getpost['post_status']=='0' ? 'selected=""' : '' ?>>Passive</option>
                                                </select>
                                            </div>
                                        </div>

                                        <input type="hidden" name="post_id" value="<?php echo $getpost['post_id']; ?>">
										
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" name="editPost" class="btn btn-success">Update</button>
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