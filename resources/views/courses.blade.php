<x-layout>
  @section('title', 'EAPCI-Courses')
  {{-- mainstart --}}
  

<div id="default-carousel" class="relative w-full h-74" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div class="relative w-full h-96 lg:h-2/3 overflow-hidden rounded-b-lg">
    <!-- Item 1 -->
    <div class="hidden duration-200 ease-linear" data-carousel-item>
        <img src="{{asset('images/coursecarousal/caro1.jpg')}}" class="absolute inset-0 w-full h-full object-cover " alt="...">
    </div>
    <!-- Item 2 -->
    <div class="hidden duration-200 ease-linear" data-carousel-item>
        <img src="{{asset('images/coursecarousal/caro2.jpg')}}" class="absolute inset-0 w-full h-full object-cover " alt="...">
       
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
  {{-- mainend --}}

  {{--Courses as Button Start --}}

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 mt-20 mb-10 mx-10 md:mx-20">
      <a href="#course1" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-base sm:text-lg md:text-xl font-bold   hover:text-darkblue hover:bg-bgwhite font-pop active:text-activeblack">Time Management</a>
      <a href="#course2" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-base sm:text-lg md:text-xl font-bold   hover:text-darkblue hover:bg-bgwhite font-pop active:text-activeblack">Effective Communication</a>
      <a href="#course3" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-base sm:text-lg md:text-xl font-bold   hover:text-darkblue hover:bg-bgwhite font-pop active:text-activeblack">Stress Management</a>
      <a href="#course4" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-base sm:text-lg md:text-xl font-bold   hover:text-darkblue hover:bg-bgwhite font-pop active:text-activeblack">Problem Solving</a>
      <a href="#course5" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-base sm:text-lg md:text-xl font-bold   hover:text-darkblue hover:bg-bgwhite font-pop active:text-activeblack">Decision Making</a>
      <a href="#course6" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-base sm:text-lg md:text-xl font-bold   hover:text-darkblue hover:bg-bgwhite font-pop active:text-activeblack">Leadership Skills</a>
      <a href="#course7" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-base sm:text-lg md:text-xl font-bold   hover:text-darkblue hover:bg-bgwhite font-pop active:text-activeblack">Emotional Intelligence</a>
      <a href="#course8" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-base sm:text-lg md:text-xl font-bold   hover:text-darkblue hover:bg-bgwhite font-pop active:text-activeblack">Adaptability</a>
      <a href="#course9" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-base sm:text-lg md:text-xl font-bold   hover:text-darkblue hover:bg-bgwhite font-pop active:text-activeblack">Creativity</a>
      <a href="#course10" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-base sm:text-lg md:text-xl font-bold   hover:text-darkblue hover:bg-bgwhite font-pop active:text-activeblack">Teamwork</a>
  </div>
    {{--Courses as Button End --}}
    
    {{--Courses as Description Start --}}
  <div class="mx-10 md:mx-20">
      <div id="course1"  class="w-full h-1/4 pt-32   my-5" >
          <h2 class="text-base sm:text-lg md:text-xl font-bold">Time Management</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course2"  class="w-full h-1/4 pt-32   my-5">
          <h2 class="text-base sm:text-lg md:text-xl font-bold">Effective Communication</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course3"  class="w-full h-1/4 pt-32   my-5">
          <h2 class="text-base sm:text-lg md:text-xl font-bold">Stress Management</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course4"  class="w-full h-1/4 pt-32   my-5">
          <h2 class="text-base sm:text-lg md:text-xl font-bold">Problem Solving</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course5"  class="w-full h-1/4 pt-32   my-5">
          <h2 class="text-base sm:text-lg md:text-xl font-bold">Decision Making</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course6"  class="w-full h-1/4 pt-32   my-5">
          <h2 class="text-base sm:text-lg md:text-xl font-bold">Leadership Skills</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course7"  class="w-full h-1/4 pt-32   my-5">
          <h2 class="text-base sm:text-lg md:text-xl font-bold">Emotional Intelligence</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course8"  class="w-full h-1/4 pt-32   my-5">
          <h2 class="text-base sm:text-lg md:text-xl font-bold">Adaptability</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course9"  class="w-full h-1/4 pt-32   my-5">
          <h2 class="text-base sm:text-lg md:text-xl font-bold">Creativity</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course10"  class="w-full h-1/4 pt-32   my-5">
          <h2 class="text-base sm:text-lg md:text-xl font-bold">Teamwork</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
  </div>
</div>
  {{--Courses as Description End --}}
</x-layout>
