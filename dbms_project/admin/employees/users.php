

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>


<body class="bg-white-100">
        <div class="container mx-auto mt-10">
          <div class="flex shadow-md my-10">
            <div class="w-3/4 bg-white px-10 py-10">
              <div class="flex justify-between border-b pb-8">
                <h1 class="font-semibold text-2xl">USER DETAILS</h1>
              </div>
              <div class="lg:w-4/3 w-full mx-auto ">
      <table class="table-auto w-full ">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font font-medium text-white text-sm bg-gray-800">Name</th>
            <th class="px-4 py-3 title-font font-medium text-white text-sm bg-gray-800">ADDRESS</th>
            <th class="px-4 py-3 title-font font-medium text-white text-sm bg-gray-800">ITEM</th>
            <th class="px-4 py-3 title-font font-medium text-white text-sm bg-gray-800">QUANTITY</th>
            <th class="px-4 py-3 title-font font-medium text-white text-sm bg-gray-800">PRICE</th>


          </tr>
        </thead>
        <tbody class="text-center">
              <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                <div class="flex w-2/5 text-center"> 
                <?php

             $con = mysqli_connect('localhost','root','','user_data');
 
             $query="SELECT full_name, address,product_name,quantity ,quantity*product_price as price 
             from user u INNER JOIN order_manager o on u.username=o.username INNER JOIN user_order ur on ur.order_id=o.order_id ";
  $user_result=$con->query($query);
             while($user_fetch = mysqli_fetch_assoc($user_result)){
               echo"
               <tr>
               <td>$user_fetch[full_name]</td>
               <td>$user_fetch[address]</td>
               <td>$user_fetch[product_name]</td>
               <td>$user_fetch[quantity]</td>
               <td>$user_fetch[price]</td>
             ";}
             
             
?>
                </div>
              </div>
        </tbody>
      </table>
              </div>
            </div>     
        </div>
      </form>
    </div>
  </div>
</div>

<div class="hidden sm:block" aria-hidden="true">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div>
</body>
</html>