<?php
	$fname="";
	$err_fname="";
	$lname="";
	$err_lname="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
    $email="";
    $err_email="";
    $code="";
    $err_code="";
    $phone="";
    $err_phone="";
	$dating="";
	$err_dating="";
    $month="";
	$err_month="";
    $year="";
	$err_year="";
	$bgroup="";
	$err_bgroup="";

	$hasError=false;

	$array= array("Jaunary","February","March","April","May","June", "July" ,"August","September","Octobar","November","December");
    $arr= array("A+","A-","B+","B-","AB+","AB-","O+","O-");
	
	if(isset($_POST["submit"])){
		if(empty($_POST["fname"])){
			$hasError = true;
			$err_fname="First Name Required";
		}
		else{
		$fname = $_POST["fname"];
		}
		if(empty($_POST["lname"])){
			$hasError = true;
			$err_lname="Last Name Required";
		}
		else{
		$lname = $_POST["lname"];
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

		if(empty($_POST["password"])){
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
		  /* else if(!ctype_upper($_POST["password"])){
          $hasError=true;
			     $err_password="Password should contain UpperCase values";
		    }
		     else if(!ctype_lower($_POST["password"])){
           $hasError=true;
			    $err_password="Password should contain LowerCase values";
		     }*/
		   else if(strpos($_POST["password"]," ")){
          $hasError=true;
			    $err_password="Password should not contain white space";
		    }
			 else{
				 $password=$_POST["password"];
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
		if (!isset($_POST["date"])){
			$hasError = true;
			$err_dating="Date Required";
		}
		else{
			$dating = $_POST["date"];
		}
       if (!isset($_POST["month"])){
         $hasError = true;
         $err_Month="Month Required";
        }
        else{
         $Month = $_POST["month"];
        }
       if (!isset($_POST["year"])){
        $hasError = true;
        $err_year="year Required";
       }
        else{
        $year = $_POST["year"];
         }
       if(empty($_POST["bgroup"])){
			$hasError = true;
			$err_bgroup="Blood Group Required";
		}
		else{
		$bgroup = $_POST["bgroup"];
		}

		if(!$hasError){

			echo "<h1>Form submitted</h1>";
			echo $_POST["fname"]."<br>";
			echo $_POST["lname"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
            echo $_POST["email"]."<br>";
            echo $_POST["code"]."<br>";
            echo $_POST["phone"]."<br>";
			echo $_POST["date"]."<br>";
            echo $_POST["month"]."<br>";
            echo $_POST["year"]."<br>";
			echo $_POST["bgroup"]."<br>";
		}

	}
	

?>

<html>
	<body>
	<h1 align="middle">Patient</h1>
		<form action="" method="post">
		<fieldset>
		<p align="middle">
			<table>
				<tr>
					<td>First Name</td>
					<td>: <input type="text" name="fname" value="<?php echo $fname;?>" > </td>
					<td><span> <?php echo $err_fname;?></span></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td>: <input type="text" name="lname" value="<?php echo $lname;?>" > </td>
					<td><span> <?php echo $err_lname;?></span></td>
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
                    <td>Email</td>
                    <td>: <input type="text" name="email"value="<?php echo $email;?>" >  </td>
                    <td><span> <?php echo $err_email;?> </span></td>
               </tr>
               <tr>
                  <td>Phone</td>
                  <td>: <input type="text" name="code"value="<?php echo $code;?>" placeholder="code">
                  - <input type="text" name="phone"value="<?php echo $phone;?>" placeholder="Number"> </td>
                  <td><span> <?php echo $err_code;?></span><span> <?php echo $err_phone;?> </span></td>
               </tr>
				<tr>
					<td>Birth Date</td>
					<td>: <select name="date"><option disabled selected>Date</option>
                   <?php
                for($i=1; $i<=31; $i++)
                {
					if($i==$dating)
                echo "<option selected> $i </option>";
			    else
				echo "<option> $i </option>";
                  }
                ?>
             </select>

             <select name="month"> 
			 <option disabled selected>Month</option>
              <?php
  							foreach($array as $p){
								if($p==$month)
  									echo "<option selected> $p </option>";
								else
									echo "<option> $p </option>";

  							}
  						?>
             </select>
             <select name="year">
              <option disabled selected>Year</option>
              <?php
               for($j=1970; $j<=2020; $j++)
           {
			   if($j==$year)
             echo "<option selected> $j </option>";
		      else
			 echo "<option> $j </option>";
              }
              ?>

			</select>
					</td>
					<td><span> <?php echo $err_dating;?></span>
            <span><?php echo $err_month;?></span>
              <span><?php echo $err_year;?> </span></td>
				</tr>
				<tr>
           <td>Blood Group</td>
           <td>: <select name="bgroup">
           <option disabled selected>--select--</option>
               <?php
             foreach($arr as $a){
	            if($a==$bgroup)
	           echo "<option selected>$a</option>";
              else
	             echo "<option>$a</option>";
                    }
                  ?>
            </select>
             </td>
             <td><span><?php echo $err_bgroup;?> </span></td>
            </tr>
             <tr>
					<td colspan="2" align="middle"><input type="submit" name="submit" value="Update"></td>

				</tr>
			</table>
			</p>
		</fieldset>
		</form>
	</body>
</html>