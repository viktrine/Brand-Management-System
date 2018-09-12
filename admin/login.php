<?php
		include('dbcon.php');
		session_start();
		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = mysql_query("SELECT * FROM users WHERE email='$email' AND password='$password'")or die(mysql_error());
		$count = mysql_num_rows($query);
		$row = mysql_fetch_array($query);

		if ($count > 0){
			$id  = $row['id'];

			mysql_query("insert into user_log(email,user_id) values('$email','$id')")or die(mysql_error());
		

			$_SESSION['id']=$row['id'];
			echo 'true';
		 }
		 else
		 { 
			echo 'false';
		}	
				
		?>