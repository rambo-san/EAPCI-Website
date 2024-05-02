<x-layout>
    @section('title', 'EAPCI-Courses')
    {{-- mainstart --}}
    <div class="w-full relative bg-cover h-max ">
      <div class=" bg-bgwhite">
        <div class=" text-center h-2/3 right-2">
          <h1 class="text-4xl md:text-6xl font-bold text-black pt-20  w-full right-2 font-serif" >Our Services</h1>
            <div class="flex justify-left">
              <div class=" md:w-1/2"><img src="{{asset('images/svg/coursebanner.svg')}}" alt="" class=" self-center md:left-20 py-10"></div>
            </div>
      </div>
            <div class="relative -mt-44">
              <img src="{{asset('images/svg/cwave.svg')}}" alt="" class="w-full">
              <div class="absolute inset-0 flex flex-col justify-center items-center font-semibold italic text-darkblue"> 
                  <h1 class="text-xl sm:text-2xl md:text-4xl text-center">“Confidentiality is Guaranteed”</h1>
              </div>
          
          <img src="{{asset('images/svg/bannerend.svg')}}" alt="" class="w-full">
          <div class="relative">
              
          </div>
          
        </div>
  </div>
    {{-- mainend --}}
    </div>
  </x-layout>
  