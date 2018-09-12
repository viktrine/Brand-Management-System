   <div class="row-fluid">
   <a href="gender_entry.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Gender Entry</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Gender Entries</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysql_query("select * from gender where id = '$get_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
								?>
								<form method="post">
										
                    <div class="control-group">
                        <div class="controls">
                          <input class="input focused" value="<?php echo $row['gender']; ?>" name="gender" id="focusedInput" type="text" placeholder = "Gender" required>
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
$gender = $_POST['gender'];


mysql_query("update gender set gender = '$gender' where id = '$get_id' ")or die(mysql_error());

?>
<script>
  window.location = "gender_entry.php"; 
</script>
<?php
}
?>