<?php include 'header.php'; ?>

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Articles and Contents...</h3>
						</div>

						
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Content Design <!--<small>different form elements</small>--></h2>
									
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="../netting/process.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

										<?php
										
										 # $time = explode(" ",$getpost['post_date']);
										
										?>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Topic</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" name="post_topic" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" name="post_title" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Author</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" name="post_author" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Mini Picture</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" name="post_mini_image" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Main Picture</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" name="post_main_image" class="form-control ">
											</div>
										</div>
										 <!-- <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Other Posts</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" placeholder="3 post id with ',' example: '11,4,5' " required="required" name="post_other_posts" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Content</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea id="editor1" class="ckeditor" name="post_text" required="required"></textarea> -->
											
												
												
												
												
												
												
												
												
												
												
												 
												
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
											<!-- </div>
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
                                                    <option value="1" >Active</option>
                                                    <option value="0" >Passive</option>
                                                </select>
                                            </div>
										</div> -->
										<br>
										<div><center><b> Diğerlerini Post Edit Bölümünden Doldur... </b></center></div>
										
										<div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" name="addPost" class="btn btn-success">Add</button>
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