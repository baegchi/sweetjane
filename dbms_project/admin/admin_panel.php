<?php session_start(); 
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
<body>
<header class="text-gray-400 bg-gray-900 body-font">
    <div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-white mb-3 md:mb-0">
       
        <span class="ml-3 text-xl">Admin Panel</span>
      </a>
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
        <a href="employees/employee.php?page=employee" class="mr-5 hover:text-white">Employees</a>
        <a href="employees/product.php?page=product" class="mr-5 hover:text-white">Product</a>
        <a href="employees/users.php?page=users" class="mr-5 hover:text-white">Users</a>
        <a href="../index.php" class="mr-5 hover:text-white">Userpanel</a>

      </nav>
     
        <a href="admin_login.php" class="mr-2 ml-4">logout</a>


    </div>
  </header>
  <div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row  items-center">
<p class="text-6xl font-serif md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
  <?php echo "Welcome back ".$_SESSION['admin']."!"  ?>
</p>
  </div>
</body>
</html>
<script>
$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')

</script>