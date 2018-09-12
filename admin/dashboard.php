<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid"> 
            <div class="row-fluid">
					<?php include('sidebar_dashboard.php'); ?>
                <!--/span-->
                <div class="span9" id="content">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Data Numbers</div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
						
									<?php 
								$query_reg_tl = mysql_query("select * from tl_users")or die(mysql_error());
								$count_reg_tls= mysql_num_rows($query_reg_tl);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_tls; ?>"><?php echo $count_reg_tls; ?></div>
                                    <div class="chart-bottom-heading"><strong>Registered TLs</strong>

                                    </div>
                                </div>
								
								<?php 
								$query_bas = mysql_query("select * from ba_users")or die(mysql_error());
								$count_bas = mysql_num_rows($query_bas);
								?>
								
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_bas; ?>"><?php echo $count_bas ?></div>
                                    <div class="chart-bottom-heading"><strong>Registered BAs</strong>

                                    </div>
                                </div>
								
								<?php 
								$query_projects = mysql_query("select * from projects")or die(mysql_error());
								$count_projects = mysql_num_rows($query_projects);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_projects ?>"><?php echo $count_projects ?></div>
                                    <div class="chart-bottom-heading"><strong>Registered Projects</strong>

                                    </div>
                                </div>
								
								
										<?php 
								$query_assigned_projects = mysql_query("select * from ba_assigned_projects")or die(mysql_error());
								$count_assigned_projects = mysql_num_rows($query_assigned_projects);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_assigned_projects ?>"><?php echo $count_assigned_projects ?></div>
                                    <div class="chart-bottom-heading"><strong>Assigned Projects</strong>

                                    </div>
                                </div>
								
                            </div>
                        </div>
                        <!-- /block -->
						
                    </div>
                    </div>
                
                </div>
            </div>
    
         <?php include('footer.php'); ?>
        </div>
	<?php include('script.php'); ?>
    </body>

</html>