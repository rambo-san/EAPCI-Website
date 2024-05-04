<x-layout>
  @section('title', 'EAPCI-Courses')

  {{-- mainstart --}}
{{-- Carousal Start --}}
<div id="default-carousel" class="relative w-full h-74" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div class="relative w-full h-96 lg:h-2/3 overflow-hidden rounded-b-lg bg-darkblue">
    <!-- Item 1 -->
    <div class="hidden duration-200 ease-linear opacity-70 " data-carousel-item>
        <img src="{{asset('images/coursecarousal/caro1.jpg')}}" class="absolute inset-0 w-full h-full object-cover " alt="...">
    </div>
    <!-- Item 2 -->
    <div class="hidden duration-200 ease-linear opacity-70" data-carousel-item>
        <img src="{{asset('images/coursecarousal/caro2.jpg')}}" class="absolute inset-0 w-full h-full object-cover " alt="...">
    </div>
    <!-- Item 3 -->
    <div class="hidden duration-200 ease-linear opacity-70" data-carousel-item>
        <img src="{{asset('images/coursecarousal/caro3.jpg')}}" class="absolute inset-0 w-full h-full object-cover " alt="...">
    </div>  
    <!-- Item 4 -->
    <div class="hidden duration-200 ease-linear opacity-70" data-carousel-item>
        <img src="{{asset('images/coursecarousal/caro4.jpg')}}" class="absolute inset-0 w-full h-full object-cover " alt="...">
    </div>
    <!-- Item 5 -->
    <div class="hidden duration-200 ease-linear opacity-70" data-carousel-item>
      <img src="{{asset('images/coursecarousal/caro5.jpg')}}" class="absolute inset-0 w-full h-full object-cover " alt="...">
  </div>
</div>  
<!-- Slider indicators -->
<div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
  <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
  <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
  <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
  <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
  <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
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
{{-- Carousal End --}}
{{-- Brief Courses --}}
<div class="flex justify bg-bgwhite h-max w-full py-10 md:p-10 border-b-8 border-darkblue">
  <div class="flex flex-col w-full justify-between lg:flex-row">
    <div class="h-max p-10">
      <h1 class="lg:text-left text-3xl md:text-4xl mb-10 text-center font-yesava" >Courses</h1>
        <p class="text-lg flex-1 text-justify font-pop">lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
    </div>
  </div>
</div>
{{-- briefend --}}
  {{-- mainend --}}

  {{--Courses as Button Start --}}
<div class="h-max w-full px-10 md:px-20 font-pop">
  <h1 class="lg:text-left text-3xl md:text-4xl text-center font-yesava py-5" >Courses Offered</h1>
  <div  class="flex h-max text-justify" >
    <p class="text-lg flex-1 text-justify font-pop">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
  </div>
</div>
<div class=" hidden md:grid grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 mt-20 mb-10 mx-10 md:mx-20 ">
      <a href="#course1" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-base sm:text-lg lg:text-xl font-bold   hover:text-darkblue hover:bg-bgwhite font-pop hover:drop-shadow-xl active:text-activeblack">Effective Communication</a>
      <a href="#course3" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-base sm:text-lg lg:text-xl font-bold   hover:text-darkblue hover:bg-bgwhite font-pop hover:drop-shadow-xl active:text-activeblack">Stress Management</a>
      <a href="#course4" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-base sm:text-lg lg:text-xl font-bold   hover:text-darkblue hover:bg-bgwhite font-pop hover:drop-shadow-xl active:text-activeblack">Problem Solving</a>
      <a href="#course5" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-base sm:text-lg lg:text-xl font-bold   hover:text-darkblue hover:bg-bgwhite font-pop hover:drop-shadow-xl active:text-activeblack">Decision Making</a>
      <a href="#course6" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-base sm:text-lg lg:text-xl font-bold   hover:text-darkblue hover:bg-bgwhite font-pop hover:drop-shadow-xl active:text-activeblack">Leadership Skills</a>
      <a href="#course7" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-base sm:text-lg lg:text-xl font-bold   hover:text-darkblue hover:bg-bgwhite font-pop hover:drop-shadow-xl active:text-activeblack">Emotional Intelligence</a>
      <a href="#course8" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-base sm:text-lg lg:text-xl font-bold   hover:text-darkblue hover:bg-bgwhite font-pop hover:drop-shadow-xl active:text-activeblack">Adaptability</a>
      <a href="#course9" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-base sm:text-lg lg:text-xl font-bold   hover:text-darkblue hover:bg-bgwhite font-pop hover:drop-shadow-xl active:text-activeblack">Creativity</a>
      <a href="#course10" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-base sm:text-lg lg:text-xl font-bold   hover:text-darkblue hover:bg-bgwhite font-pop hover:drop-shadow-xl active:text-activeblack">Teamwork</a>
</div>
    {{--Courses as Button End --}}
    
    {{--Courses as Description Start --}}
<div class="mx-10 md:mx-20 ">
      <div id="course1"  class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:bg-hoverblue font-pop " >
          <h2 class="  text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1 ">Time Management</h2>
          <p class="text-lg pt-6 flex-1 text-justify font-pop">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course2"  class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:bg-hoverblue font-pop ">
          <h2 class="text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1">Effective Communication</h2>
          <p class="text-lg pt-6 flex-1 text-justify font-pop">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course3"  class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:bg-hoverblue font-pop">
          <h2 class="text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1">Stress Management</h2>
          <p class="text-lg pt-6 flex-1 text-justify font-pop">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course4"  class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:bg-hoverblue font-pop">
          <h2 class="text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1">Problem Solving</h2>
          <p class="text-lg pt-6 flex-1 text-justify font-pop">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course5"  class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:bg-hoverblue font-pop">
          <h2 class="text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1">Decision Making</h2>
          <p class="text-lg pt-6 flex-1 text-justify font-pop">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course6"  class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:bg-hoverblue font-pop">
          <h2 class="text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1">Leadership Skills</h2>
          <p class="text-lg pt-6 flex-1 text-justify font-pop">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course7"  class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:bg-hoverblue font-pop">
          <h2 class="text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1">Emotional Intelligence</h2>
          <p class="text-lg pt-6 flex-1 text-justify font-pop">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course8"  class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:bg-hoverblue font-pop">
          <h2 class="text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1">Adaptability</h2>
          <p class="text-lg pt-6 flex-1 text-justify font-pop">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course9"  class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:bg-hoverblue font-pop">
          <h2 class="text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1">Creativity</h2>
          <p class="text-lg pt-6 flex-1 text-justify font-pop">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course10"  class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:bg-hoverblue font-pop">
          <h2 class="text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1">Teamwork</h2>
          <p class="text-lg pt-6 flex-1 text-justify font-pop">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
</div>
  {{--Courses as Description End --}}
</x-layout>
