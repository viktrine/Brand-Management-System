   <div class="row-fluid">
   <a href="ba_tl_status.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> ADD STATUS</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit User</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysql_query("select * from ba_users where id = '$get_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
								?>
								<form method="post">
						 				<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['fname']; ?>" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
                    
                    <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['onames']; ?>" name="lastname" id="focusedInput" type="text" placeholder = "Other Names" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['phone']; ?>" name="phone" id="focusedInput" type="text" placeholder = "Phone Number" required>
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['idno']; ?>" name="id_no" id="focusedInput" type="text" placeholder = "Id No" required>
                                          </div>
                                        </div>
                    
                                       <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['email']; ?>" name="email" id="focusedInput" type="text" placeholder = "E-mail" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['town']; ?>" name="town" id="focusedInput" type="text" placeholder = "Town" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['gender']; ?>" name="gender" id="focusedInput" type="text" placeholder = "Gender" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['availability']; ?>" name="availability" id="focusedInput" type="text" placeholder = "Availability" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['tl_email']; ?>" name="tlemail" id="focusedInput" type="text" placeholder = "Tl E-mail" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls"> 
                                            <input class="input focused" value="<?php echo $row['work_level']; ?>" name="worklevel" id="focusedInput" type="text" placeholder = "Work Level" required>
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
$phone = $_POST['phone'];
$id_no = $_POST['id_no'];
$email = $_POST['email'];
$town = $_POST['town'];
$gender = $_POST['gender'];
$availability = $_POST['availability'];
$tlemail = $_POST['tlemail'];
$worklevel = $_POST['worklevel'];
$password = $_POST['password'];


mysql_query("update ba_users set fname = '$firstname', onames = '$lastname', phone = '$phone', idno = '$id_no', email = '$email',town = '$town',gender = '$gender',tl_email = '$tlemail',availability = '$availability',work_level = '$worklevel', password = '$password' where id = '$get_id' ")or die(mysql_error());

?>
<script>
  window.location = "baUser.php"; 
</script>
<?php
}
?>