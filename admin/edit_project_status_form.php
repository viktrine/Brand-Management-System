   <div class="row-fluid">
   <a href="project_status.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> ADD PROJECT STATUS</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Project Status</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysql_query("select * from project_status where id = '$get_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
								?>
								<form method="post">
										
                    <div class="control-group">
                        <div class="controls">
                          <input class="input focused" value="<?php echo $row['project_status']; ?>" name="status" id="focusedInput" type="text" placeholder = "Project Status Status" required>
                        </div>
                      </div>
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
			<?php		
if (isset($_POST['update'])){
$status = $_POST['status'];


mysql_query("update project_status set project_status = '$status' where id = '$get_id' ")or die(mysql_error());

?>
<script>
  window.location = "project_status.php"; 
</script>
<?php
}
?>