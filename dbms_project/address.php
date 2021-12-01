<?php include('header.php'); ?>
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

<<div class="mt-10  sm:mt-0">
<div class="container mx-auto h-full flex flex-1 justify-center items-center ">
  <div class="w-full max-w-lg">
    <div class="leading-loose">
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="purchase.php" method="POST">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
          <p class="text-gray-800 font-medium text-center text-lg font-bold">Address</p>

            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3 mt-3">
            
                <label for="Username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" name="username" id="street-address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="street-address" class="block text-sm font-medium text-gray-700">Street address</label>
                <input type="text" name="address" id="street-address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
              </div>

              <div class="col-span-6 sm:col-span-4 ">
                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                <input type="text" name="city" id="city" autocomplete="address-level2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
              </div>

              <div class="col-span-6 sm:col-span-4 ">
                <label for="region" class="block text-sm font-medium text-gray-700">State / Province</label>
                <input type="text" name="state" id="region" autocomplete="address-level1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                <input type="number" name="code" id="postal-code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
              </div>
          
          
              <div class="col-span-6 sm:col-span-4">

<div class="mt-4 items-center justify-between">
<button class="px-2 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" name="purchase">Save</button>
        </div></div></div>
      </form>
    </div>
  </div>

<div class="hidden sm:block" aria-hidden="true">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div>
</body>
</html>