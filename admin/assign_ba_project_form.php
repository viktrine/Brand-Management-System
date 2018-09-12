<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">ASSIGN BA A PROJECT</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
                  <div class="controls"> 
                                            <select name="ba_email" class="" required>
                                              <option disabled selected>BA E-Mail</option>
                                                <?php
                                                $cys_query = mysql_query("select * from ba_users order by email");
                                                while($cys_row = mysql_fetch_array($cys_query)){
                                                
                                                ?>
                                                  <option value="<?php echo $cys_row['email']; ?>"><?php echo $cys_row['email']; ?></option>
                                                <?php } ?>
                                            </select>
                                          </div>

                                             <div class="controls"> 
                                            <select name="project" class="" required>
                                              <option disabled selected>Project</option>
                                                <?php
                                                $cys_query = mysql_query("select * from projects order by project_name");
                                                while($cys_row = mysql_fetch_array($cys_query)){
                                                
                                                ?>
                                                  <option value="<?php echo $cys_row['project_name']; ?>"><?php echo $cys_row['project_name']; ?></option>
                                                <?php } ?>
                                            </select>
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
$ba_email = $_POST['ba_email'];
$project = $_POST['project'];

mysql_query("insert into ba_assigned_projects(ba_email,project_name) values('$ba_email','$project')")or die(mysql_error());
?>
<script>
window.location = "assign_ba_project.php";
</script>
<?php
}
?>