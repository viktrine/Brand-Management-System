<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add BA | TL Status</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                        <div class="controls">
                          <input class="input focused" name="status" id="focusedInput" type="text" placeholder = "BA | TL Status" required>
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



$query = mysql_query("select * from ba_tl_status where status = '$status'")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Status Already Exist');
</script>
<?php
}else{
mysql_query("insert into ba_tl_status(status) values('$status')")or die(mysql_error());
?>
<script>
window.location = "ba_tl_status.php";
</script>
<?php
}
}
?>