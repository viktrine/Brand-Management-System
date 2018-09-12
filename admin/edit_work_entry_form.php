   <div class="row-fluid">
   <a href="work_entry.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> ADD WORK ENTRY</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Work Entrys</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysql_query("select * from work_entry where id = '$get_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
								?>
								<form method="post">

                      <div class="control-group">
                        <div class="controls">
                          <input class="input focused" value="<?php echo $row['work_entry']; ?>" name="work_entry" id="focusedInput" type="text" placeholder = "Work Entry" required>
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
$work_entry = $_POST['work_entry'];


mysql_query("update work_entry set work_entry = '$work_entry' where id = '$get_id' ")or die(mysql_error());

?>
<script>
  window.location = "work_entry.php"; 
</script>
<?php
}
?>