<?php
  
  session_start();

  if(isset($_COOKIE['role']))
 		$role =  $_COOKIE['role'];
		// echo $role;


  if($_COOKIE['status'] == "OK" || $_COOKIE['status'] == "always ok")
  {
	 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<?php 
    include('includes/authenticated_header.php');
?>



<center> 
	<form style="margin: 100px 0px;">
	<table border ='1' cellpadding="0" cellspacing="0" >
    
		<br/>
		<tr>		
			<td>
			<p><b>Account</b></p>
			<hr>
				<ul>
				<li><a href="dashboard.php">Dashboard</a></li>  
				<li><a href="profile.php">View Profile</a></li>                             
				<li><a href="edit_profile.php">Edit Profile</a></li>
				<li><a href="picture.html">Change Profile Picture</a></li>
				<li><a href="change_password.php">Change Password</a></li>


				<?php 
		
				if($role == 'manager'){


						$r_data = '<li><a href="approve_buyer.php">Approve New Buyer Registration</a>
						</li><li><a href="delete_buyer.php">Delete Buyer</a></li>
						<li><a href="transactions.php">Transaction</a></li>
						<li><a href="buyer_seller_info.php">View Buyer & Seller information</a></li>';

						echo $r_data;
				}
					
				?>
			

				
		
				<li>
				  <a href="logout.php">Logout</a>
				</li>
				</ul>
			</td>
			<td>Welcome <?php echo $_COOKIE['uname']; ?> </td>
			</tr>			
          
    </table>
	</form>
  </center>

	<?php 
    include('includes/footer.php')
?>


</body>
</html>
<?php
	 }

  else
  {
    header("location:login.php");
  }

?>

