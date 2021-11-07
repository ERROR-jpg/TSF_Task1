<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="images/download (1).png">
  <title>TSF BANKING</title>
</head>
<body>
  
<?php
  include 'header.php';
  ?>
  <div>
    <hr>
    <section class="text-gray-600 body-font">
      <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
          <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Welcome to TSF BANKING
            <br class="hidden lg:inline-block">The people’s bank
          </h1>
          <p class="mb-8 leading-relaxed">A customer-focused bank that provides complete financial solutions to meet your entire financial needs.</p>
          <div class="flex justify-center">
          </div>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
          <img class="object-cover object-center rounded" alt="hero" src="images/download (1).png">
        </div>
      </div>
    </section>
    <hr>
    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -mx-4 -mb-10 text-center">
          <div class="sm:w-1/2 mb-10 px-4">
            <div class="rounded-lg h-64 overflow-hidden">
              <img alt="content" class="object-cover object-center h-full w-full" src="images/WhatsApp Image 2021-11-03 at 4.19.02 PM (1).jpeg">
            </div>
            <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Transfer Funds</h2>
            <a href="customer_table.php"><button class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">Transfer</button></a>
          </div>
          <div class="sm:w-1/2 mb-10 px-4">
            <div class="rounded-lg h-64 overflow-hidden">
              <img alt="content" class="object-cover object-center h-full w-full"  src="images/WhatsApp Image 2021-11-03 at 4.19.02 PM.jpeg">
            </div>
            <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Transaction History</h2>
           <a href="transactions.php"> <button class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">Transactions</button></a>
          </div>
        </div>
   
      </div>
    </section>
  </div>
  <hr>
  <div>
    <section class="text-gray-600 body-font relative">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">For any enquiries or feedback. Leave us a message</p>
        </div>
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
          <div class="flex flex-wrap -m-2">
            <div class="p-2 w-1/2">
              <div class="relative">
              <form action="contactus.php" method="post">
                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
            </div>
            <div class="p-2 w-full">
              <div class="relative">
                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
              </div>
            </div>
            <div class="p-2 w-full">
              <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
            </div>
            <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
              <a class="text-indigo-500">tsfbanking@email.com</a>
              <p class="leading-normal my-5">56, Andheri West
                <br>Mumbai-81
              </p>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php
  include 'footer.php';
  ?>
 
</body>
</html>