<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?> 
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('admin_sidebar.php'); ?>
		
                <div class="span9" id="content">
                     <div class="row-fluid">
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">TLs</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form action="delete_tl_users.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#subject_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
											    <th></th>
												<th nowrap="true">First Name</th>
												<th nowrap="true">Other Names</th>
												<th nowrap="true">Phone No.</th>
												<th nowrap="true">E-Mail</th>
												<th nowrap="true">Town</th>
												<th nowrap="true">Gender</th>
												<th nowrap="true">Availability</th>
												<th nowrap="true">Work Level</th>
												<th nowrap="true"></th>
										   </tr>
										</thead>
										<tbody>
											
												<?php
											$subject_query = mysql_query("select * from tl_users")or die(mysql_error());
											while($row = mysql_fetch_array($subject_query)){
											$id = $row['id'];
											?>
										
											<tr>
													<td width="30">
													<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
													</td>
													<td><?php echo $row['fname']; ?></td>
													<td><?php echo $row['onames']; ?></td>
													<td><?php echo $row['phone']; ?></td>
													<td><?php echo $row['email']; ?></td>
													<td><?php echo $row['town']; ?></td>
													<td><?php echo $row['gender']; ?></td>
													<td><?php echo $row['availability']; ?></td>
													<td><?php echo $row['work_level']; ?></td>
												
													<td width="30"><a href="edit_tl_user.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
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