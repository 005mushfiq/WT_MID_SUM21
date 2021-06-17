<?php
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
    $Cpassword="";
	$err_Cpassword="";
    $email="";
    $err_email="";
    $code="";
    $err_code="";
    $phone="";
    $err_phone="";
    $address="";
    $err_address="";
    $city="";
    $err_city="";
    $state="";
    $err_state="";
    $PZcode="";
    $err_PZcode="";
	$gender="";
	$err_gender="";
	$dating="";
	$err_dating="";
    $Month="";
	$err_Month="";
    $year="";
	$err_year="";
	$hobbies=[];
	$err_hobbies="";
	$bio="";
	$err_bio="";

	$hasError=false;

	$array= array("Jaunary","February","March","April","May","June", "July" ,"August","September","Octobar","November","December");

	function hobbyExist($hobby){
		global $hobbies;
		foreach($hobbies as $h){
			if($h == $hobby) return true;
		}
		return false;
	}


	
	if(isset($_POST["submit"])){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <= 2){
			$hasError = true;
			$err_name="Name must contain >2 character";
		}
		else{
		htmlspecialchars($name = $_POST["name"]);
		}
        if(empty($_POST["username"]))
            {
				$hasError = true;
				$err_username="Username Required";
			}
        else if (strlen($_POST["username"]) <= 5) {
            $hasError=true;
            $err_username="Must be in <5 character";
}
        else if(strpos($_POST["username"]," ")){
        $hasError=true;
        $err_username="Username should not contain space";
}
        else {

	    $username=$_POST["username"];
}

			if(empty($_POST["password"]))
      {
        $hasError=true;
				$err_password="Password Required";
      }
         else if(isset($_POST[""])){
		       echo htmlspecialchars($_POST["pass"]);
		    }
			 else if(strlen($_POST["password"])<8){
        $hasError=true;
				 $err_password="Password Must Be 8 Charachter";
		 }
			 else if(!strpos($_POST["password"],"#")){
         $hasError=true;
			 $err_password="Password should contain special character";
		    }
		 else if(!strpos($_POST["password"],"1")){
         $hasError=true;
			    $err_password="Password should contain Numeric values";
		   }
		   else if(!ctype_upper($_POST["password"])){
          $hasError=true;
			     $err_password="Password should contain UpperCase values";
		    }
		     else if(!ctype_lower($_POST["password"])){
           $hasError=true;
			    $err_password="Password should contain LowerCase values";
		     }
		   else if(strpos($_POST["password"]," ")){
          $hasError=true;
			    $err_password="Password should not contain white space";
		    }
			 else{
				 $password=$_POST["password"];
			 }

if(empty($_POST["Cpassword"]))
{
	$hasError = true;
	$err_Cpassword="Cofirm Password Required";
}
else if($_POST["password"]!=$_POST["Cpassword"])
{
  $hasError = true;
 $err_Cpassword="Password doesn't match";
}
else {

	$Cpassword=$_POST["Cpassword"];
}


if(empty($_POST["code"]))
{
	$hasError = true;
	$err_code="code Required";
}
else if(!is_numeric($_POST["code"]))
{
  $hasError = true;
  $err_code="Invalid Code";

}
else {

	$code=$_POST["code"];
}
if(empty($_POST["phone"]))
{
	$hasError = true;
	$err_phone="Phone Required";
}
else if(!is_numeric($_POST["phone"])){
	$hasError = true;
	$err_phone="Phone Required";
}
else {

	$phone=$_POST["phone"];
}



if(empty($_POST["address"]))
{
	$hasError = true;
	$err_address="Address Required";
}

else {

	$address=$_POST["address"];
}
if(empty($_POST["city"]))
{
	$hasError = true;
	$err_city="City Required";
}

else {

	$city=$_POST["city"];
}
if(empty($_POST["state"]))
{
	$hasError = true;
	$err_state="state Required";
}

else {

	$state=$_POST["state"];
}

if(empty($_POST["PZcode"]))
{
	$hasError = true;
	$err_PZcode="state Required";
}

