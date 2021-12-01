
<!doctype html>
<html lang="en">

<head>
  <title>Login | Tailwind Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./dist/styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100">
        <div class="container mx-auto mt-10">
          <div class="flex shadow-md my-10">
            <div class="w-3/4 bg-white px-10 py-10">
              <div class="flex justify-between border-b pb-8">
                <h1 class="font-semibold text-2xl">Employee Details</h1>
              </div>
              <div class="lg:w-4/3 w-full mx-auto ">
      <table class="table-auto w-full ">
        <thead>
          <tr>
          <th class="px-4 py-3 title-font font-medium text-white text-sm bg-gray-800 ">Id</th>
            <th class="px-4 py-3 title-font font-medium text-white text-sm bg-gray-800">Name</th>
            <th class="px-4 py-3 title-font font-medium text-white text-sm bg-gray-800">Contact</th>
          </tr>
        </thead>
        <tbody class="text-center">
              <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                <div class="flex w-2/5 text-center"> <!-- product -->
                <?php 
//product fetch
$con = mysqli_connect('localhost','root','','user_data');

$query="SELECT * FROM `employee_info` ";
$user_result=$con->query($query);
while($user_fetch = mysqli_fetch_assoc($user_result)){
  echo"
  <tr>
  <td>$user_fetch[employee_id]</td>
  <td>$user_fetch[employee_name]</td>
  <td>$user_fetch[contact]</td>
 
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
        <div id="summary" class="w-1/4 px-3 py-3">
              <h1 class="font-semibold text-2xl border-b pb-8"></h1>
      <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" action="emp.php" method="POST">
        <p class="text-gray-800 font-medium text-center text-lg font-bold">Add Employee</p>
        <div class="">
          <label class="block text-sm text-gray-00" >Employee name</label>
          <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="empname" type="text" required="">
        </div>
        <div class="mt-2">
          <label class="block text-sm text-gray-600" >Contact</label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" name="contact" type="number" required="" >
        </div>
        <div class="mt-2">
          <label class="block text-sm text-gray-600" >Product Id:</label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" name="emp_id" type="number" required="" >
        </div>
        <div class="mt-4 items-center justify-between">
          <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" name="save">Add</button>
          
        </div>
        <div class="border-t mt-2">
      </form>
     
      <form  action="emp.php" method="POST">
        <p class="text-gray-800 font-medium text-center text-lg font-bold">Delete Employee</p>
        <div class="">
          <label class="block text-sm text-gray-00" for="username">Employee Id</label>
          <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="empid" type="text" required="">
        </div>
        

        <div class="mt-4 items-center justify-between">
          <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" name="del">Delete</button>
          
        </div>
        <div class="border-t mt-2">
      </form>
    </div>

  </div>
</div>
</body>

</html>
<script>
function myFunction() {
  location.replace("https://www.w3schools.com")
}
</script>