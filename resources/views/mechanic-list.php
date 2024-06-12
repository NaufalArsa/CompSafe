<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mechanic Application</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="overflow-x-hidden">
<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="hidden md:block">
                    <div class="ml-5 flex items-baseline space-x-4">
                        <a href="#" class="text-white rounded-md px-3 py-2 text-lg font-bold">SERVICE - IT</a>
                        <!-- <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Team</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Projects</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Calendar</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Reports</a> -->
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="  flex items-center">
                    <!-- <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                      <span class="absolute -inset-1.5"></span>
                      <span class="sr-only">View notifications</span>
                      <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                      </svg>
                    </button> -->
                    <h3 class="text-white block text-base font-medium">Hello,
                        <?php

                        if(isset($_SESSION['username'])) {
                            $username = $_SESSION['username'];
                        } else {
                            $username = "Guest";
                        }

                        echo $username; ?></h3>

                    <a href="#"><i class="ml-5 h-8 w-8 grid place-self-center p-2 pl-2.5 hover:text-gray-800 hover:bg-white hover:rounded-full hover:duration-700 fa-regular fa-user text-white"></i></a>
                    <!-- <img class="ml-5 h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""> -->
                    <!-- Profile dropdown -->
                    <!-- <div class="relative ml-3">
                      <div>
                        <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                          <span class="absolute -inset-1.5"></span>
                          <span class="sr-only">Open user menu</span>
                        </button>
                      </div>
                      <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                      </div>
                    </div> -->
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Reports</a>
        </div>
        <div class="border-t border-gray-700 pb-3 pt-4">
            <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                    <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                </div>
                <button type="button" class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </button>
            </div>
            <div class="mt-3 space-y-1 px-2">
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
            </div>
        </div>
    </div>
</nav>

<div class="w-screen bg-gradient-to-tl from-stone-100 via-transparent to-violet-200">
    <div class="bg-[url('../../storage/asset/mechanicBack.png')] bg-top bg-no-repeat">
        <div class="font-sans container mx-auto max-w-7xl">
            <div class="px-8 leading-8 text-center py-48">
                <h1 class="text-5xl font-bold">Be Our Mechanic!</h1>
                <p class="mt-10"> We're seeking a skilled Mechanic to keep things running smoothly. <br>Apply now to be the mastermind behind our service as a Mechanic</p>
                <button class="rounded-md px-3 py-2 text-md ring-1 ring-inset ring-indigo-600 font-semibold text-indigo-600 shadow-sm hover:bg-indigo-500 hover:text-white whitespace-nowrap mt-5" onclick="document.querySelector('#first-name').focus()">Apply Now</button>

            </div>
            <div class="px-8 grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-4">
                    <div class="p-10 ring-1 rounded-lg bg-slate-800 text-gray-200">
                        <h2 class="text-3xl font-bold mb-5">How to Apply</h2>
                        <ul class="list-decimal text-slate-400">
                            <li class="m-3">Make sure you have read all the description and qualification</li>
                            <hr class="border-slate-600 mx-8">
                            <li class="m-3">Fill your name and contact in the  <a href="">form below</a></li>
                            <hr class="border-slate-600 mx-8">
                            <li class="m-3">Click Apply</li>
                            <hr class="border-slate-600 mx-8">
                            <li class="m-3">You will get your Application ID. Save it for later</li>
                            <hr class="border-slate-600 mx-8">
                            <li class="m-3">To edit or cancel your application, go to Edit Application and enter your Application ID</li>
                            <hr class="border-slate-600 mx-8">
                            <li class="m-3">After applying, we will contact you further about your application. This may takes up to 2 weeks</li>
                        </ul>
                    </div>

                </div>
                <div class="col-span-12 md:col-span-8">
                    <div class="p-10 rounded-lg">
                        <h2 class="text-3xl font-bold mb-5">What will you do?</h2>
                        <p class="text-gray-500">
                            As a Computer Service Mechanic at CompSafe, you will be an integral part
                            of our dedicated team, responsible for delivering exceptional computer services
                            to our clients. This role combines technical expertise with a customer-centric
                            approach, ensuring that our clients' computer systems operate at peak performance.
                            If you are a tech-savvy problem solver with excellent
                            interpersonal skills, we invite you to apply for this exciting opportunity.
                        </p>
                        <h2 class="text-3xl font-bold my-5">Qualifications</h2>
                        <ul class="list-disc text-gray-500">
                            <li>Proven experience as a computer service technician or in a similar role.</li>
                            <li>In-depth knowledge of computer hardware, software, and networking.</li>
                            <li>Exceptional troubleshooting and problem-solving skills.</li>
                            <li>Customer-focused attitude with excellent interpersonal and communication skills.</li>
                            <li>Familiarity with various operating systems, including Windows, MacOS, and Linux.</li>
                        </ul>
                    </div>

                    <hr class="mx-20">

                    <div class="p-10 rounded-md">
                        <h2 class="text-3xl font-bold mb-5">Apply here</h2>
                        <form action="mechanic-apply.php" id="form" method="post">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                                    <div class="mt-2">
                                        <input type="text" name="first-name" id="first-name" placeholder="John" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 px-3" required>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                                    <div class="mt-2">
                                        <input type="text" name="last-name" id="last-name" placeholder="Doe" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 px-3" required>
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="contact" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                                    <div class="mt-2">
                                        <input id="contact" name="contact" type="text" placeholder="+62 812-3456-7890" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 px-3" required>
                                    </div>
                                </div>


                                <div class="sm:col-span-6">
                                    <label for="contact" class="block text-sm font-medium leading-6 text-gray-900">Position</label>
                                    <div class="mt-2">
                                        <select name="position" id="position" class="lock w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 px-3">
                                            <option value="1">Laptop Hardware Specialist</option>
                                            <option value="2">Desktop Hardware Specialist</option>
                                            <option value="3">Windows Software Specialist</option>
                                            <option value="4">Mac Software Specialist</option>
                                            <option value="5">Linux Software Specialist</option>
                                            <option value="6">Gadget Specialist</option>
                                        </select>
                                    </div>
                                </div>

                                <input type="hidden" value="add" name="act" id="action">
                                <input type="hidden" value="0" name="currentID" id="currentID">

                                <div class="mt-6 flex items-center gap-x-3" id="applyButton">
                                    <button type="submit" id="apply" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500" onclick="">Apply</button>
                                    <button id="edit" class="rounded-md px-3 py-2 text-sm ring-1 ring-inset ring-indigo-600 font-semibold text-indigo-600 shadow-sm hover:bg-indigo-500 hover:text-white whitespace-nowrap" onclick="toggleVerification()">Edit Application</button>
                                </div>

                                <div class="mt-6 flex items-center gap-x-3 hidden" id="editButton">
                                    <button type="submit" id="save" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 whitespace-nowrap" onclick="">Save Changes</button>
                                    <button id="delete" class="rounded-md px-3 py-2 text-sm ring-1 ring-inset ring-red-600 font-semibold text-red-600 shadow-sm hover:bg-red-500 hover:text-white whitespace-nowrap" onclick="toggleDelete()">Delete Application</button>
                                </div>

                            </div>
                            <p class="text-sm text-slate-500 mt-4">*Application process may takes up to 2 weeks. We will contact you further about your application. You can edit/cancel your application during this time</p>

                    </div>
                    </form>


                </div>

            </div>
        </div>
    </div>
