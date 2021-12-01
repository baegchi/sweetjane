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
  <header class="text-gray-700 bg-gradient-to-r from-yellow-400 to-red-500  body-font font-serif">
    <div class="container mx-auto flex flex-wrap p-2 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-white mb-3 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-red-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">sweetjane</span>
      </a>
      <nav class="md:ml-auto md:mr-auto  flex flex-wrap items-center text-base justify-center">
        <a href="index.php?page=home" class="mr-5 hover:text-white">Home</a>
        <span class="mr-2 "> hello, <?php 
        if(isset($_SESSION['riya'])){
        echo $_SESSION['riya'];
        echo " <a href='user/form/logout.php?page=logout' class='mr-8 ml-4 hover:text-white'>Logout</a>
        ";}
        else{ 
          echo " <a href='user/form/login.php?page=login' class='mr-5 ml-4 hover:text-white'>Login</a>
          ";}
        ?></span>
      </nav>
      <?php 
      $count=0;
      if(isset($_SESSION['cart'])){
        $count=count($_SESSION['cart']);
      }
      ?>
      <li class="font-sans block mt-4 lg:inline-block lg:mt-0 lg:ml-6 align-middle text-gray hover:text-gray-700">
        <a href="cart.php" role="button" class="relative flex">
            <svg class="flex-1 w-8 h-8 fill-current" viewbox="0 0 24 24">
              <path d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z"/>
              </svg>
              <span class="absolute right-0 top-0 rounded-full bg-red-600 w-4 h-4 top right p-0 m-0 text-white font-mono text-sm  leading-tight text-center"><?php echo $count; ?>
            </span>
          </a>
        </li>
        <a href="admin/admin_login.php" class="mr-2 ml-4 hover:text-white">Admin</a>


    </div>
  </header>
</body>
</html>
<script>
$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>