<?php

    include 'header.php';
    include '../netting/connect.php';

    $searchabout=$db->prepare("SELECT * FROM about where about_id=:id");
    $searchabout->execute(array(
        'id' => 1
    ));
            
    $getabout=$searchabout->fetch(PDO::FETCH_ASSOC);

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
												<input type="text" id="first-name" required="required" value="<?php echo $getabout['about_name']; ?>" name="about_name" class="form-control col-xs-12">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Age</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getabout['about_age']; ?>" name="about_age" class="form-control col-xs-12">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Birthday</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required"    value="<?php echo $getabout['about_birthday']; ?>" name="about_birthday" class="form-control col-xs-12">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Skills</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea type="text" id="first-name" required="required" name="about_skills" class="form-control col-xs-12"><?php echo $getabout['about_skills']; ?></textarea>
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Skills Percents ( % )</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getabout['about_skills_percents']; ?>" name="about_skills_percents" class="form-control col-xs-12">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Skills Number</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getabout['about_skill_numbers']; ?>" name="about_skill_numbers" class="form-control col-xs-12">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Languages</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea type="text" id="first-name" required="required" name="about_languages" class="form-control col-xs-12"><?php echo $getabout['about_languages']; ?></textarea>
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Languages Percents ( % )</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getabout['about_languages_percents']; ?>" name="about_languages_percents" class="form-control col-xs-12">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Languages Number</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getabout['about_language_numbers']; ?>" name="about_language_numbers" class="form-control col-xs-12">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Primary School</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required"   value="<?php echo $getabout['about_education_primary_school']; ?>" name="about_education_primary_school" class="form-control col-xs-12">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Primary School Date</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required"   value="<?php echo $getabout['about_education_primary_school_date']; ?>" name="about_education_primary_school_date" class="form-control col-xs-12">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Middle School</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required"   value="<?php echo $getabout['about_education_middle_school']; ?>" name="about_education_middle_school" class="form-control col-xs-12">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Middle School Date</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required"   value="<?php echo $getabout['about_education_middle_school_date']; ?>" name="about_education_middle_school_date" class="form-control col-xs-12">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">High School</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required"   value="<?php echo $getabout['about_education_high_school']; ?>" name="about_education_high_school" class="form-control col-xs-12">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">High School Date</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required"   value="<?php echo $getabout['about_education_high_school_date']; ?>" name="about_education_high_school_date" class="form-control col-xs-12">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">University</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required"   value="<?php echo $getabout['about_education_university']; ?>" name="about_education_university" class="form-control col-xs-12">
											</div>
										</div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">About Me</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea  id="editor1" class="ckeditor" name="about_me" required="required"><?php echo $getabout['about_me']; ?></textarea>
											
												
												
												
												
												
												
												 
												
												
												
												
												
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
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">My Works</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea  id="editor1" class="ckeditor" name="about_works" required="required"><?php echo $getabout['about_works']; ?></textarea>
											
												
												
												
												
												
												
												 
												
												
												
												
												
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
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">My Photos</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea type="text" id="first-name" required="required" name="about_photos" class="form-control col-xs-12"><?php echo $getabout['about_photos']; ?></textarea>
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Photos Number</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $getabout['about_photo_numbers']; ?>" name="about_photo_numbers" class="form-control col-xs-12">
											</div>
										</div>

                                        <input type="hidden" name="about_id" value="<?php echo $getabout['about_id']; ?>">
										
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" name="editAbout" class="btn btn-success">Update</button>
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

