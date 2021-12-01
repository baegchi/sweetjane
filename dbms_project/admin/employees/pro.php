<?php 
$con = mysqli_connect('localhost','root','','user_data');
if(isset($_POST['pdetails'])){
   $product_img=$_FILES['pimg'];
   $image_loc=$_FILES['pimg']['tmp_name'];
   $image_name=$_FILES['pimg']['name'];
   $img_des="uploadimages/".$image_name;
   move_uploaded_file($image_loc,"uploadimages/".$image_name);
$query="INSERT INTO `product_details`( `product_name`, `product_image`, `product_price`, `pcategory`)  VALUES ('$_POST[product_name]','$img_des','$_POST[price]','$_POST[pages]')";
   mysqli_query($con,$query);
   echo"
   <script>
   alert('Product Added!');
   window.location.href='product.php';

    </script>"; 
}
if(isset($_POST['del'])){
   $pid=$_POST['pid'];
 $query1="DELETE FROM `product_details` WHERE pid='$pid' ";
 mysqli_query($con,$query1);
 echo"
 <script>
 alert('Delete successfully!');
 window.location.href='product.php';

  </script>";
}
?>
