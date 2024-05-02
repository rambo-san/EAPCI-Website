<x-layout>
  @section('title', 'EAPCI-Courses')
  {{-- mainstart --}}
  <div class="w-full relative bg-cover h-max ">
    <div class=" bg-bgwhite">
      <div class=" text-center h-2/3 right-2">
        <h1 class="text-4xl md:text-6xl font-bold text-black mt-20  w-full md:w-2/3 right-2">Our Services</h1>
        <div class="flex flex-col mt-8">
          <div class="flex justify-center">
            <div class=" w-1/2"><img src="{{asset('images/svg/coursebanner.svg')}}" alt="" class="absolute left-20 p y-10"></div>
          </div>
        <div class="relative">
        <img src="{{asset('images/svg/cwave.svg')}}" alt="" class="w-full mt-96">
        <img src="{{asset('images/svg/bannerend.svg')}}" alt="" class="w-full">
        
        <div class="absolute inset-0 flex flex-col justify-center items-center text-white"> 
            <h1 class="text-4xl text-center">“Confidentiality is Guaranteed”</h1>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
  {{-- mainend --}}

  {{--Courses as Button Start --}}

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 mt-20 mb-10 mx-20">
      <a href="#course1" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-xl font-bold   hover:text-darkblue hover:bg-bgwhite">Time Management</a>
      <a href="#course2" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-xl font-bold   hover:text-darkblue hover:bg-bgwhite">Effective Communication</a>
      <a href="#course3" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-xl font-bold   hover:text-darkblue hover:bg-bgwhite">Stress Management</a>
      <a href="#course4" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-xl font-bold   hover:text-darkblue hover:bg-bgwhite">Problem Solving</a>
      <a href="#course5" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-xl font-bold   hover:text-darkblue hover:bg-bgwhite">Decision Making</a>
      <a href="#course6" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-xl font-bold   hover:text-darkblue hover:bg-bgwhite">Leadership Skills</a>
      <a href="#course7" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-xl font-bold   hover:text-darkblue hover:bg-bgwhite">Emotional Intelligence</a>
      <a href="#course8" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-xl font-bold   hover:text-darkblue hover:bg-bgwhite">Adaptability</a>
      <a href="#course9" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-xl font-bold   hover:text-darkblue hover:bg-bgwhite">Creativity</a>
      <a href="#course10" class="bg-darkblue border-4 border-coreblue rounded-xl py-4 px-8 text-bgwhite text-xl font-bold   hover:text-darkblue hover:bg-bgwhite">Teamwork</a>
  </div>
    {{--Courses as Button End --}}
    
    {{--Courses as Description Start --}}
  <div class="mx-20">
      <div id="course1"  class="w-full h-1/4 pt-32   my-5" >
          <h2 class="text-xl font-bold">Time Management</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course2"  class="w-full h-1/4 pt-32   my-5">
          <h2 class="text-xl font-bold">Effective Communication</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course3"  class="w-full h-1/4 pt-32   my-5">
          <h2 class="text-xl font-bold">Stress Management</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course4"  class="w-full h-1/4 pt-32   my-5">
          <h2 class="text-xl font-bold">Problem Solving</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course5"  class="w-full h-1/4 pt-32   my-5">
          <h2 class="text-xl font-bold">Decision Making</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course6"  class="w-full h-1/4 pt-32   my-5">
          <h2 class="text-xl font-bold">Leadership Skills</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course7"  class="w-full h-1/4 pt-32   my-5">
          <h2 class="text-xl font-bold">Emotional Intelligence</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course8"  class="w-full h-1/4 pt-32   my-5">
          <h2 class="text-xl font-bold">Adaptability</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course9"  class="w-full h-1/4 pt-32   my-5">
          <h2 class="text-xl font-bold">Creativity</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
      <div id="course10"  class="w-full h-1/4 pt-32   my-5">
          <h2 class="text-xl font-bold">Teamwork</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac elit non quam auctor fringilla. Ut convallis arcu nec dui molestie lacinia. Proin ut justo nec felis eleifend aliquam.</p>
      </div>
  </div>
  {{--Courses as Description End --}}
</x-layout>
