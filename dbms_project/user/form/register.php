<?php include('../../header.php'); ?>

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


<div class="hidden sm:block" aria-hidden="true">
  <div class="py-5 ">
    <div class="border-t border-gray-200 bg-gray-100"></div>
  </div>
</div>

<div class="mt-10  sm:mt-0">
<div class="container mx-auto h-full flex flex-1 justify-center items-center ">
  <div class="w-full max-w-lg">
    <div class="leading-loose">
   
    <div class="mt-5 md:mt-0 md:col-span-2">
      
      <form action="insert.php " method="POST">
        <div class="shadow overflow-hidden sm:rounded-md">

          <div class="px-4 py-5 bg-white sm:p-6">
          <p class="text-gray-800 font-medium text-center text-lg font-bold">Sign Up</p>

            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3 mt-3">

                <label for="first-name" class="block text-sm font-medium text-gray-700">Full name</label>
                <input type="text" name="full_name"  class="mt-1 focus:ring-grey-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
              </div>

      
              <div class="col-span-6 sm:col-span-4">
                <label for="email-address" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" name="username" class="mt-1 focus:ring-grey-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
              </div>
              <div class="col-span-6 sm:col-span-4">
                <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                <input type="email" name="email" class="mt-1 focus:ring-grey-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="email-address" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" class="mt-1 focus:ring-grey-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
              </div>
              
              <div class="col-span-6 sm:col-span-4">
                <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                <input id="country" name="country"  class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-grey-500 focus:border-indigo-500 sm:text-sm" required>
              </div>
             
              <div class="col-span-6 sm:col-span-4">

              <div class="mt-4 items-center justify-between">
          <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" name="sign_up">Sign Up</button>
              </div>
        </div>
        </div>
        <div class="border-t mt-2">
         <a href="login.php" class="flex font-semibold text-black-400 text-sm "> Already have an account? <span class="text-indigo-600">Login</span> </a>   </div>
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