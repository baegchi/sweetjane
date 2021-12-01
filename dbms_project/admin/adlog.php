<?php 
$username =$_POST['username'];
$password =$_POST['password'];
$con = mysqli_connect('localhost','root','','user_data');
$result=mysqli_query($con,"select * from admin where username ='$username'  and password= '$password' ");
session_start();
if(mysqli_num_rows($result)){
    $_SESSION['admin']=$username;

    echo"
    <script>
    alert('Successfully login!');
     window.location.href='admin_panel.php';
     </script>";
}
else{
    echo"
    <script>
    alert('Incorrect username/email/password!');
     </script>";
}
?>