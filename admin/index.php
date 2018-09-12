<?php include('header.php'); 
session_start();
date_default_timezone_set("Africa/Nairobi");

if(isset($_SESSION['id'])){?>
<script>
window.location = "dashboard.php";
</script>
<?php
}
else
{
?>
<html>
  <body id="login">
    <div class="container">
    <?php include'../clock.php'  ?>
      <form id="login_form" class="form-signin" method="post">
        <h3 class="form-signin-heading"><i class="icon-lock"></i> Please Login</h3>
        <input type="text" class="input-block-level" id="email" name="email" placeholder="email" required>
        <input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
        <button name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-"></i> Sign in</button>
		
			
		      </form>

				<script>
			jQuery(document).ready(function(){
			jQuery("#login_form").submit(function(e){
					e.preventDefault();
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "login.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Welcome to TL | BA Management System", { header: 'Access Granted' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
						}
						else
						{
						$.jGrowl("Please Check your email and Password", { header: 'Login Failed' });
						}
						}
						
					});
					return false;
				});
			});
			</script>

		

    </div> <!-- /container -->
<?php include('script.php'); ?>
  </body>
</html>
<?php
}

?>
