<?php
session_start();
define(DOC_ROOT,dirname(__FILE__)); // Път към конфига
$username = $_POST['username']; //Задаваме име
$password = $_POST['password']; //Задаваме парола
$msg ='';
if(isset($username, $password)) {
    ob_start();
    include(DOC_ROOT.'/config.php'); //Създаваме връзка към ДБ
    $myusername = stripslashes($username);
    $mypassword = stripslashes($password);
    $myusername = mysqli_real_escape_string($dbC, $myusername);
    $mypassword = mysqli_real_escape_string($dbC, $mypassword);
    $sql="SELECT * FROM login_admin WHERE user_name='$myusername' and user_pass='$mypassword'";
    $result=mysqli_query($dbC, $sql);
    $count=mysqli_num_rows($result);
    // Ако резултатите съпадат, прабва да има 1 запис
    if($count==1){
        // Регистрираме име и парола => препратка към admin.php
		$_SESSION['name'] = $myusername;
		$_SESSION['password'] = $mypassword;
        header("location:main.php");
    }
    else {
        $msg = "Sorry, wrong name or password";
        header("location:index.php?msg=$msg");
    }
    ob_end_flush();
}
else {
    header("location:index.php?msg=Input name or password");
}
?>