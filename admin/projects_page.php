<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('admin_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('projectRegister.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block --> 
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">PROJECTS</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_project.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#user_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr> 
												<th></th>
												<th>Project Name</th>
												<th>Start Date</th>
												<th>End Date</th>
												<th>Assigned To</th>
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysql_query("select * from projects")or die(mysql_error());
													while($row = mysql_fetch_array($user_query)){
													$id = $row['id'];
													?>
									 
												<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												<td><?php echo $row['project_name']; ?></td>
												<td><?php echo $row['start_date']; ?></td>
												<td><?php echo $row['end_date']; ?></td>
												<td><?php echo $row['assign_to']; ?></td>
												<td width="40">
												<a href="edit_project.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
												</td>
		
									
												</tr>
												<?php } ?>
										</tbody>
									</table>
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>