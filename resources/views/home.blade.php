<x-layout>
  @section('title') {{'EAPCI-Home'}} @endsection
  {{-- mainstart --}}
  {{-- <div class="w-full relative bg-cover bg-center h-max bg-bgwhite">
      <div class="text-center h-2/3 ">
        <h1 class="text-4xl md:text-6xl font-bold text-black pt-20  w-full md:w-2/3 font-yesava">East African Professional Counselling Institute</h1>
        <div class="flex flex-col mt-8">
            <div class=" w-1/2 h-20"><p class="mt-4 text-xl italic md:text-2xl text-black">“Life skills at hand”</p></div>
            <div class="pt-20 h-full w-full bg-slate-200 z-0"><img src="{{asset('images/svg/basebanner.svg')}}" alt="" class="absolute h-2/3  md:right-10 py-10"></div>
        <img src="{{asset('images/svg/bannerimg2.svg')}}" alt="" class="w-full mt-96 z-10">
      </div>
    </div>
  </div> --}}
  <div class="w-full md:min-h-4/5 relative bg-cover bg-center bg-bgwhite">
    <div class="pt-20 pb-10 px-10 md:px-20 w-full md:w-3/4 lg:w-2/3 z-10">
    <h1 class="text-xl sm:text-3xl md:text-6xl text-center md:text-left font-bold text-black  font-yesava">East African Professional Counselling Institute</h1>
    <p class="mt-4 text-xl italic md:text-2xl text-black text-right z-20 pr-10 md:pr-20">“Life skills at hand”</p>
  </div>
    <div class="relative w-full h-2/5 lg:h-1/2 mt-10 sm:mt-20 md:mt-32 lg:mt-52">
    <img src="{{asset('images/svg/basebanner.svg')}}" alt="" class="px-10 md:p-0 absolute md:right-20 bottom-20 md:w-2/3 lg:w-1/2 z-0">
    <img src="{{asset('images/svg/bannerimg2.svg')}}" alt="" class="absolute w-full bottom-20  z-10">
    <div class="absolute h-20 w-full bg-headblue bottom-0"></div>
    </div>
    
  </div>
  {{-- mainend --}}

  {{-- briefstart --}}
      <div class="flex justify bg-headblue h-max w-full pb-20 md:px-10 border-b-8 border-darkblue pt-20">  
        <div class="flex flex-col w-full justify-between lg:flex-row">
          <div class="bg-cover bg-center h-96 mx-10 lg:w-1/2 lg:h-full" style="background-image: url('{{ asset('images/png/broken_image.png') }}');"> </div>
            <div class="h-max p-10 lg:w-1/2">
              <h1 class="lg:text-left text-4xl  text-center font-yesava" >What is EAPCI?</h1>
                <p class="text-lg pt-6 flex-1 text-justify font-pop">lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
                <a href="about"><button class="bg-coreblue border-4 border-bgwhite rounded-xl p-4 text-darkblue text-xl font-bold  mt-10 max-w-max  hover:text-bgwhite hover:bg-darkblue duration-300 ease-in-out font-pop">Know More</button>
                </a>
            </div>
        </div>
    </div>
  {{-- briefend --}}  
  
 {{-- carousalmv --}}
<div id="animation-carousel" class="relative  w-full  border-b-8 border-darkblue" data-carousel="static">
  <!-- Carousel wrapper -->
  <div class="relative w-full h-96 md:h-svh overflow-hidden rounded-lg">
    <!-- Item 1 -->
    <div class="hidden duration-200 ease-linear" data-carousel-item>
        <img src="{{asset('images/carousal/caro1.jpg')}}" class="absolute inset-0 w-full h-full object-cover grayscale blur-sm" alt="...">
        <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
            <h1 class="text-4xl md:text-7xl text-center font-yesava text-bgwhite drop-shadow-md">Our Vision</h1>
            <p class="w-3/4 text-2xl md:text-3xl text-center font-yesava text-bgwhite mt-5 drop-shadow-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <!-- Item 2 -->
    <div class="hidden duration-200 ease-linear" data-carousel-item>
        <img src="{{asset('images/carousal/caro2.jpg')}}" class="absolute inset-0 w-full h-full object-cover grayscale blur-sm" alt="...">
        <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
            <h1 class="text-4xl md:text-7xl text-center font-yesava text-bgwhite drop-shadow-md">Our Mission</h1>
            <p class="w-3/4 text-2xl md:text-3xl text-center font-yesava text-bgwhite mt-5 drop-shadow-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
    </div>
</div>

      <!-- Slider controls -->
      <button type="button" class="absolute top-0 start-0 pt-32 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
              </svg>
              <span class="sr-only">Previous</span>
          </span>
      </button>
      <button type="button" class="absolute top-0 end-0 pt-32 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
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

{{-- shortcourse brief --}}
<div class="flex justify bg-bgwhite h-max w-full py-10 md:p-10 border-b-8 border-darkblue">  
  <div class="flex flex-col w-full justify-between lg:flex-row">
    <div class="h-max p-10 lg:w-1/2">
      <h1 class="lg:text-left text-4xl  text-center font-yesava" >Short Course</h1>
        <p class="text-lg pt-6 flex-1 text-justify font-pop">lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
        <a href="courses" ><button class="bg-darkblue border-4 border-coreblue rounded-xl p-4 text-bgwhite text-xl font-bold  mt-10 max-w-max  hover:text-darkblue hover:bg-bgwhite duration-300 ease-in-out font-pop">Know More</button>
        </a>
    </div>
    <div class="bg-cover bg-center h-96 mx-10 lg:w-1/2 lg:h-full" style="background-image: url('{{ asset('images/png/broken_image.png') }}');"> </div>
  </div>
</div>
{{-- shortcourse brief --}}

{{-- campus --}}
<div class="h-max bg-bgwhite p-10 md:p-20">
    <div class="max-w-4xl mx-auto">
    <h1 class="text-4xl md:text-6xl font-bold text-center mb-10">College Campus</h1>
      <div class="bg-white rounded-lg shadow-lg p-6">
        <img src="{{ asset('images/campus1.jpg') }}" alt="Campus Image 1" class="w-full h-64 object-cover rounded-lg mb-4">
        <h2 class="text-2xl font-bold mb-2">Campus Building 1</h2>
        <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>

</div>
</div>

{{-- campus --}}

{{-- contact --}}

<script>
  setInterval(() => {
      document.querySelector('[data-carousel-next]').click();
  }, 4000);
</script>


  
</x-layout>