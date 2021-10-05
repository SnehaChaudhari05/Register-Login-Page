<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
?>
<?php
	error_reporting(E_ALL ^ E_WARNING);
?>
<?php
	error_reporting(E_ALL ^ E_NOTICE);
?>
<?php

	session_start();


	if(isset($_POST['s']))
	{
		$name = $_POST['user'];
		$email = $_POST['email'];
		$no = $_POST['no'];
		$gender = $_POST['gender'];
		$password = $_POST['pw'];
		$conpass = $_POST['cpw'];

		include 'config.php';

		if($name=='' || $email=='' || $no=='' || $gender=='' || $password=='' || $conpass=='')
		{
			?>
			<script>
				alert('PLEASE FILL ALL DETAILS');
        		window.location.href='register.php?success';
       		</script>
       		<?php
		}

		elseif (!preg_match("/^[a-zA-Z ]*$/",$name))
		{
			?>
			<script>
				alert('Only letters and white space allowed in your NAME');
        		window.location.href='register.php?success';
       		</script>
       		<?php
       	}

       	elseif(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email))
		{	
			?>
			<script>
				alert('Please enter Correct Email-Id');
        		window.location.href='register.php?success';
       		</script>
       		<?php
       	}

       	else if(strlen($no)<10) 
		{
			?>
			<script>
				alert('Please enter Correct Mobile No');
        		window.location.href='register.php?success';
			</script>
			<?php
		}			
		

       	elseif($password!=$conpass)
		{
			?>
			<script>
				alert('Password doesn't match);
        		window.location.href='register.php?success';
       		</script>
		<?php
		}

		elseif(strlen($password)<6)
		{
		?>
			<script>
			alert('Password must be minimum of 6 characters or numbers');
        	window.location.href='register.php?success';
       		</script>
		<?php
		}

		else
		{
			$sql = "insert into 
			register(name,email,mobile,gender,password,confirm) 
			values('$name','$email','$no','$gender','$password','$conpass')";

			$res = mysqli_query($conn,$sql);

			if($res)
			{
				?>
				<script>
					alert('YOU ARE SUCCESSFUL');
        			window.location.href='login.php?success';
				</script>
				<?php
			}
			else
			{
				?>
				<script>
					alert('PLEASE TRY AGAIN');
        			window.location.href='register.php?success';
       			</script>
       			<?php
			}
		}
	}
	?>






