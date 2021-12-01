<?php 
$con = mysqli_connect('localhost','root','','user_data');
if(isset($_POST['save'])){
    $contact=$_POST['contact'];
 $Dup_contact=mysqli_query($con,"SELECT * FROM `employee_info` WHERE contact='$contact'");
if(mysqli_num_rows($Dup_contact)){
    echo"
    <script>
    alert('Incorrect contact !');
     window.location.href='employee.php';
     </script>";
}
else{
     $query="INSERT INTO `employee_info`( `employee_name`, `contact`, `pid`) VALUES ('$_POST[empname]','$_POST[contact]','$_POST[emp_id]')";
    mysqli_query($con,$query);
    echo"
    <script>
    alert('Employee Added Successfully!');
    window.location.href='employee.php';
     </script>";
}}
if(isset($_POST['del'])){
      $empid=$_POST['empid'];
    $query1="DELETE FROM `employee_info` WHERE employee_id='$empid' ";
    mysqli_query($con,$query1);
    echo"
    <script>
    alert('Delete successfully!');
    window.location.href='employee.php';

     </script>";
}

?>