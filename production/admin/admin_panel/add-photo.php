<?php include 'header.php'; ?>

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Add Photo or GIF <small></small></h2>
									
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
                                    <br />
                                    <form action="upload.php" method="POST" enctype="multipart/form-data">
                                        <h3>Select image to upload: </h3> 
                                        <input type="file" name="file">
                                        <button type="submit" name="submit">Upload</button>
                                    </form>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

							
						

						


									
						
			<?php include 'footer.php'; ?>