</div>



<div class="relative z-10 invisible" id="confirmation" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-md">

                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="flex item-center justify-center">
                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                            <span class="material-symbols-outlined text-green-800">done</span>
                        </div>
                    </div>

                    <div class="sm:flex sm:items-start mt-2">
                        <div class="mt-3 text-center sm:ml-4 sm:mt-0">
                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">You have successfully applied!</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">Save your Application ID (don't share it with anyone). We will contact you further about your application!</p>
                            </div>
                            <div class="mt-2">
                                <p class="text-sm text-red-500">Your Application ID: <span class="font-bold"><?php echo $GLOBALS['id'] ?></span></p>
                                <p class="text-sm text-red-500">(You will need this to edit/delete your application)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 pb-3 sm:px-6 mb-3">
                    <button type="button" class=" w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500" onclick="toggleConfirmation()">Got It</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative z-10 invisible" id="verification" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-md">
                <form action="mechanic-apply.php" method="post">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4 sm:flex sm:items-start mt-2">
                        <div class="mt-3 text-center sm:mt-0 w-full">
                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Please enter your contact & ID</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">To verify that it's really you, please enter your phone number & Application ID</p>
                            </div>
                            <div class="mt-6 flex justify-between items-center">
                                <input id="contactVerif" name="contactVerif" type="text" placeholder="+62 812-3456-7890" class="block w-60 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 px-3" required>
                                ID:
                                <input id="idVerif" name="idVerif" type="text" placeholder="1" class="block w-24 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 px-3" required>
                                <input type="hidden" name="act" value="find">
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="submit" class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 sm:ml-3 sm:w-auto" onclick="">Confirm</button>
                        <button type="button" id="cancel" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto" onclick="cancelVerification()">Cancel</button>
                        <div class="w-full flex items-center invisible" id="notFound">
                            <span class="material-symbols-outlined  text-red-500 mr-1">error</span>
                            <p class="text-xs text-red-500"> Application not found</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="relative z-10 invisible" id="editConfirmation" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-md">

                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="flex item-center justify-center">
                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                            <span class="material-symbols-outlined text-green-800">done</span>
                        </div>
                    </div>

                    <div class="sm:flex sm:items-start mt-2">
                        <div class="mt-3 text-center sm:ml-4 sm:mt-0">
                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">You have successfully edited your application!</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">If you want to edit/delete your application later, use the same Application ID and latest edited phone number</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 pb-3 sm:px-6 mb-3">
                    <button type="button" class=" w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500" onclick="toggleEditConfirmation()">Got It</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative z-10 invisible" id="deleteConfirmation" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-md">

                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="flex item-center justify-center">
                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-yellow-100 sm:mx-0 sm:h-10 sm:w-10">
                            <span class="material-symbols-outlined text-yellow-800">warning</span>
                        </div>
                    </div>

                    <div class="sm:flex sm:items-start mt-2">
                        <div class="mt-3 text-center sm:mx-4 sm:mt-0">
                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Are you sure you want to delete your application?</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">This action cannot be undone. You have to re-apply if you change your mind later</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto" onclick="acceptDelete()">Confirm</button>
                    <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto" onclick="toggleDelete()">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative z-10 invisible" id="deleted" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-md">

                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="flex item-center justify-center">
                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                            <span class="material-symbols-outlined text-green-800">done</span>
                        </div>
                    </div>

                    <div class="sm:flex sm:items-start mt-2">
                        <div class="mt-3 text-center sm:ml-4 sm:mt-0">
                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Your application has been deleted!</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">Please note that you have to re-apply if you change your mind later</p>
                            </div>
                            <div class="mt-2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 pb-3 sm:px-6 mb-3">
                    <button type="button" class=" w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500" onclick="toggleDeleted()">Got It</button>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="shadow max-auto px-8 bg-gray-800 mt-16">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Kelompok 2</a>. All Rights Reserved.</span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Naufal</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Ryan</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Arvin</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Hali</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Alam</a>
            </li>
        </ul>
    </div>
</footer>

<script>


    $(document).ready(function() {
        $("#edit").click(function(event) {
            event.preventDefault();
        });

        $("#delete").click(function(event) {
            event.preventDefault();
        });

    });


    var id = <?php echo $GLOBALS['id'] ?>;
    var act = "<?php echo $GLOBALS['act'] ?>";

    if (id > 0) {
        $("#confirmation").removeClass("invisible");
    }

    if (act === "search") {
        if (<?php echo $GLOBALS['found'] ?>) {
            var name = "<?php echo $GLOBALS['name']?>";
            var kontak = "<?php echo $GLOBALS['contact']?>";
            var idData = "<?php echo $GLOBALS['idData']?>";
            var position = "<?php echo $GLOBALS['position']?>";
            var arrName = name.split(" ");
            var firstname = arrName[0];
            var lastname = "";
            for (let i = 1; i < arrName.length; i++) {
                lastname += arrName[i] + " ";
            }
            $("#applyButton").addClass("hidden");
            $("#editButton").removeClass("hidden");
            $("#first-name").val(firstname).focus();
            $("#last-name").val(lastname);
            $("#contact").val(kontak);
            $("#position").val(position);
            $("#action").val("edit");
            $("#currentID").val(idData);
        } else {
            $("#verification").removeClass("invisible");
            $("#notFound").removeClass("invisible");
        }
    }

    if (act === "edit") {
        $("#editConfirmation").removeClass("invisible");
    }

    if (act === "delete") {
        $("#deleted").removeClass("invisible");
    }

    function coba() {
        alert(id + " " + act);
    }

    function toggleConfirmation() {
        id = 0;
        $("#confirmation").addClass("invisible");
        <?php unset($_POST); ?>
    }

    function cancelVerification() {
        $("#verification").addClass("invisible");
        $("#contactVerif").val('');
        $("#idVerif").val('');
    }

    function toggleEditConfirmation() {
        $("#editConfirmation").addClass("invisible");
    }

    function toggleVerification() {
        $("#notFound").addClass("invisible");
        if ($("#verification").hasClass("invisible")) {
            $("#verification").removeClass("invisible");
        } else {
            location.reload();
        }
    }

    function toggleDelete() {
        if ($("#deleteConfirmation").hasClass("invisible")) {
            $("#deleteConfirmation").removeClass("invisible");
            $("#action").val("delete");
        } else {
            $("#deleteConfirmation").addClass("invisible");
            $("#action").val("edit");
        }
    }

    function acceptDelete() {
        $("#form").submit();
    }

    function toggleDeleted() {
        if ($("#deleted").hasClass("invisible")) {
            $("#deleted").removeClass("invisible");
        } else {
            $("#deleted").addClass("invisible");
        }
    }

</script>

</body>
</html>
