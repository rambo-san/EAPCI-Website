<x-layout>
  {{-- mainstart --}}
  <div class="w-screen relative bg-cover bg-center h-max ">
    <div class=" bg-bgwhite">
      <div class="text-center h-2/3 ">
        <h1 class="text-4xl md:text-6xl font-bold text-black mt-40  w-full md:w-2/3 ">East African Professional Counselling Institute</h1>
        
        <div class="flex flex-col mt-8">
          <div class="flex justify-center">
            <div class=" w-1/2 h-20"><p class="mt-4 text-xl md:text-xl text-black">“Life skills at hand”</p></div>
            <div class=" w-1/2 h-20"><img src="{{asset('images/svg/bannerimg1.svg')}}" alt="" class="absolute right-10 p y-10"></div>
          </div>
        
        <img src="{{asset('images/svg/bannerimg2.svg')}}" alt="" class="w-screen mt-80 ">
      </div>
    </div>
  </div>
  {{-- mainend --}}

  {{-- briefstart --}}
      <div class="flex justify bg-headblue h-full w-full pb-10 border-b-8 border-darkblue">  
        <div class="flex flex-row w-full justify-between">
          <div class="w-1/2 h-full">
            <img src="{{asset('images/svg/bannerimg3.svg')}}" alt="" class="w-1/2 h-1/2">
            </div>
            <div class="w-1/2 h-full flex pr-32">
                <p class="text-2xl py-6 flex-1 text-justify">lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
        </div>
    </div>
  {{-- briefend --}}  
  
 {{-- carousalmv --}}
<div id="animation-carousel" class="relative w-full  border-b-8 border-darkblue" data-carousel="static">
  <!-- Carousel wrapper -->
  <div class="relative w-full h-96 md:h-svh overflow-hidden rounded-lg">
      <!-- Item 1 -->
      <div class="hidden duration-200 ease-linear" data-carousel-item>
          <img src="{{asset('images/carousal/caro1.jpg')}}" class="filter grayscale absolute block w-full h-full object-cover top-0 left-0" alt="...">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-200 ease-linear" data-carousel-item>
          <img src="{{asset('images/carousal/caro2.jpg')}}" class="filter grayscale absolute block w-full h-full object-cover top-0 left-0" alt="...">
      </div>
      <!-- Slider controls -->
      <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
              </svg>
              <span class="sr-only">Previous</span>
          </span>
      </button>
      <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <span class="sr-only">Next</span>
          </span>
      </button>
  </div>
</div>
{{-- carousalmv --}}

<script>
  setInterval(() => {
      document.querySelector('[data-carousel-next]').click();
  }, 4000);
</script>


  
</x-layout>