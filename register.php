<?php
session_start();
include 'database/connection.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $query = "INSERT INTO user (USERNAME, PASSWORD, ROLE) VALUES (?, SHA(?), 'U')";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    header("Location: user/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>Login</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <div class="grid p-6 h-screen w-screen">
            <div class="place-self-center flex justify-center items-center">
                <img class="scale-90" src="storage/asset/glare-cybersecurity-and-data-protection-mobile-device-security-1.png" alt="">
                <div class="login-form w-72">
                    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 bg-white-600 rounded-xl shadow-lg">
                        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                            <h2 class="mt-2 text-center text-3xl font-bold tracking-tight text-gray-900">Register</h2>
                        </div>
                        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                            <form class="space-y-6" action="register.php" method="POST">
                                <div>
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                                    <div class="mt-2">
                                    <input id="username" name="username" type="username" autocomplete="username" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 px-2 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center justify-between">
                                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                                    </div>
                                    <div class="mt-2">
                                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                               
                                <!-- <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-white bg-indigo-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center " type="button">Select Role <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                                </button> -->

                                <!-- Dropdown menu -->
                                <!-- <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm dark:text-black" aria-labelledby="dropdownHoverButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">User</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Admin</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mechanic</a>
                                    </li>
                                    </ul>
                                </div> -->

                                <div>
                                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>