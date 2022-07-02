<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>REGISTRATION</title>
</head>
<body>
<?php 
    include('includes/header.php');
?>

	<div style="padding: 100px; width: 500px; margin: 0px auto;">
		<legend><b><center> REGISTRATION </center></b></legend>
		<form action="reg.php" method="POST">
			<br/>
			<table  style="border: none;" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td>Name</td>
					<td>:</td>
					<td><input name="name" type="text" required size="45"
           pattern="[a-zA-z\s{2,20}"></td>
					<td></td>
				</tr>		
				<?php if(isset($_GET['name'])){

					?>
   
	<tr><td></td>
		<td colspan="2"> <p style="color: red; tex-align:center;"> <?php  echo $_GET['name']; ?> </p></td>
		
	</tr>
	<?php
}

	?>

				
				<tr>
					<td>Email</td>
					<td>:</td>
					<td>
						<input name="email" type="email" required>
						<abbr title="hint: sample@example.com"><b>i</b></abbr>
					</td>
					<td></td>
				</tr>		
				
				<tr>
					<td>User Name</td>
					<td>:</td>
					<td><input name="userName" type="text"></td>
					<td></td>
				</tr>		
				
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input name="password" pattern="[0-9a-zA-z#@]{8,20}" required type="password"></td>
					<td></td>
				</tr>		

				<?php if(isset($_GET['password'])){

?>

<tr><td></td>
<td colspan="2"> <p style="color: red; tex-align:center;"> <?php  echo $_GET['password']; ?> </p></td>

</tr>
<?php
}

?>
				
				<tr>
					<td>Confirm Password</td>
					<td>:</td>
					<td><input pattern="[0-9a-zA-z#@]{8,20}" required  name="confirmPassword" type="password"></td>
					<td></td>
				</tr>		
				
				<tr>
					<td colspan="3">
						<fieldset>
							<legend>Gender</legend>    
							<input name="gender" type="radio" value="Male">Male
									<input name="gender" type="radio" value="Female">Female
									<input name="gender" type="radio" value="Other">Other
						</fieldset>
					</td>
					<td></td>
				</tr>		
				
				<tr>
					<td colspan="3">
						<fieldset>
							<legend>Date of Birth</legend>    
							<input type="text" size="2" name="date" />/
							<input type="text" size="2" name ="month" />/
							<input type="text" size="4" name = "year"/>
							<font size="2"><i>(dd/mm/yyyy)</i></font>
						</fieldset>
					</td>
					<td></td>
				</tr>
			</table>
			<hr/>
			<input type="submit" name= "submit" value="Submit">
			<input type="reset">
		</form>
</div>


	<?php 
    include('includes/footer.php')
?>
</body>
</html>
