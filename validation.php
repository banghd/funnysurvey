<?php
session_start();
$connect = mysqli_connect('localhost','DoBang','02022000');
mysqli_select_db($connect,'php_tutorial');
$email = trim($_POST['email']);
$pass = trim($_POST['password']);

$result = mysqli_query($connect,"select * from users where email = '$email' and password = '$pass'");
$num = mysqli_num_rows($result);
if($num==0){
    echo"<h1>Email or Password is incorrect</h1><br>
        <a href='login.php'>RE fill</a>";
        
}
else {
    setcookie('email',$email,time()+ 86400*30,'/');
  header('Location: mainpage/Mainpage.php');
  exit();
}

?>