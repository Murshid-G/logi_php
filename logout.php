<?php
 session_start();
 session_unset();
 session_destroy();
 if(isset($_GET['redirect'])) {
    header('Location: '.base64_decode($_GET['redirect']));  
   } else {
    header('Location: index.php');  
   }
 $url = "login.php";
 if(isset($_GET["session_expired"])) 
 {
 $url .= "?session_expired=" . $_GET["session_expired"];
 }
 header("Location:$url");

// session_start();
// // unset($_SESSION["id"]);
// if( !isset($_SESSION['login']) ){
//     $_SESSION['login'] = strtotime('+1 minutes', time()); 
//   }

//   if( time() > $_SESSION['login'])
//   {
//     session_destroy();
//       header("Location: login.php"); 
//   }else{
//           $_SESSION['login'] = strtotime('+1 minutes', time());
//       }
// $inactive = 1;
// if( !isset($_SESSION['login']) )
// $_SESSION['login'] = time() + $inactive; 

// $session_life = time() - $_SESSION['login'];

// if($session_life > $inactive)
// {  session_destroy(); header("Location:login.php");     }

// $_SESSION['login']=time();
// unset($_SESSION["login"]);
// header("Location:login.php");
?>