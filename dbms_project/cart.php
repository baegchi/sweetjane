<?php include("header.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Document</title>
</head>
    <body class="bg-gray-100">
        <div class="container mx-auto mt-10">
          <div class="flex shadow-md my-10">
            <div class="w-3/4 bg-white px-10 py-10">
              <div class="flex justify-between border-b pb-8">
                <h1 class="font-semibold text-2xl">Shopping Cart</h1>
              </div>
              <div class="lg:w-4/3 w-full mx-auto ">
      <table class="table-auto w-full ">
        <thead>
          <tr>
          <th class="px-4 py-3 title-font font-medium text-white text-sm bg-gray-800 ">Item</th>
            <th class="px-4 py-3 title-font font-medium text-white text-sm bg-gray-800">Price</th>
            <th class="px-4 py-3 title-font font-medium text-white text-sm bg-gray-800">Quantity</th>
            <th class="px-4 py-3 title-font font-medium text-white text-sm bg-gray-800">Total</th>
            <th class="px-4 py-3 title-font font-medium text-white text-sm bg-gray-800">Edit</th>
          </tr>
        </thead>
        <tbody>
              <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                <div class="flex w-2/5 text-center"> <!-- product -->
                
<?php 
$total=0;
$sum=0;
if(isset($_SESSION['cart'])){
  foreach($_SESSION['cart'] as $key => $value){
  $total=$total+$value['price'];
  $sum=$total+10;
    echo" 
    <tr class=text-center>
    <td>$value[item_name]</td>
    <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'>
    </td>
    <td>
    <form action=manage_cart.php method=POST>
    <input class='text-center mt-1 iquantity' type='number' name='mod_quantity' onchange='this.form.submit();' value=$value[quantity] min=1 max=10>
    <input type=hidden name=item_name value=$value[item_name]>
    </form>
    </td>
    <td class='itotal'></td>
    <td>
    <form action=manage_cart.php method=POST>
    <button name=remove_item ><span>&#10060;</span></button>
    <input type=hidden name=item_name value=$value[item_name]>
    </form>
    </tr>
    ";
  }
}
?>
      
              <a href="index.php" class="flex font-semibold text-indigo-600 text-sm mt-10">
            
                <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
                Continue Shopping
              </a>
            </div>
              </div>
        </tbody>
      </table>
              </div>
            </div>
        <div id="summary" class="w-1/4 px-8 py-10">
              <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
              <p>Name:  <?php echo $_SESSION['riya']; ?></p>
              <div class="flex justify-between mt-8 mb-5">
                <span class="font-semibold text-sm uppercase">Items <?php echo $count; ?></span>
                <span class="font-semibold text-sm" id="gtotal"> </span>
                
              </div>
              <div>
                <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                  <span>Tax</span>
                  <span>Rs- 10</span>
                </div>
              <div class="border-t mt-2">
                <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                  <span>Total cost</span>
                  <span id="sum"></span>
                </div>
  
                <button class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">
                <?php if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)  { ?>
                <a href="address.php"> <?php } ?>Checkout</a></button>
              </div>
            </div>
      
          </div>
        </div> 
      <script>
        var gt=0;
        var iprice=document.getElementsByClassName('iprice');
        var iquantity=document.getElementsByClassName('iquantity');
        var itotal=document.getElementsByClassName('itotal');
        var gtotal=document.getElementById('gtotal');
        var sum= document.getElementById('sum');
         function subTotal(){
           gt=0;
         for(i=0;i<iprice.length;i++){
          itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
           gt=gt+(iprice[i].value)*(iquantity[i].value);
           }
           gtotal.innerText=gt;
           sum.innerText=gt+10;
             }
        subTotal();
      </script>
</body>
</html>