<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="register.css">

	<title>
		Registeration Page in PHP
	</title>
</head>
<body>

	<div class="container">
		<h1> Registeration </h1>

		<form action="reg-process.php" method="post">
			

			<table>
				
				<tr>
					<td style="color:#fff;">USERNAME</td>

					<td><input type="text" name="user" style="width: 350px; padding: 12px 20px; margin: 8px 0;"></td>
				</tr>

				<tr>
					<td style="color:#fff;">Email ID</td>
					<td><input type="email" name="email" style="width: 350px; padding: 12px 20px; margin: 8px 0;"></td>
				</tr>

				<tr>
					<td style="color:#fff;">Mobile No</td>
					<td><input type="text" name="no" style="width: 350px; padding: 12px 20px; margin: 8px 0;"></td>
				</tr>

				<tr>
					<td style="color:#fff;">Gender</td>
					<td style="color:#fff;"><input type="radio" name="gender" value="male">Male
						<input type="radio" name="gender" value="female" >Female</td>
				</tr>

				<tr>
					<td style="color:#fff;">Password</td>
					<td><input type="password" name="pw" style="width: 350px; padding: 12px 20px; margin: 8px 0;"></td>
				</tr>

				<tr>
					<td style="color:#fff;">Confirm Password</td>
					<td><input type="password" name="cpw" style="width: 350px; padding: 12px 20px; margin: 8px 0;"></td>
				</tr>

				<tr>
					<td>
						<td>
							<input type="submit" name="s" value="SUBMIT" style="margin-bottom: 20px;">
						</td>
					</td>
				</tr>

				<tr>
					<td><td>
						<a class="log" href="index.php"> Login Here </a>
					</td></td>
				</tr>

			</table>


		</form>
	</div>


	<div class="square">
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>

	<div class="circle">
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</body>
</html>