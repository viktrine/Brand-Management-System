   <div class="row-fluid">
   <a href="admin_user.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Edit Details</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Admin Details</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysql_query("select * from users where id = '$get_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
								?>
								<form method="post">
										
                    <div class="control-group">
                                          <div class="controls"> 
                                            <input class="input focused" value="<?php echo $row['firstname']; ?>" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
                    
                    <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['lastname']; ?>" name="lastname" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>
                    
                      <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['email']; ?>" name="email" id="focusedInput" type="text" placeholder = "Email" required>
                                          </div>
                                        </div>
                    
                    <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['password']; ?>" name="password" id="focusedInput" type="text" placeholder = "Password" required>
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
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];


mysql_query("update users set firstname = '$firstname', lastname = '$lastname', email = '$email', password = '$password' where id = '$get_id' ")or die(mysql_error());

?>
<script>
  window.location = "admin_user.php"; 
</script>
<?php
}
?>