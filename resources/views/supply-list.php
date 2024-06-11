<?php

include_once "../../app/Controller.php";

$controller = new Controller();

if(isset($_GET['add'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $category = $_POST['category'];
    $image = $_POST['image'];

    if($category == "Laptop") {
        $idcategory = 1;
    } else if($category == "Desktop") {
        $idcategory = 2;
    } else {
        $idcategory = 3;
    }
    
    $controller->addData($name, $price, $stock, $idcategory, $image);
    header("Location: supply-list.php");

} else 

$dataCatLaptop = $controller->getDataSupplyLaptop();
$dataCatDesktop = $controller->getDataSupplyDesktop();
$dataCatGadget = $controller->getDataSupplyGadget();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script> 
        document.createElement("dataLaptop");
        document.createElement("dataDesktop");
        document.createElement("dataGadget");
        document.createElement("dataPreview");
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
    <!-- Category Section -->

    <div class="h-screen">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-12">

                <div class="flex justify-between px-8">
                    <h2 class="text-2xl font-bold text-gray-900">Our Collections</h2>
                    <a data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="p-2 rounded-lg border border-black border-2 hover:bg-black hover:text-white hover:shadow-lg" id="sellOption" href="#sellItem">Want to sell your item?</a>
                </div>

                <!-- Category Content -->

                <div class="">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-6">

                    <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                        <div class="group relative">
                        <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="https://i.pinimg.com/564x/91/2a/83/912a83b197621e8432c6062d96945b56.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a id="laptopTrigger" href="#showLaptop">
                            <span class="absolute inset-0"></span>
                            Laptop
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Laptop accessories to help your flexibility</p>
                        </div>
                        <div class="group relative">
                        <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="https://i.pinimg.com/564x/5d/6c/bc/5d6cbcc1410cbcd8831505e3dbd17d82.jpg" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a id="desktopTrigger" href="#showDesktop">
                            <span class="absolute inset-0"></span>
                            PC Desktop
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Fulfill your Desktop needs</p>
                        </div>
                        <div class="group relative">
                        <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="https://i.pinimg.com/564x/b3/67/81/b3678119570da400ff2cd5765f28507b.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a id="gadgetTrigger" href="#showGadget">
                            <span class="absolute inset-0"></span>
                            Gadget
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Grab the helpfull gadget to make your life easier</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- ... -->


                <!-- Data Laptop -->

                <div class="mt-6 grid grid-cols-3 gap-y-6 gap-x-6 space-y-0 px-8">
        
                    
                    <?php 

                        if(!empty($dataCatLaptop)) {

                            foreach ($dataCatLaptop as $row) {
            
                    ?>
                                        
                    <dataLaptop class="hidden">
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                            <a href="#">
                                <img class="p-4 rounded-t-lg" src="<?= $row["GAMBAR_SUPPLY"]; ?>" alt="" />
                            </a>
                            <div class="p-4">
                                <a href="#">
                                    <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900"><?= $row["NAMA_SUPPLY"]; ?></h5>
                                </a>
                                <div class="mb-3">
                                    <p class="mb-3 text-lg font-bold text-gray-700">Rp <?= $row["HARGA_SUPPLY"]; ?></p>

                                    <?php

                                    if(isset($row["STOK_SUPPLY"]) && $row["STOK_SUPPLY"] >= 50) {
                                        echo '<span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">' . $row["STOK_SUPPLY"] . '</span>';
                                    } else if(isset($row["STOK_SUPPLY"]) && $row["STOK_SUPPLY"] < 50 && $row["STOK_SUPPLY"] >= 30) {
                                        echo '<span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">' . $row["STOK_SUPPLY"] . '</span>';
                                    } else {
                                        echo '<span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">' . $row["STOK_SUPPLY"] . '</span>';
                                    }
                                    ?>
                                    
                                    <p class="mt-3 max-w-max text-white bg-gradient-to-br from-green-400 to-blue-600 font-medium rounded-lg text-sm p-2">Laptop</p>
                                
                                </div>

                                <a href="buy-supply.php?act=showPreview&id=<?= $row["ID_BARANG"]; ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Show preview
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </a>
    
                            </div>
                        </div>
                    </dataLaptop>
                        
                    <?php

                        }

                    } else {
                        echo "No data available";
                    }
                    
                    ?>
        
                </div>

                <!--  -->

                <!-- Data Desktop -->

                <div class="mt-6 grid grid-cols-3 gap-y-6 gap-x-6 space-y-0">
                                    
                        <?php 

                            if(!empty($dataCatDesktop)) {

                                foreach ($dataCatDesktop as $row) {

                        ?>
                                            
                        <dataDesktop class="hidden">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                                <a href="#">
                                    <img class="p-4 rounded-t-lg" src="<?= $row["GAMBAR_SUPPLY"]; ?>" alt="" />
                                </a>
                                <div class="p-4">
                                    <a href="#">
                                        <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900"><?= $row["NAMA_SUPPLY"]; ?></h5>
                                    </a>
                                    <div class="mb-3">
                                        <p class="mb-3 text-lg font-bold text-gray-700">Rp <?= $row["HARGA_SUPPLY"]; ?></p>

                                        <?php

                                        if(isset($row["STOK_SUPPLY"]) && $row["STOK_SUPPLY"] >= 50) {
                                            echo '<span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">' . $row["STOK_SUPPLY"] . '</span>';
                                        } else if(isset($row["STOK_SUPPLY"]) && $row["STOK_SUPPLY"] < 50 && $row["STOK_SUPPLY"] >= 30) {
                                            echo '<span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">' . $row["STOK_SUPPLY"] . '</span>';
                                        } else {
                                            echo '<span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">' . $row["STOK_SUPPLY"] . '</span>';
                                        }
                                        ?>
                                        
                                        <p class="mt-3 max-w-max text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 font-medium rounded-lg text-sm p-2">Desktop</button>
                                    
                                    </div>
                                    <a href="buy-supply.php?act=showPreview&id=<?= $row["ID_BARANG"]; ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                        Show preview
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </dataDesktop>

                            
                        <?php

                            }

                        } else {
                            echo "No data available";
                        }
                        
                        ?>


            </div>

            <!-- ... -->

            <!-- Data Gadget -->

            <div class="mt-6 grid grid-cols-3 gap-y-6 gap-x-6 space-y-0">
                       
                    <?php 

                        if(!empty($dataCatGadget)) {

                            foreach ($dataCatGadget as $row) {

                    ?>
                                        
                    <dataGadget class="hidden">
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                            <a href="#">
                                <img class="p-4 rounded-t-lg" src="<?= $row["GAMBAR_SUPPLY"]; ?>" alt="" />
                            </a>
                            <div class="p-4">
                                <a href="#">
                                    <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900"><?= $row["NAMA_SUPPLY"]; ?></h5>
                                </a>
                                <div class="mb-3">
                                    <p class="mb-3 text-lg font-bold text-gray-700">Rp <?= $row["HARGA_SUPPLY"]; ?></p>

                                    <?php

                                    if(isset($row["STOK_SUPPLY"]) && $row["STOK_SUPPLY"] >= 50) {
                                        echo '<span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">' . $row["STOK_SUPPLY"] . '</span>';
                                    } else if(isset($row["STOK_SUPPLY"]) && $row["STOK_SUPPLY"] < 50 && $row["STOK_SUPPLY"] >= 30) {
                                        echo '<span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">' . $row["STOK_SUPPLY"] . '</span>';
                                    } else {
                                        echo '<span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">' . $row["STOK_SUPPLY"] . '</span>';
                                    }
                                    ?>
                                    
                                    <p class="mt-3 max-w-max text-white bg-gradient-to-br from-pink-500 to-orange-400 font-medium rounded-lg text-sm p-2">Gadget</button>
                               
                                </div>

                                <a href="buy-supply.php?act=showPreview&id=<?= $row["ID_BARANG"]; ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Show preview
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </dataGadget>

                        
                    <?php

                        }

                    } else {
                        echo "No data available";
                    }
                    
                    ?>

            <!-- ... -->
        </div>
    </div>

    <!-- ... -->

    <!-- Sell Modal -->

    <!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Sell Item
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="?add" method="POST" class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type product name" required>
                        </div>
                        <div class="col-span-2">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
                            <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="150000" required>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="stock" class="block mb-2 text-sm font-medium text-gray-900">Stock</label>
                            <input type="number" name="stock" id="stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="50" required>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                            <select name="category" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
                                <option selected="">Select category</option>
                                <option value="Laptop">Laptop</option>
                                <option value="Desktop">PC Desktop</option>
                                <option value="Gadget">Gadget</option>
                            </select>
                        </div>
                        <div class="col-span-2">
                            <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Product image</label>
                            <textarea name="image" id="image" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Insert image URL here" required></textarea>                    
                        </div>
                    </div>
                    <button id="sellButton" type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        Sell product
                    </button>
                </form>
            </div>
        </div>
    </div> 
    <!--  -->
    
    
    <!-- Alert -->
    
    <!-- ... -->

    <script>
   

   $(document).ready(function(){

        $("#laptopTrigger").click(function(){
            $("dataLaptop").show();
            $("dataDesktop").hide();    
            $("dataGadget").hide();
        });

        $("#desktopTrigger").click(function(){
            $("dataLaptop").hide();
            $("dataGadget").hide();
            $("dataDesktop").show();
        });

        $("#gadgetTrigger").click(function(){
            $("dataLaptop").hide();
            $("dataGadget").show();
            $("dataDesktop").hide();
        });
        
    });


    </script>

</body>

</html>