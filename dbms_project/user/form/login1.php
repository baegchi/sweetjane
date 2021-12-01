<?php 
$username =$_POST['username'];
$password =$_POST['password'];
$con = mysqli_connect('localhost','root','','user_data');
$result=mysqli_query($con,"select * from user where (username ='$username' or email='$username' ) and password= '$password' ");
session_start();
if(mysqli_num_rows($result)){
    $_SESSION['riya']=$username;
    echo"
    <script>
    alert('Successfully login!');
     window.location.href='../../index.php';
     </script>";
}
else{
    echo"
    <script>
    alert('Incorrect username/email/password!');
     window.location.href='login.php';
     </script>";
}
?>