<?php
session_start();
$Con=mysqli_connect("localhost","root","","user_data");

if(mysqli_connect_error()){
    echo"<script>
    alert('cann');
    window.location.href='cart.php';
    </script>";
    exit();
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['purchase'])){
$query1="INSERT INTO `order_manager`(`username`, `address`, `city`, `state`, `code`) VALUES ('$_POST[username]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[code]')";    
     
if(mysqli_query($Con,$query1)){
         $order_id=mysqli_insert_id($Con);
       $query2="INSERT INTO `user_order`(`order_id`, `product_name`, `product_price`, `quantity`) VALUES (?,?,?,?)";
          $stmt=mysqli_prepare($Con,$query2);
          if($stmt){
              mysqli_stmt_bind_param($stmt,"isii",$order_id,$item_name,$price,$quantity);
              foreach($_SESSION['cart'] as $key => $value){   
                  $item_name=$value['item_name'];
                  $price=$value['price'];
                  $quantity=$value['quantity'];
                  mysqli_stmt_execute($stmt);
              }
              unset($_SESSION['cart']);
              echo"<script>
              alert('order placed');
              window.location.href='bill.php?order_id=$order_id ';
              </script>";
          
        }}
     else{
        echo"<script>
        alert('cannot');
        window.location.href='cart.php';
        </script>";
     }
    }
}