else {

	$PZcode=$_POST["PZcode"];
}

 if (empty($_POST["email"])) {
  $hasError=true;
  $err_email = "Email is required";   }
 elseif(strpos($_POST["email"],"@.")){
          $hasError=true;
			     $err_email="Email must contain @ and .";
		     }

			 else {
                 $email =$_POST["email"];
             }

		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["hobbies"])){
			$hasError = true;
			$err_hobbies="Checking Required";
		}
		else{
			$hobbies = $_POST["hobbies"];
		}
		if (!isset($_POST["date"])){
			$hasError = true;
			$err_dating="Date Required";
		}
		else{
			$dating = $_POST["date"];
		}
       if (!isset($_POST["Month"])){
         $hasError = true;
         $err_Month="Month Required";
        }
        else{
         $Month = $_POST["Month"];
        }
       if (!isset($_POST["year"])){
        $hasError = true;
        $err_year="year Required";
       }
        else{
        $year = $_POST["year"];
         }

		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else{
			$bio = $_POST["bio"];
		}


		if(!$hasError){

			echo "<h1>Form submitted</h1>";
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
            echo $_POST["Cpassword"]."<br>";
            echo $_POST["email"]."<br>";
            echo $_POST["code"]."<br>";
            echo $_POST["phone"]."<br>";
            echo $_POST["address"]."<br>";
            echo $_POST["city"]."<br>";
            echo $_POST["state"]."<br>";
            echo $_POST["PZcode"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["date"]."<br>";
            echo $_POST["Month"]."<br>";
            echo $_POST["year"]."<br>";
			echo $_POST["bio"]."<br>";
			$arr = $_POST["hobbies"];

			foreach($arr as $e){
				echo "$e<br>";
			}
		}

	}

?>
<html>
	<head></head>
	<body>
		<form action="" method="post">
		<fieldset>
			<table>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name;?>" > </td>
					<td><span> <?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td>Username</td>
					<td>: <input type="text" name="username" value="<?php echo $username;?>" >  </td>
					<td><span> <?php echo $err_username;?> </span></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>: <input type="password" name="password"  value="<?php echo $password;?>">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
				</tr>
                <tr>
                    <td>Confirm Password</td>
                    <td>: <input type="password" name="Cpassword"value="<?php echo $Cpassword;?>" >  </td>
                    <td><span> <?php echo $err_Cpassword;?> </span></td>
               </tr>
               <tr>
                    <td>Email</td>
                    <td>: <input type="text" name="email"value="<?php echo $email;?>" >  </td>
                    <td><span> <?php echo $err_email;?> </span></td>
               </tr>
               <tr>
                   <td>Address</td>
                   <td>: <input type="text" name="address"value="<?php echo $address;?>" placeholder="Street Address"> <br> <br><input type="text" name="city"value="<?php echo $city;?>" placeholder="City">
                  -<input type="text" name="state" value="<?php echo $state;?>" placeholder="State"> <br>
                  <br><input type="text" name="PZcode"value="<?php echo $PZcode;?>" placeholder="Postal/Zip Code">
                  </td>
                  <td><span> <?php echo $err_city;?> </span><span> <?php echo $err_state;?> </span><span> <?php echo $err_PZcode;?> </span></td>
               </tr>
               <tr>
                  <td>Phone</td>
                  <td>: <input type="text" name="code"value="<?php echo $code;?>" placeholder="code">
                  - <input type="text" name="phone"value="<?php echo $phone;?>" placeholder="Number"> </td>
                  <td><span> <?php echo $err_code;?></span><span> <?php echo $err_phone;?> </span></td>
               </tr>
               <tr>
					<td>Gender</td>
					<td>: <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
					<td><span> <?php echo $err_gender;?> </span></td>
				</tr>
				<tr>
					<td>Birth Date</td>
					<td>: <select name="date"><option disabled selected>Date</option>
                   <?php
                for($i=1; $i<=31; $i++)
                {

                echo "<option> $i </option>";
                  }
                ?>
             </select>

             <select name="month"> 
              <?php
  							foreach($array as $p){
  									echo "<option selected> $p </option>";

  							}
  						?>
             </select>
             <select name="year">
              <option disabled selected>Year</option>
              <?php
               for($j=1970; $j<=2020; $j++)
           {
             echo "<option> $j </option>";
              }
              ?>

			</select>
					</td>
					<td><span> <?php echo $err_dating;?></span>
            <span><?php echo $err_Month;?></span>
              <span><?php echo $err_year;?> </span></td>
				</tr>
				<tr>
					<td>Where did you hear about us ?</td>
					<td>
          <input type="checkbox" name="hobbies[]" <?php if(hobbyExist("A Friend or Collegue")) echo "checked";?> value="A Friend or Collegue"> A Friend or Collegue <br>
		  <input type="checkbox" name="hobbies[]" <?php if(hobbyExist("Google Post")) echo "checked";?> value="Google Post"> Google<br>
          <input type="checkbox" name="hobbies[]" <?php if(hobbyExist("Blog Post")) echo "checked";?> value="Blog Posts"> Blog Post<br>
		  <input type="checkbox" name="hobbies[]" <?php if(hobbyExist("News Articals")) echo "checked";?> value="News Articals"> News Article <br>
					</td>
					<td><span> <?php echo $err_hobbies;?> </span></td>
				</tr>
				<tr>
					<td>Bio</td>
					<td> <textarea name="bio" ><?php echo $bio; ?></textarea>
					<td><span> <?php echo $err_bio;?> </span></td>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="middle"><input type="submit" name="submit" value="Register"></td>

				</tr>
			</table>
		</fieldset>
		</form>
	</body>
</html>