<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Project Status</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                        <div class="controls">
                          <input class="input focused" name="status" id="focusedInput" type="text" placeholder = "Project Status" required>
                        </div>
                      </div>
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

                                          </div>
                                        </div>  
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					<?php
if (isset($_POST['save'])){
$status = $_POST['status'];



$query = mysql_query("select * from project_status where project_status = '$status'")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Project Status Already Exist');
</script>
<?php
}else{
mysql_query("insert into project_status(project_status) values('$status')")or die(mysql_error());
?>
<script>
window.location = "project_status.php";
</script>
<?php
}
}
?>