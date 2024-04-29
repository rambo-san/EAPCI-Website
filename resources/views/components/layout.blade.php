<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EAPCI</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body class="overflow-x-hidden"> {{--  add overflow-x-hidden to prevent horizontal scrolling --}}
    <!--Navbar Start-->
<nav class="fixed top-0 w-full z-50 border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
    <div  class=" py-2  flex flex-wrap items-center justify-between mx-auto p-1 bg-headblue"> 
            <div class="flex space-x-4 ml-auto mx-20 sm:justify-center ">
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                          <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                      </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                          <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                      </svg>
                    <span class="sr-only">Discord community</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                      <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                  </svg>
                    <span class="sr-only">Twitter page</span>
                </a>
            </div>
    </div>
    <div class="max-w-screen-xxl flex flex-wrap items-center justify-between mx-auto p-5 px-20  bg-coreblue">
        
      <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-darkblue">EAPCI</span>
      </a>
      <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
        <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
            <li>
                <a href="/" class="block py-2 px-3 md:p-0 text-gray-900 rounded transition-transform {{ request()->is('/') ? 'sm:text-blue-700' : 'md:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }} hover:bg-transparent hover:scale-105">Home</a>
            </li>
            <li>
                <a href="courses" class="block py-2 px-3 md:p-0 text-gray-900 rounded transition-transform {{ request()->is('courses') ? 'sm:text-blue-700' : 'md:bg-transparent md:hover:text-blue- dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }} hover:bg-transparent hover:scale-105">Courses</a>
            </li>
            <li>
                <a href="about" class="block py-2 px-3 md:p-0 text-gray-900 rounded transition-transform {{ request()->is('about') ? 'sm:text-blue-700' : 'md:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }} hover:bg-transparent hover:scale-105">About Us</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded transition-transform {{ request()->is('contact') ? 'sm:text-blue-700' : 'md:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }} hover:bg-transparent hover:scale-105">Contact</a>
            </li>
        </ul>
    </div>
    
    </div>
  </nav>
  
      
    <!--Navbar End-->

    <!--Body Start-->
    {{$slot}}
    <!--Body End-->

    <!--Footer Start-->


    <footer class="bg-coreblue dark:bg-gray-900 bottom-0 left-0 z-20 w-screen relative " >
        <div  class="max-w-screen-xxl flex flex-wrap items-center justify-center mx-auto py-5"> 
            <span class="text-sm text-darkblue sm:text-center dark:text-gray-400">East African Professional Counselling Institute LTD
            </span>
        </div>
        <hr class="border-b-4 border-darkblue sm:mx-auto dark:border-darkblue" />
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
              <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                      <ul class="text-gray-500 dark:text-gray-400 font-medium">
                          <li class="mb-4">
                              <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                          </li>
                          <li>
                              <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                          </li>
                      </ul>
                  </div>
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                      <ul class="text-gray-500 dark:text-gray-400 font-medium">
                          <li class="mb-4">
                              <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                          </li>
                          <li>
                              <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                          </li>
                      </ul>
                  </div>
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                      <ul class="text-gray-500 dark:text-gray-400 font-medium">
                          <li class="mb-4">
                              <a href="#" class="hover:underline">Privacy Policy</a>
                          </li>
                          <li>
                              <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="mb-6 w-1/4 md:mb-0">
                        <h2 class="mb-3 text-xl font-bold text-darkblue uppercase dark:text-white">Contact</h2>
                        <ul class="text-darkblue dark:text-gray-400 font-medium sm:block mb-5">
                            <li>
                                <span>
                                    Plot 73 Buganda Road,
                                    P.O. Box 124370, Kampala(U) Jowiro House 4th Floor Room 404 ,Above Kampala Medical Chambers Hospital</span>
                            </li>
                            <li>
                                <span>Phone: +256700300102/ +256777025320</span>
                            </li>
                        </ul>
            </div>
          </div>
          
          
          </div>
        </div>
        <div  class="max-w-screen-xxl flex flex-wrap items-center justify-center mx-auto p-1 bg-headblue mt-4 sm:justify-center sm:mt-0"> 
            <span class="text-sm text-darkblue sm:text-center dark:text-gray-400">© 2024 <a href="/" class="hover:underline">EAPCI</a>. All Rights Reserved.
            </span>
        </div>
    </footer> 
    
    <!--Footer End-->

    
</body>
</html>