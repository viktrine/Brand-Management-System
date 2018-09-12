<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add BA</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="lastname" id="focusedInput" type="text" placeholder = "Other Names" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="phone" id="focusedInput" type="text" placeholder = "Phone Number" required>
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="id_no" id="focusedInput" type="text" placeholder = "Id No" required>
                                          </div>
                                        </div>
										
											                 <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="email" id="focusedInput" type="text" placeholder = "E-mail" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="town" id="focusedInput" type="text" placeholder = "Town" required>
                                          </div>
                                        </div>

                                        <div class="controls"> 
                                            <select name="gender" class="" required>
                                              <option disabled selected>Gender</option>
                                                <?php
                                                $cys_query = mysql_query("select * from gender order by gender");
                                                while($cys_row = mysql_fetch_array($cys_query)){
                                                
                                                ?>
                                                  <option value="<?php echo $cys_row['gender']; ?>"><?php echo $cys_row['gender']; ?></option>
                                                <?php } ?>
                                            </select>
                                          </div>

                                          <div class="controls"> 
                                            <select  name="availability" class="" required>
                                              <option disabled selected>Availability</option>
                                                <?php
                                                $cys_query = mysql_query("select * from ba_tl_status order by status");
                                                while($cys_row = mysql_fetch_array($cys_query)){
                                                
                                                ?>
                                                  <option value="<?php echo $cys_row['status']; ?>"><?php echo $cys_row['status']; ?></option>
                                                <?php } ?>
                                            </select>
                                          </div>

                                          <div class="controls"> 
                                            <select  name="tlemail" class="" required>
                                              <option disabled selected>Tl E-mail</option>
                                                <?php
                                                $cys_query = mysql_query("select * from tl_users order by email");
                                                while($cys_row = mysql_fetch_array($cys_query)){
                                                
                                                ?>
                                                  <option value="<?php echo $cys_row['email']; ?>"><?php echo $cys_row['email']; ?></option>
                                                <?php } ?>
                                            </select>
                                          </div>

                                          <div class="controls"> 
                                            <select  name="worklevel" class="" required>
                                              <option disabled selected>Work Level</option>
                                                <?php
                                                $cys_query = mysql_query("select * from work_entry order by work_entry");
                                                while($cys_row = mysql_fetch_array($cys_query)){
                                                
                                                ?>
                                                  <option value="<?php echo $cys_row['work_entry']; ?>"><?php echo $cys_row['work_entry']; ?></option>
                                                <?php } ?>
                                            </select>
                                          </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" type = "password" name="password" id="focusedInput" type="text" placeholder = "Password" required>
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



$query = mysql_query("select * from ba_users where email = '$email' and password = '$password'")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
mysql_query("insert into ba_users(fname,onames,phone,idno,email,town,gender,availability,tl_email,work_level,password) values('$firstname','$lastname','$phone','$id_no','$email','$town','$gender','$availability','$tlemail','$worklevel','$password')")or die(mysql_error());
?>
<script>
window.location = "baUser.php";
</script>
<?php
}
}
?>