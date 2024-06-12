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
    <title>Document</title>
</head>
<body class="max-h-max">
<div class="min-h-full">
  <!-- Navbar -->
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="hidden md:block">
            <div class="ml-5 flex items-baseline space-x-4">
              <a href="#" class="text-white rounded-md px-3 py-2 text-lg font-bold">CompSafe</a>
              <!-- <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Team</a>
              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Projects</a>
              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Calendar</a>
              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Reports</a> -->
            </div>
          </div>
        </div>
        <div class="hidden md:block">
            <a href="../register.php" class="text-white bg-indigo-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Get started</a>
            <a href="../user/login.php" class="text-white hover:text-indigo-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium  text-sm px-4 py-2 text-center">Login</a>
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
  <!-- ... -->

  <main>
    <!-- Send for Service Request -->
    <div class="px-6 lg:px-8">
      <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="mx-auto max-w-2xl py-20 sm:py-48 lg:py-28">
        <div class="text-center">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Leave Your IT Needs to CompSafe</h1>
          <p class="mt-10 text-lg leading-8 text-gray-600">The innovative solution you have been looking for to fix any of your IT problems. No need to hesitate anymore, Trust us!</p>
          <div class="mt-14 flex items-center justify-center gap-x-6">
            <a href="views/service-request.php" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Send Request for Service</a>
          </div>
        </div>
      </div>
      <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
    </div>
    <!-- ... -->

    <!-- Company Section -->
    <div class="mx-auto max-w-7xl px-8 py-10">
      <div class="bg-slate-900 p-20 rounded-lg pb-24 mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-center text-lg font-semibold leading-8 text-white">Trusted by world's our best colleagues</h2>
        <div class="mx-auto mt-10 grid max-w-lg grid-cols-1 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-2 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-3">
          <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://filkom.ub.ac.id/wp-content/uploads/2021/03/header_id.png.pagespeed.ce_.ssq-CPanQx.png" alt="Transistor" width="158" height="48">
          <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://ub.ac.id/wp-content/uploads/2023/08/logo-ub-78-1.png" alt="Reform" width="158" height="48">
          <img class="col-span-2 max-h-12 w-full scale-125 object-contain lg:col-span-1" src="https://filkom.ub.ac.id/wp-content/uploads/2021/03/ti.png" alt="Tuple" width="158" height="48">
        </div>
      </div>
    </div>

    <!-- ... -->

    <!-- Fitur Beli Supply -->
      <div class="relative overflow-hidden">
        <div class="pb-80 pt-8 sm:pb-40 sm:pt-24 lg:pb-12 lg:pt-12">
          <div class="grid grid-cols-2 gap-x-40 mx-auto max-w-7xl px-8">
            <!-- Decorative image grid -->
              <div class="">
                <div class="pointer-events-none lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                  <div class="">
                    <div class="flex items-center space-x-6 lg:space-x-8">
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                          <img src="https://cdn.mos.cms.futurecdn.net/cd8789b58034aacd16e60cfb73c2e74a-650-80.jpg.webp" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://i.pinimg.com/736x/d4/4f/d0/d44fd0a3be470fce27f13d772d46124d.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://i.pinimg.com/564x/a5/29/61/a529610016c5d6e1542f1b4139fdc616.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://i.pinimg.com/564x/52/66/fc/5266fc0868d05141a6c151b2d8b9624f.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://i.pinimg.com/236x/2b/57/fc/2b57fc98b0bc02655407c4984fe8b604.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://i.pinimg.com/236x/fd/72/7d/fd727db859403b1d94373ec4f118cd3f.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://i.pinimg.com/236x/ab/86/c5/ab86c5ac8703c9490865bc9c3094c23c.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="place-self-center sm:max-w-lg">
                <h1 class="text-4xl font-bold tracking-tight leading-loose text-gray-900 sm:text-6xl">Supply for your PC Desktop</h1>
                <p class="mt-10 text-xl text-gray-500">We also offer a range of supplies designed to meet your essential PC needs, assisting you in maintaining and optimizing your computer.</p>
                <a href="views/supply-list.php" class="mt-10 inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">Find your supply</a>
              </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <!-- ... -->

  <!-- Fitur Lowongan Mekanik -->
  <div class="bg-white pt-24">
  <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
    <div class="max-w-2xl">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Meet our Mechanics</h2>
      <p class="mt-6 text-lg leading-8 text-gray-600">We provide you with our best mechanic so you dont have to worry. We can fix your problems!</p>
      <a href="views/mechanic-apply.php" class="mt-10 inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">Apply for Mechanic</a>
    </div>
    <ul role="list" class="ml-20 grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
      <li>
        <div class="flex items-center gap-x-6">
          <img class="h-16 w-16 rounded-full" src="https://tovanidesign.com/wp-content/uploads/2019/02/C-_Users_Chrystina_Dropbox_tovani-design_size-examples-of-portraits_for-web_1-1-aspect-ratio-prints-at-square-for-social-media-for-web-photo-by-chrysti-tovani.jpg" alt="">
          <div>
            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">John Doe</h3>
            <p class="text-sm font-semibold leading-6 text-indigo-600">Laptop Mechanic</p>
          </div>
        </div>
      </li>

      <!-- More people... -->
      <li>
        <div class="flex items-center gap-x-6">
          <img class="h-16 w-16 rounded-full" src="https://cdn.theconversation.com/avatars/1286529/width238/Person_Hannibal_001.jpg" alt="">
          <div>
            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Jane Smith</h3>
            <p class="text-sm font-semibold leading-6 text-indigo-600">smartphone Mechanic</p>
          </div>
        </div>
      </li>

      <li>
        <div class="flex items-center gap-x-6">
          <img class="h-16 w-16 rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR19aUjtXfsvpsjkBgmusLdnZfYQ1mtiLi_VQ&usqp=CAU" alt="">
          <div>
            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Bob Johnson</h3>
            <p class="text-sm font-semibold leading-6 text-indigo-600">Printer Mechanic</p>
          </div>
        </div>
      </li>

    </ul>
  </div>
  <!-- ... -->

  <!-- Statistics -->
  <div class="mx-auto py-40 px-8 max-w-7xl">
    <div class="py-4 shadow-xl rounded-lg bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 ">
      <!-- <img class="animate-bounce z-50 translate-x-20 h-12 w-12" src="https://img.freepik.com/free-vector/3d-metal-star-isolated_1308-117755.jpg?w=740&t=st=1702025836~exp=1702026436~hmac=8caa7e9d8222451cd62cf4e0dd7e1b03c1c43b834a3432878b6fc1cb0e7e198b" alt=""> -->
      <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
        <div class="mx-auto flex max-w-xs flex-col gap-y-4">
          <dt class="text-base leading-7 text-white">Trust from our customers</dt>
          <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">100%</dd>
        </div>
        <div class="mx-auto flex max-w-xs flex-col gap-y-4">
          <dt class="text-base leading-7 text-white">Our daily income</dt>
          <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">Rp 1 Million</dd>
        </div>
        <div class="mx-auto flex max-w-xs flex-col gap-y-4">
          <dt class="text-base leading-7 text-white">Transactions succeed</dt>
          <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">200</dd>
        </div>
      </dl>
    </div>
  </div>
  <!-- ... -->

  <!-- Footer -->

  <footer class="shadow max-auto px-8 bg-gray-800">
      <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Kelompok 2</a>. All Rights Reserved.</span>
          <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Naufal</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Ghatfan</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Zani</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Yusuf</a>
            </li>
          </ul>
      </div>
  </footer>

  <!-- ... -->

</div>


<script>
      const swiper = new Swiper('.mySwiper', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
      });
</script>

</body>
</html>