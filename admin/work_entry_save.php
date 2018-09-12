<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Individual Work Level</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                        <div class="controls">
                          <input class="input focused" name="work_entry" id="focusedInput" type="text" placeholder = "Work Entry" required>
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
$work_entry = $_POST['work_entry'];



$query = mysql_query("select * from work_entry where work_entry = '$work_entry'")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Work Entry Already Exist');
</script>
<?php
}else{
mysql_query("insert into work_entry(work_entry) values('$work_entry')")or die(mysql_error());
?>
<script>
window.location = "work_entry.php";
</script>
<?php
}
}
?>