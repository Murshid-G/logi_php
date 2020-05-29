<!DOCTYPE HTML>
<html>
<head>
<title>New user signup </title>
</head>
<body>
<?php
extract($_POST);

include("database.php");
if(isset($_POST['submit'])) {

	$user_id = $_POST['user_id'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  // $login = $_POST['login'];
  
function is_valid_email($email)
{
     if (empty($email)) {
         echo "Email is required.";
         return false;
     } else {
         $email = test_input($email);
         // check if e-mail address is well-formed
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           echo "Invalid email format."; 
           return false;
     } 
     // now check if the mail is already registered
	//  $rs = "SELECT 1 FROM sighnup WHERE email = '$email'";
	 $rs=mysqli_query($conn,"select * from sighnup where email='$email'");
    //  $selectresult = mysql_query($rs);
     if(mysql_num_rows($rst)>0) {
       echo 'This email already exists.';
       return false;
     }
     // now returns the true- means you can proceed with this mail
     return true;
}

// function for password verification
function is_valid_passwords($pass,$name) 
{
     // Your validation code.
     if (empty($pass)) {
         echo "Password is required.";
         return false;
     } 
     else if ($pass != $name) {
         // error matching passwords
         echo 'Your passwords do not match. Please type carefully.';
         return false;
     }
     // passwords match
     return true;
    }
}}
?>
<center>
<div class="floating-box">
<form name="form1" method="post" action="signupuser.php" onSubmit="return check();" >


   <label for=""pwd">My Name</label>
   <input type="text" id="user_id" name="user_id"><br><br>
   <label for=""pwd">Password</label>
   <input type="password" id="login" name="login"><br><br>
     
   <label for=""pwd"> Confirm   </label>
   <input type="password" id="pass" name="pass"><br><br>
   <label for="uname">Mobile no.</label>
   <input type="text" id="name" name="name"><br><br>
       
   
   <label for="uname">Email id</label>
   <input type="text" id="email" name="email"><br><br>
    
   <input type="submit" id="submit" name="submit" value="Signup">
	<p>Already Register <a href="index.php"Login here></a></p>
                              

</form>
</div>
</center>
 
 
</body>
</html>