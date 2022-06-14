<form method='post'>
    <input type='text' name='username' placeholder='please enter username'>
    <input type='password' name='password' placeholder='please enter password'>
    <input type='submit' name='submit' value='login'>
</form>
<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
    header('Location: index.php');
}
    if($_SERVER['REQUEST_METHOD']=='POST'){
        // echo 'it is post method';
        $username=$_POST['username'];
        $password=$_POST['password'];
        // echo $username.'  '.$password;
        if($username == 'john' && $password=='1234'){
        // echo 'your pass and user is correct';
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
            header('Location: index.php');
        }else{
            echo 'your pass and user is not correct';

        }

    }
?>