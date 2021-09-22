<?php 

include 'header.php'; 

$searchpost=$db->prepare("SELECT * FROM posts order by post_id DESC");
$searchpost->execute();


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
                        
                        <div align="right">
                            <a href="add-content.php"><button class="btn btn-success btn-xs"> Add New Post </button></a>
                        </div>

					</div>
					<div class="x_content">
						<br />

                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Number</th>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Topic</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php 
                                $say=0;
                                while ($getpost=$searchpost->fetch(PDO::FETCH_ASSOC)) { 
                                    $say++;?>
                                   
                                    <tr>
                                        <td width="20"><?php echo $say; ?></td>
                                        <td><?php echo $getpost['post_id']; ?></td>
                                        <td><?php echo $getpost['post_title']; ?></td>
                                        <td><?php echo $getpost['post_date']; ?></td>
                                        <td><?php echo $getpost['post_topic']; ?></td>
                                        <td><center><a href="post-edit.php?post_id=<?php echo $getpost['post_id']; ?>"><button class="btn btn-primary btn-xs">Edit</button></a></center></td>
                                        <td><?php
                                        
                                            if ($getpost['post_status']==1) { ?>
                                                <center><button class="btn btn-success btn-xs">Active</button></center>                                                
                                        <?php } else { ?>
                                                <center><button class="btn btn-warning btn-xs">Passive</button></center>
                                        <?php }
                                        ?></td>
                                        <td width="10"><center><a href="../netting/process.php?post_id=<?php echo $getpost['post_id']; ?>&post_delete=ok"><button class="btn btn-danger btn-xs">Delete</button></a></center></td>
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