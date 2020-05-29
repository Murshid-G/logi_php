
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
<div class="container">
 <h2 class="alert alert-info">This is second page</h2>
 <?php
 if(isset($_SESSION["login"])) 
 {
 ?> 
 <div class="alert alert-success">
 Welcome Dear <?php echo $_SESSION["login"]; ?> Reader.If here is no activity till 
60 Seconds then a warning message will be show and after 30 <strong>Seconds </strong>you will be auto logout Click 
here to <a href="logout.php">Logout</a> 
 
 </div>
 <?php 
    } 
    else
    { 
 header("Location:hello.php");
 }
 ?>
 </div>
<?php
if($_SESSION["login"]) {
?>
Welcome <?php echo $_SESSION["login"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}else echo "<h1>Please login first .</h1>";
?><br><br>
    <a href="index.php">link one</a><br><br>
    <a href="hello.php">link2</a><br><br>
    <a href="logout.php">logout</a>
</body>
</html>