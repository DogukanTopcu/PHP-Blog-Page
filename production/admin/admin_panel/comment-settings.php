<?php 

include 'header.php'; 

$searchcomment=$db->prepare("SELECT * FROM comments order by comment_id DESC");
$searchcomment->execute();


?>



<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
				<div class="x_panel">
					<div class="x_title">
						<h2>Posts <small>
                        
                            <?php
                            
                                if ($_GET['delete']=="ok") { ?>

                                    <b style="color:red;">Deleted</b>    
                            
                            <?php } elseif ($_GET['delete']=="no") { ?>

                                    <b style="color:yellow;">Not Deleted</b>

                            <?php 
                            } ?>
                        
                        </small></h2>
						
                        <div class="clearfix"></div>
                        
                       

					</div>
					<div class="x_content">
						<br />

                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Number</th>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Post Id</th>
                                    <th>Comment</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php 
                                $say=0;
                                while ($getcomment=$searchcomment->fetch(PDO::FETCH_ASSOC)) { 
                                    $say++;?>
                                   
                                    <tr>
                                        <td width="20"><?php echo $say; ?></td>
                                        <td><?php echo $getcomment['comment_id']; ?></td>
                                        <td><?php echo $getcomment['comment_name']; ?></td>
                                        <td><?php echo $getcomment['comment_date']; ?></td>
                                        <td><?php echo $getcomment['comment_post_id']; ?></td>
                                        <td><?php echo $getcomment['comment_comment']; ?></td>
                                        
                                        <td width="10"><center><a href="../netting/process.php?comment_id=<?php echo $getcomment['comment_id']; ?>&comment_delete=ok"><button class="btn btn-danger btn-xs">Delete</button></a></center></td>
                                    </tr>
                                <?php } ?> 
                            </tbody>
                        </table>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
						
					
					
								
					
<?php include 'footer.php'; ?>