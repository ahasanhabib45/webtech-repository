<!DOCTYPE html>
<html lang="en" dir="ltr"> 
<head> <style > </style> 
<meta charset="utf-8"> 
<title>
</title>
 </head>
 <body> 
 <?php $name=$password="";
 $nameErr=$passwordErr="";
 if($_SERVER["REQUEST_METHOD"] == "POST") 
 { if (empty($_POST["name"]))
	 { $nameErr = "Name is required"; 
 } else { $name = test_input($_POST["name"]);
 if(empty($_POST["password"]))
	 { $passwordErr = "Password is required";

 }
 else { if(substr_count($password,"@")<1 || substr_count($password,"#")<1 || substr_count($password,"%")<1 || substr_count($password,"$")<1)

 { $passwordErr="Password must contain at least one of the special characters (@, #, $,%)";
 
			}
		}
	}
}
 function test_input($data) 
 { $data = trim($data);
 $data = stripslashes($data); 
 $data = htmlspecialchars($data); 
 return $data; } ?>
 <p>
<fieldset style=" width: 500px;">
 <legend><p><h3>Login</h3></p></legend>
 <form>
 User Name: <input type="text" name="name" value="<?php echo $name;?>">

 <span class="error">* <?php echo $nameErr;?></span> 
 <br><br> 
 Password: <input type="text" name="password" value="<?php echo $password;?>"> 
 
 <span class="error">* <?php echo $passwordErr;?>
 </span>
 <br><br>
 <br> 
 <input type="checkbox" name="remember" value="remembered">
 <label for="remember">Remember Me</label> 
 <br><br> 
 <input type="submit" name="submit" value="Submit"> 
 <span style="color:blue">
 <u>Forget Password?</u>
</span>
</fieldset>
 </form> 
 </fieldset> 
 </body>
 </html>
