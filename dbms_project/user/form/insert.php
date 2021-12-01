<?php 
$con = mysqli_connect('localhost','root','','user_data');
if(isset($_POST['sign_up'])){
    $email=$_POST['email'];
    $username=$_POST['username'];
 $Dup_email=mysqli_query($con,"SELECT * FROM `user` WHERE email='$email'");
 $Dup_username=mysqli_query($con,"SELECT * FROM `user` WHERE username='$username'");
if(mysqli_num_rows($Dup_email)){
    echo"
    <script>
    alert('this email is already taken!');
     window.location.href='register.php';
     </script>";
}
if(mysqli_num_rows($Dup_username)){
    echo"
    <script>
    alert('this username is already taken!');
     window.location.href='register.php';
     </script>";
}
else{
    $query="INSERT INTO `user`( `full_name`, `username`, `email`, `password`, `country`) VALUES ('$_POST[full_name]','$_POST[username]','$_POST[email]','$_POST[password]','$_POST[country]')";
    mysqli_query($con,$query);
    echo"
    <script>
    alert('Register successfully!');
     window.location.href='login.php';
     </script>";
}
}
?>