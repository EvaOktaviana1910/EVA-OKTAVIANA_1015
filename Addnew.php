<?php 
include 'connect.php';
?>

<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>ADD NEW CONTACT HERE</title>
</head>

<body>
    <div class="min-h-screen flex items-center justify-center bg-blue-900 hover:bg-blue-900">
        <div class="bg-white p-6 rounded-lg shadow-lg m-4 max-w-md w-full">
            <h2 class="text-center text-2xl font-semibold text-gray-800 mb-4">ADD NEW CONTACT HERE</h2>
            <form action="insertcontactapps.php" method="POST">
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                        <label for="PHONE_NUMBER" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PHONE NUMBER</label>
                        <input type="text" name= "PHONE_NUMBER" id="PHONE_NUMBER" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xsm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="085754496838" required />
                </div>
                <div>
                        <label for="VISITORS" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">VISITORS</label>
                        <input type="text" name= "VISITORS" id="VISITORS" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xsm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="EVA OKTAVIANA" required />
                </div>
                <div>
                        <label for="BOOK_TITLE" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">BOOK TITLE</label>
                        <input type="text" name= "BOOK_TITLE" id="BOOK_TITLE" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xsm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="RINTIK HUJAN" required />
                </div>  
                <div>
                        <label for="PUBLISHER" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PUBLISHER</label>
                        <input type="text" name= "PUBLISHER" id="PUBLISHER" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xsm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="GRAMEDIA" required />
                </div>  
                <button type="submit" class= "text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>
    </div>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</body>

</html>
