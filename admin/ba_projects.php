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
                                <div class="muted pull-left">Project Assignments</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form action="delete_ba_project_assignment.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#subject_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
										  		<th></th>
												<th nowrap="true">BA E-mail</th>
												<th nowrap="true">Project Name</th>
												<th></th>
										   </tr>
										</thead>
										<tbody>
											
												<?php
											$subject_query = mysql_query("select * from ba_assigned_projects")or die(mysql_error());
											while($row = mysql_fetch_array($subject_query)){
											$id = $row['id'];
											?>
										
											<tr>
													<td width="30">
													<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
													</td>
													<td><?php echo $row['ba_email']; ?></td>
													<td><?php echo $row['project_name']; ?></td>
													
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