<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabcart</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
          
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #000;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
    <script src="pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
</head>
<body>

    <div class="container">
      <button id="download" id="download" >DOWNLOAD</button>
        <div class="brand-section" id="invoice">
            <div class="row" >

                <div class="col-6" >
                    <h1 class="text-white">sweetjane</h1>
                </div>
                <div class="col-6">
                    <div class="company-details" >
                        <p class="text-white">assdad asd  asda asdad a sd</p>
                        <p class="text-white">assdad asd asd</p>
                        <p class="text-white">+91 888555XXXX</p>
                    </div>
                </div>
            </div>
        
        <?php 
        $f;$e;$c;$s;$p;$a;$d;
$Con=mysqli_connect("localhost","root","","user_data");
$order_id=$_GET['order_id'];

$query="SELECT * from user u INNER join order_manager o on u.username=o.username INNER join user_order ur on o.order_id=ur.order_id WHERE ur.order_id='$order_id'";
$user_result=$Con->query($query);
while($user_fetch = mysqli_fetch_assoc($user_result)){
$f=$user_fetch['full_name'];
$a=$user_fetch['address'];
$c=$user_fetch['city'];
$s=$user_fetch['state'];
$p=$user_fetch['code'];
$e=$user_fetch['email'];
$d=$user_fetch['date_time'];
}

?>
        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Invoice No.: 001</h2>
                    <p class="sub-heading">Tracking No. sweetjane2025 </p>
                    <p class="sub-heading">Order Date: <?php echo $d ?> </p>
                    <p class="sub-heading">Email Address: <?php echo $e ?> </p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Full Name: <?php echo $f ?> </p>
                    <p class="sub-heading">Address: <?php echo $a ?> </p>
                    <p class="sub-heading">City,State,Pincode: <?php echo $c ?>,<?php echo $s ?>,<?php echo $p ?> </p>
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th class="w-20">Price</th>
                        <th class="w-20">Quantity</th>
                        <th class="w-20">Grandtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
<?php 
$total=0;
$Con=mysqli_connect("localhost","root","","user_data");
$order_id=$_GET['order_id'];

$query="SELECT * from user u INNER join order_manager o on u.username=o.username INNER join user_order ur on o.order_id=ur.order_id WHERE ur.order_id='$order_id'";
$user_result=$Con->query($query);
while($user_fetch = mysqli_fetch_assoc($user_result)):
?>
                        <td><?php echo $user_fetch['product_name'] ?></td>
                        <td><?php echo $user_fetch['quantity'] ?></td>
                        <td><?php echo $user_fetch['product_price'] ?></td>
                        <td><?php echo $user_fetch['product_price']*$user_fetch['quantity'] ?></td>
                    </tr>
                    <?php $total=$total+$user_fetch['product_price']*$user_fetch['quantity'] ;
                
                    ?>
                    <?php endwhile; ?>

                    <tr>
                        <td colspan="3" class="text-right">Sub Total</td>
                        <td> <?php echo $total?>              </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Tax Total %1X</td>
                        <td> 10</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Grand Total</td>
                        <td> <?php echo $total+10 ?></td>
                    </tr>

                </tbody>
            </table>
            <br>
            <h3 class="heading">Payment Status: Paid</h3>
            <h3 class="heading">Payment Mode: Cash on Delivery</h3>
        </div>

        <div class="body-section">
            <p>&copy; Copyright 2021 - Fabcart. All rights reserved. 
            </p>
        </div>      
    </div>      
    </div>
</body>
</html>