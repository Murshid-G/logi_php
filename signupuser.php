<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
 if(isset($_POST['submit'])) {

	$user_id = $_POST['user_id'];
	$login = $_POST['login'];
	// $user_id = $_POST[''];
	// $user_id = $_POST['userid'];
	// $user_id = $_POST['userid'];
	// $user_id = $_POST['userid'];

extract($_POST);
include("database.php");
$rs=mysqli_query($conn,"SELECT * FROM `sighnup` WHERE login='$user_id'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$query="insert into sighnup(user_id,login,pass,name,email) values('$user_id','$login','$pass','$name','$email')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");



echo "<br><br><br><div class=head1>Your Login ID  $user_id Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=login.php>Login</a></div>";
 }

?>
</body>
</html>