<?php
  session_start();
  include_once "../../app/Controller.php";
  
  $controller = new Controller();

  if (!isset($_SESSION['loginMechanic']) || $_SESSION['loginMechanic'] !== true) {
      header("location: .././mechanic/login.php");
      exit;
  }

  if (isset($_GET['act']) && $_GET['act'] == 'finishService') {
        $id = $_GET['id'];
        $controller->deleteRequest($id);
  }

  $dataRequest = $controller->showrequest();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Style Review Users -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="dashboard-review-style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Mechanic Dashboard</title>
</head>
<body>

    <!-- Admin Header Section -->
    <section class="pb-8 bg-white dark:bg-gray-900 h-full bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            
            <div class="items-center gap-4 mb-8">
                <div class="grid place-content-center mb-4">
                    <img class="w-10 h-10 rounded-full object-fit" src="../../storage/asset/dummy-profile.jpg" alt="">
                </div>
                <div class="font-medium dark:text-white">
                    <div class="text-lg">
                        <?php
                        if (isset($_SESSION['username'])) {
                            $username = $_SESSION['username'];
                        } else {
                            $username = "Guest";
                        }
                        echo $username; 
                        ?>
                        </div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">Mechanic ID :
                    <?php
                        if (isset($_SESSION['username'])) {
                            $user_id = $_SESSION['user_id'];
                        }
                        echo $user_id; 
                        ?>
                    </div>
                    <div class="mt-4">
                        <a href="../logout.php?act=mechanic" class="w-full text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Log Out</a>
                    </div>
                </div>
            </div>

            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">CompSafe Mechanic Dashboard</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200">Here at CompSafe we provide professional mechanic that can unlock long-term value to fulfill your needs.</p>
            <form class="w-full max-w-md mx-auto">   
                <label for="default-email" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 rtl:inset-x-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="email" id="default-email" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search queue.." required />
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>
        </div>
        <div class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-0"></div>

        <!-- Table for Data Supply -->
        <div class="mx-52 max-w-screen-xl relative overflow-x-auto rounded-lg">
        <?php 

            if(!empty($dataRequest)) {

            ?>

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 rounded-lg">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Pelanggan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Merk Device
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($dataRequest as $row) {
                        echo "<tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">";
                        echo "<th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">{$row['ID_SERVICE']}</th>";
                        echo "<td class=\"px-6 py-4\">{$row['NAMA_PELANGGAN']}</td>";
                        echo "<td class=\"px-6 py-4\">{$row['MERK_DEVICE']}</td>";
                        echo "<td class=\"px-6 py-4\">{$row['DESKRIPSI']}</td>";
                        echo "<td class=\"px-6 py-4\"><a href=\"mechanic-dashboard.php?act=finishService&id=" . $row["ID_SERVICE"] . "\" class=\"font-medium text-blue-600 dark:text-blue-500 hover:underline\">Tandai Selesai</a></td>";                        
                        echo "</tr>";
                    }
                    ?>
                </tbody>

            </table>

            <?php


            } else {
                echo "No data available";
            }
                    
            ?>
        </div>
    </section>
    

</body>
</html>