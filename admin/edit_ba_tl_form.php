   <div class="row-fluid">
   <a href="ba_tl_status.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add user</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit TL Details</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysql_query("select * from ba_tl_status where id = '$get_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
								?>
								<form method="post">
										
                    <div class="control-group">
                        <div class="controls">
                          <input class="input focused" value="<?php echo $row['status']; ?>" name="status" id="focusedInput" type="text" placeholder = "BA | TL Status" required>
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


mysql_query("update ba_tl_status set status = '$status' where id = '$get_id' ")or die(mysql_error());

?>
<script>
  window.location = "ba_tl_status.php"; 
</script>
<?php
}
?>