<?php include 'header.php'; 



$searchmessage=$db->prepare("SELECT * FROM messages where messages_id=:id");
$searchmessage->execute(array(
    'id' => $_GET['messages_id']
));

$getmessage=$searchmessage->fetch(PDO::FETCH_ASSOC);






?>

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Sent by <?php echo $getmessage['messages_name']; ?> </h2>
									
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="first-name" required="required" disabled="" placeholder="<?php echo $getmessage['messages_name']; ?>" class="form-control col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Mail</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="first-name" required="required" disabled="" placeholder="<?php echo $getmessage['messages_mail']; ?>" class="form-control col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Age</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="first-name" disabled="" placeholder="<?php echo $getmessage['messages_age']; ?>" class="form-control col-xs-12">
                                            </div>
                                        </div>
			                            	<div class="item form-group">
			                            	    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Message</label>
			                            	    <div class="col-md-6 col-sm-6 ">
			                            		    <textarea type="text" id="first-name" disabled="" placeholder="<?php echo $getmessage['messages_message']; ?>" required="required"  class="form-control col-xs-12"></textarea>
                                              </div>
                                          </div>
                                            <div class="item form-group">
                                                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Phone Number</label>
                                                  <div class="col-md-6 col-sm-6 ">
                                                      <input type="text" id="first-name" disabled="" placeholder="<?php echo $getmessage['messages_phone']; ?>" class="form-control col-xs-12">
                                                  </div>
                                              </div>
                                            <div class="item form-group">
                                                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Social Media Account</label>
                                                  <div class="col-md-6 col-sm-6 ">
                                                      <input type="text" id="first-name" disabled="" placeholder="<?php echo $getmessage['messages_social']; ?>"  class="form-control col-xs-12">
                                                  </div>
                                              </div>
                                            <div class="item form-group">
                                                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Date</label>
                                                  <div class="col-md-6 col-sm-6 ">
                                                      <input type="text" id="first-name" disabled="" placeholder="<?php echo $getmessage['messages_date']; ?>"  class="form-control col-xs-12">
                                                  </div>
                                              </div>

                
										
                
                                    </form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

							
						

						


									
						
			<?php include 'footer.php'; ?>