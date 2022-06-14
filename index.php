<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
    echo ' you are loged in';
}else{
    // echo ' please login';
    header('Location: login.php');

}

?>
<br>
<a href='logout.php'>logout</a>
