<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Gender Entry</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                        <div class="controls">
                          <input class="input focused" name="gender" id="focusedInput" type="text" placeholder = "gender" required>
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
$gender = $_POST['gender'];



$query = mysql_query("select * from gender where gender = '$gender'")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Gender Already Saved');
</script>
<?php
}else{
mysql_query("insert into gender(gender) values('$gender')")or die(mysql_error());
?>
<script>
window.location = "gender_entry.php";
</script>
<?php
}
}
?>