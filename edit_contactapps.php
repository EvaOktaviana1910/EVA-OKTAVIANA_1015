

<?php
include 'connect.php';

// Mendapatkan ID kontak dari URL
$ID_NUMBER = $_GET['id_number'];

// Membuat objek Contacts
$crud = new contactapps();

// Mengambil data kontak yang akan diedit dari database
$data = $crud->getcontactappsByIDNUMBER($ID_NUMBER);

if ($data) {
    $data = mysqli_fetch_assoc($data)
    // Data ditemukan, tampilkan formulir untuk mengedit data
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="output.css" />
    <title>EDIT</title>
</head>

<body>

    <div class="min-h-screen flex items-center justify-center bg-blue-900">
        <div class="bg-white p-6 rounded-lg shadow-lg m-4 max-w-md w-full">
            <h2 class="text-center text-2xl font-semibold text-gray-800 mb-4">EDIT CONTACT HERE</h2>
            <form action="editcontrol.php" method="POST">
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                        <input type="hidden" name="id" value="<?= $data["ID_NUMBER"] ?>">
                        <label for="PHONE_NUMBER" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PHONE NUMBER</label>
                        <input type="text" name= "PHONE_NUMBER" id="PHONE_NUMBER" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xsm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="085754496838" required value="<?= $data['PHONE_NUMBER'] ?>">
                </div>
                <div>
                        <label for="VISITORS" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">VISITORS</label>
                        <input type="text" name= "VISITORS" id="VISITORS" required value="<?= $data['VISITORS'] ?>" name="VISITORS" id="VISITORS" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xsm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="EVA OKTAVIANA"/>
                </div>
                <div>
                        <label for="BOOK_TITLE" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">BOOK TITLE</label>
                        <input type="text" name= "BOOK_TITLE" id="BOOK_TITLE" required value="<?= $data['BOOK_TITLE'] ?>" name="BOOK_TITLE" id="BOOK_TITLE" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xsm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="RINTIK HUJAN" required />
                </div>  
                <div>
                        <label for="PUBLISHER" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PUBLISHER</label>
                        <input type="text" name= "PUBLISHER" id="PUBLISHER" required value="<?= $data['PUBLISHER'] ?>" name="PUBLISHER" id="PUBLISHER" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xsm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="GRAMEDIA" required />
                </div>  
                <div class="flex items-baseline justify-between mt-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">EDIT</button>
                    <button type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    href="index.php">CANCEL</button>
                </div>
            </form>
        </div>
    </div>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</body>
</html>

<?php

} else {
    // Data tidak ditemukan, tampilkan pesan error
    echo "Data kontak tidak ditemukan.";
}
?>
