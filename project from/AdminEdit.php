<?php
$username="";
$err_username="";
$password="";
$err_password="";

$hasError = false;

if(isset($_POST["submit"])){
   if(empty($_POST["username"])){
		  $hasError=true;
		  $err_username="Userame required";
	  }
	 /*else if($username =="admin"){
		  $hasError=true;
		  $err_username="Userame wrong";
	  }*/
	  else
	  {
		 $username= $_POST["username"];
	  }
	  if(empty($_POST["password"])){
		  $hasError=true;
		  $err_password="Password required";
	  }
	  /*else if(strcmp($_POST["password"]==="12345")){
		  $hasError=true;
		  $err_password="Password wrong";
	  }*/
	  else
	  {
		 $password= $_POST["password"];
	  }
	  
	  
	  /*if(!$hasError){
			echo "<h1>Submitted</h1>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
			}*/
		
		//header("Location: index.php");
	

    }


?>


<html>
<body>
<h1 align="middle">Edit</h1>

<form action="admin.php" method="post">
<fieldset>
<p align="middle">
<table>
<tr>
   <td>Username</td>
   <td><input type="text" name="username">
   </td>
   <td><span><?php echo $err_username;?> </span></td>
</tr>
<tr>
   <td>Password</td>
   <td><input type="password" name="password">
   </td>
   <td><span><?php echo $err_password;?> </span></td>
</tr>
<tr>
   <td colspan="2" align="middle"><input type="submit" name="submit" value="Update"/>
</td>
</tr>
</table>
</p>
</fieldset>
</form>
</body>
</html>