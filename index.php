
<?php
include 'connect.php';
// include 'Insert_contactapps';

// Membuat objek Contacts
$crud = new contactapps();

// Mengambil data kontak dari database
$result = $crud->selectcontactapps();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="output.css" />

    <title>Dashboard</title>
  </head>
  <body>
   
    <div class="min-h-screen bg-blue-100">

    <body class="bg-blue-600">
    <span
      class="absolute text-white text-4xl top-5 left-4 cursor-pointer"
      onclick="openSidebar()"
    >
      <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
    </span>
    <div
      class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900"
    >
      <div class="text-white text-xl">
        <div class="p-2.5 mt-1 flex items-center">
          <img class="w-8 h-8 mr-2" src="https://e7.pngegg.com/pngimages/701/782/png-clipart-logo-book-book-writing-blue-text.png" alt="Logo reader.play">
          <i class="bi bi-app-indicator px-2 py-1 rounded-md bg-blue-600"></i>
          <h1 class="font-bold text-gray-200 text-[15px] ml-3">READER.PLAY</h1>
          <i
            class="bi bi-x cursor-pointer ml-28 lg:hidden"
            onclick="openSidebar()"
          ></i>
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>
      </div>
      <div
        class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white"
      >
        <i class="bi bi-search text-sm"></i>
        <input
          type="text"
          placeholder="Search"
          class="text-[15px] ml-4 w-full bg-transparent focus:outline-none"
        />
      </div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        <i class="bi bi-house-door-fill"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Dashboard</span>
      </div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        <i class="bi bi-bookmark-fill"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Book List</span>
      </div>
      <div class="my-4 bg-gray-600 h-[1px]"></div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        onclick="dropdown()"
      >
        <i class="bi bi-chat-left-text-fill"></i>
        <div class="flex justify-between w-full items-center">
          <span class="text-[15px] ml-4 text-gray-200 font-bold">Chatbox</span>
          <span class="text-sm rotate-180" id="arrow">
            <i class="bi bi-chevron-down"></i>
          </span>
        </div>
      </div>
      <div
        class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold"
        id="submenu"
      >
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          Social
        </h1>
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          Personal
        </h1>
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          Friends
        </h1>
      </div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        <i class="bi bi-box-arrow-in-right"></i>
        <a class="" href="login.html">
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
        </a>
      </div>
    </div>

    <script type="text/javascript">
      function dropdown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-0");
      }
      dropdown();

      function openSidebar() {
        document.querySelector(".sidebar").classList.toggle("hidden");
      }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  </body>
      <div class="p-4 xl:ml-80">
        <nav
          class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-1"
        >
          <div
            class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center"
          >
            <div class="capitalize">
              <nav aria-label="breadcrumb" class="w-max">
                <ol
                  class="flex flex-wrap items-center w-full bg-opacity-60 rounded-md bg-transparent p-0 transition-all"
                >
                  <li
                    class="flex items-center text-blue-gray-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-light-blue-500"
                  >
                    <a href="#">
                      <p
                        class="block antialiased font-sans text-sm leading-normal text-blue-900 font-normal opacity-50 transition-all hover:text-blue-500 hover:opacity-100"
                      >
                        dashboard
                      </p>
                    </a>
                    <span
                      class="text-gray-500 text-sm antialiased font-sans font-normal leading-normal mx-2 pointer-events-none select-none"
                      >/</span
                    >
                  </li>
                  <li
                    class="flex items-center text-blue-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-blue-500"
                  >
                    <p
                      class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal"
                    >
                      home
                    </p>
                  </li>
                </ol>
              </nav>
              <h6
                class=" ml-80 antialiased tracking-normal font-sans text-base font-bold leading-relaxed text-gray-900 "
              >
              PENGUNJUNG BUKU READER.PLAY
              </h6>
            </div>
            <div class="flex items-center">
              <div class="mr-auto md:mr-10 md:w-56">
                <div class="relative w-full min-w-[200px] h-10">
                </div>
              </div>
              <button
                class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 grid xl:hidden"
                type="button"
              >
                <span
                  class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    aria-hidden="true"
                    stroke-width="3"
                    class="h-6 w-6 text-blue-gray-500"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </span>
              </button>
              <button
                class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                type="button"
              >
                <span
                  class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    aria-hidden="true"
                    class="h-5 w-5 text-blue-gray-500"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </span>
              </button>
              <button
                aria-expanded="false"
                aria-haspopup="menu"
                id=":r2:"
                class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                type="button"
              >
                <span
                  class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    aria-hidden="true"
                    class="h-5 w-5 text-blue-gray-500"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </span>
              </button>
            </div>
          </div>
        </nav>

    <div>
      <button onclick="location.href='Addnew.php'" class="bg-blue-900 hover:bg-blue-900 text-white font-bold py-3 px-4 rounded">
        ADD NEW</button>
    </div>
    
        <div class="mt-12">
          <div class="container mx-auto py-8">
            <div class="overflow-x-auto">
              <table class="min-w-full border-collapse border border-gray-300">
                <thead class="bg-blue-900">
                  <tr>
                    <th
                      class="px-6 py-3 border-b-2 border-gray-300 text-left text-white font-semibold text-gray-600 uppercase tracking-wider"
                    >
                      ID NUMBER
                    </th>
                    <th
                      class="px-6 py-3 border-b-2 border-gray-300 text-left text-white font-semibold text-gray-600 uppercase tracking-wider"
                    >
                      PHONE NUMBER
                    </th>
                    <th
                      class="px-6 py-3 border-b-2 border-gray-300 text-left text-white font-semibold text-gray-600 uppercase tracking-wider"
                    >
                      VISITORS
                    </th>
                    <th
                      class="px-6 py-3 border-b-2 border-gray-300 text-left text-white font-semibold text-gray-600 uppercase tracking-wider"
                    >
                      BOOK TITLE
                    </th>
                    <th
                      class="px-6 py-3 border-b-2 border-gray-300 text-left text-white font-semibold text-gray-600 uppercase tracking-wider"
                    >
                      PUBLISHER
                    </th>
                    <th
                      class="px-6 py-3 border-b-2 border-gray-300 text-left text-white font-semibold text-gray-600 uppercase tracking-wider"
                    >
                      ACTION
                    </th>
                  </tr>
        </div>


      <?php
      // Periksa apakah ada data yang ditemukan
      if (mysqli_num_rows($result) > 0) {
          // Loop untuk menampilkan setiap baris data
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["ID_NUMBER"] . "</td>";
            echo "<td>" . $row["PHONE_NUMBER"] . "</td>";
            echo "<td>" . $row["VISITORS"] . "</td>";
            echo "<td>" . $row["BOOK_TITLE"] . "</td>";
            echo "<td>" . $row["PUBLISHER"] . "</td>";
            echo "<td>
            <button class='confirm-btn' onclick='confirmContact(" . $row['ID_NUMBER'] . ")' style='background-color: green; color: #fff; font-weight: bold; padding: 2px 8px; border-radius: 4px;'>CONFIRM</button>
            <button class='edit-btn' onclick='editContact(" . $row['ID_NUMBER'] . ")' style='background-color: blue; color: #fff; font-weight: bold; padding: 2px 8px; border-radius: 4px;'>EDIT</button>
            <button class='delete-btn' onclick='deleteContact(" . $row['ID_NUMBER'] . ")' style='background-color: red; color: #fff; font-weight: bold; padding: 2px 8px; border-radius: 4px;'>DELETE</button>
            </td>";
            echo "</tr>";
        }
        
      } else {
          echo "<tr><td colspan='9'>Tidak ada data</td></tr>";
      }
      ?>
      </tbody>
    </table>
  </div>

  <script src="script.js"></script>
  <script>
    document.getElementById('logout-btn').addEventListener('click', function() {
      // LOGIN
      window.location.href = 'login.html';
    });

    function confirmContact(ID_NUMBER) {
      // CONFIRM
      window.location.href = 'confirm_contactapps.php?id_number=' + ID_NUMBER;
    }

    function editContact(ID_NUMBER) {
      // EDIT
      window.location.href = 'edit_contactapps.php?id_number=' + ID_NUMBER;
    }

    function deleteContact(ID_NUMBER) {
      // Confirmation dialog
      if (confirm('Apakah Anda yakin ingin menghapus kontak ini?')) {
        // Send request to delete_contact.php with contact ID as parameter
        window.location.href = 'delete_contactapps.php?id_number=' + ID_NUMBER;
      }
    }
  </script>
          <div class="text-blue-gray-600">
            <footer class="py-2">
              <div
                class="flex w-full flex-wrap items-center justify-center gap-6 px-2 md:justify-between"
              >
                <p
                  class="block antialiased font-sans text-sm leading-normal font-normal text-inherit"
                >
                  @MembacaBukuBukaIlmu
                </p>
                <ul class="flex items-center gap-4">
                  <li>
                    <a
                      href="https://www.creative-tim.com"
                      target="_blank"
                      class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500"
                      >Blog</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://www.creative-tim.com/blog"
                      target="_blank"
                      class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500"
                      >About</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://www.creative-tim.com/license"
                      target="_blank"
                      class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500"
                      >Contact</a
                    >
                  </li>
                </ul>
              </div>
            </footer>
          </div>
        
      </div>
    </div>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  </body>
</html>

