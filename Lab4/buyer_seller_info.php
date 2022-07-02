<?php
session_start();
if(isset($_COOKIE['role']))
 $role =  $_COOKIE['role'];
if($role != 'manager'){

    header('location: dashboard.php');

}

if(file_exists('data.json'))
{
	$filename = 'data.json';
	$data = file_get_contents($filename); //data read from json file
	// print_r($data);
	$users = json_decode($data);  //decode a data

	// print_r($users); //array format data printing
	 $message = "<h3 class='text-success'>Showing Buyer & Seller information</h3>";
}else{
	 $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <style>
#tbstyle {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#tbstyle td, #tbstyle th {
  border: 1px solid 
#ddd;
  padding: 8px;
}

#tbstyle tr:nth-child(even){background-color: 
#f2f2f2;}

#tbstyle tr:hover {background-color: 
#ddd;}

#tbstyle th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: 
#859161;
  color: 
White;
}
</style>
</head>
<body>


<?php 
    include('includes/authenticated_header.php');




?>



<center>

<div class="container" style="width:500px; border: 1px solid black; margin: 100px; padding:50px 0px;">
	   <div class="table-container">
	   <?php
			 if(isset($message))
			 {
				  echo $message;

			 ?>
		<table id="tbstyle">
			<tbody>
				<tr>
					<th style="padding: 5px 20px;">Name</th>
					<th style="padding: 5px 20px;">Email</th>
					<th style="padding: 5px 20px;">Gender</th>
				
				</tr>
				<?php foreach ($users as $user) { ?>
				<tr>
					<td > <?= $user->name; ?> </td>
					<td> <?= $user->email; ?> </td>
					<td> <?= $user->gender; ?> </td>
				
				</tr>
				<?php }
			 }
			 else
				echo $message;
			 ?>
    </tbody>
</table>
</div>
</div>

            </center>


<?php 
    include('includes/footer.php')
?>




    
</body>
</html>
