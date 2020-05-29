<?php
include("database.php");
extract($_POST);
session_start();
if(isset($submit))
{
	$rs=mysqli_query($conn,"select * from sighnup where user_id='$user_id' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$user_id;
	}
}
if (isset($_SESSION["login"]))
{
	if(!isset($_COOKIE["Auction_Item"])){ 
		
		setcookie("Auction_Item", $_SESSION["login"], time() + (86400 * 30), "/");// 86400 = 1 day
		header("Location: http://localhost/mytask/login%20signup/index.php");  
	}else{
		
		if($_COOKIE["Auction_Item"]==$_SESSION["login"]){
			header("Location: http://localhost/mytask/login%20signup/hello.php"); 
		}else{
			setcookie("Auction_Item", $_SESSION["login"], time() + (86400 * 30), "/");// 86400 = 1 day
			header("Location: http://localhost/mytask/login%20signup/index.php"); 
		}
	}	
exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">

</head>
<body>
<center>
<div class="floating-box">

<form name="form1" method="post">


   <label for="uname">User Name</label>
   <input type="text" id="loginid2" name="user_id"><br><br>

   <label for="pwd">Password</label>
   <input type="password" id="pass2" name="pass"><br><br>
   <input name="submit" type="submit" id="submit" value="Login"><br>

<p>New User <a href="signup.php">Register Here</a></p>
<?php
		  if(isset($found))
		  {
		  	echo '<p class="w3-center w3-text-red">Invalid user id or password<br><a href="index.php">Please try again</p>';
		  }
		  ?>
 </center>
</form>

</div>
<center>
</body>
</html>