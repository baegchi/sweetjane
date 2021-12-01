

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


<body class="bg-gray-100">
        <div class="container mx-auto mt-10">
          <div class="flex shadow-md my-10">
            <div class="w-3/4 bg-white px-10 py-10">
              <div class="flex justify-between border-b pb-8">
                <h1 class="font-semibold text-2xl">Product Details</h1>
              </div>
              <div class="lg:w-4/3 w-full mx-auto ">
      <table class="table-auto w-full ">
        <thead>
          <tr>
          <th class="px-4 py-3 title-font font-medium text-white text-sm bg-gray-800 ">Id</th>
            <th class="px-4 py-3 title-font font-medium text-white text-sm bg-gray-800">Name</th>
            <th class="px-4 py-3 title-font font-medium text-white text-sm bg-gray-800">Image</th>

            <th class="px-4 py-3 title-font font-medium text-white text-sm bg-gray-800">Price</th>
            <th class="px-4 py-3 title-font font-medium text-white text-sm bg-gray-800">Category</th>
          </tr>
        </thead>
        <tbody class="text-center">
              <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                <div class="flex w-2/5 text-center"> <!-- product -->
                <?php 
//product fetch
$con = mysqli_connect('localhost','root','','user_data');

$query="SELECT * FROM `product_details`  ";
$user_result=$con->query($query);
while($user_fetch = mysqli_fetch_assoc($user_result)){
  echo"
  <tr>
  <td>$user_fetch[pid]</td>
  <td>$user_fetch[product_name]</td>
  <td><img src='$user_fetch[product_image]' height='50px' width='100px' class='flex-shrink-0 rounded-lg  object-cover object-center mb-4'></td>
  <td>$user_fetch[product_price]</td>
  <td>$user_fetch[pcategory]</td>
  </tr>
";
}
?>

<a href="../admin_panel.php" class="flex font-semibold text-indigo-600 text-sm mt-10">
            
                <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
                Back
              </a>
    
    
                </div>
              </div>
        </tbody>
      </table>
              </div>
            </div>
        <div id="summary" class="w-1/4 px-2">
              <h1 class="font-semibold text-2xl border-b pb-8"></h1>
      
      <form action="pro.php " method="POST" enctype="multipart/form-data">
        <div class="shadow overflow-hidden sm:rounded-md">

          <div class="px-4 py-5 bg-white sm:p-6">
          <p class="text-gray-800 font-medium text-center text-lg font-bold">Add Product</p>

            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3 mt-3">

                <label for="first-name" class="block text-sm font-medium text-gray-700">Product name</label>
                <input type="text" name="product_name"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
              </div>
              <div class="col-span-6 sm:col-span-4">


<label for="first-name" class="block text-sm font-medium text-gray-700">Product image</label>
<input type="file" name="pimg"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
</div>
      
              <div class="col-span-6 sm:col-span-4">
                <label for="email-address" class="block text-sm font-medium text-gray-700">Product Price:</label>
                <input type="text" name="price"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
              </div>
              
              <div class="col-span-6 sm:col-span-3">
                <label for="email-address" class="block text-sm font-medium text-gray-700">Product Category</label>
                  <select name="pages" id="" >
                      <option selected>--</option>
                      <option value="cake">Cake</option>
                      <option value="macroons">Macroons</option>
                      <option value="biscuits">Biscuits</option>

                  </select>
            </div>
             
             
              <div class="col-span-6 sm:col-span-4">

              <div class="mt-2 items-center justify-between">
          <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" name="pdetails">Add</button>
              </div>
        </div>
        </div>
        <div class="border-t mt-2">

      </form>
      <form  action="pro.php" method="POST">
        <p class="text-gray-800 font-medium text-center text-lg font-bold">Delete Product</p>
        <div class="">
          <label class="block text-sm text-gray-00" for="username">Product Id</label>
          <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="pid" type="text" required="">
        </div>
        

        <div class="mt-4 items-center justify-between">
          <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" name="del">Delete</button>
          
        </div>
        <div class="border-t mt-2">
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