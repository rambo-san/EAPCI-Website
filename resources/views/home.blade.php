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
              <p class="text-lg pt-6 flex-1 text-justify font-pop">
                The East African Professional Counselling Institute (EAPCI) was established in 2010 by counselling and clinical psychologists from Uganda and Kenya to address shared psychosocial challenges in the region. Registered in Uganda (number 119844), EAPCI employs a unique experiential learning methodology that has proven highly effective. Over the past 13 years, EAPCI has provided a comprehensive range of mental health services, including training, clinical counselling supervision, and stress management. Their collaborations with organizations such as World Vision International Uganda and the Ministry of Gender, Labour and Social Development highlight their impact. EAPCI also offers specialized services such as psychoeducation, sexual and gender-based violence counselling, mindful breathing exercises, and financial literacy training.               
                <p class="text-lg pt-6 flex-1 text-justify font-pop">
                  EAPCI’s mission is to empower individuals and families through counselling, training, and community outreach, fostering healthy intrapersonal and interpersonal relationships. Their expertise spans the East African and Great Lakes Regions, supporting mental health and psychosocial caregivers across twelve countries within the International Conference of Great Lakes Region (ICGLR) Regional Training Facility. EAPCI is committed to values of confidentiality, empathy, and integrity, ensuring accessible and effective services available 24/7 through various electronic means. Their consultants blend theoretical knowledge with practical application, consistently delivering support within budget and on time.          
                </p>      
                {{-- <p class="text-lg pt-6 flex-1 text-justify font-pop">
                EAPCI's mission is to empower individuals and families through counselling, training, and community outreach, promoting healthy intrapersonal and interpersonal relationships. Committed to values of confidentiality, empathy, and integrity, EAPCI ensures its services are accessible and effective, available 24/7 through various electronic means. Their consultants combine theoretical knowledge with practical application, delivering support within budget and on time.              </p>
              
               <p class="text-lg pt-6 flex-1 text-justify font-pop">
              EAPCI offers a wide range of services, including training and clinical counselling supervision for mental health and psychosocial support caregivers within the International Conference of Great Lakes Region (ICGLR) Regional Training Facility. This facility comprises twelve countries: Angola, Burundi, Central African Republic, Democratic Republic of Congo, Congo Brazzaville, Kenya, Rwanda, Sudan, South Sudan, Tanzania, Uganda, and Zambia.
              </p>
               <p class="text-lg pt-6 flex-1 text-justify font-pop">
              Our expertise extends across various domains, including employee assistance programs, psychoeducation, sexual and gender-based violence counselling, Zumba dance therapy, mindful breathing exercises, financial literacy, individual and group counselling, stress management, psychological first aid, spiritual counselling, and more. We also provide strategic HR services such as selection and recruitment planning, psychometric assessments, succession planning, compensation schemes, training and development programs, performance management, occupational health and welfare, HIV/AIDS interventions, and personnel administration.
              </p> --}}
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
            <p class="w-3/4 text-2xl md:text-3xl text-center font-yesava text-bgwhite mt-5 drop-shadow-md">Empowering individuals to achieve mental well-being and thrive in their lives, fostering a society where mental health is prioritized and supported.</p>
        </div>
    </div>
    <!-- Item 2 -->
    <div class="hidden duration-200 ease-linear" data-carousel-item>
        <img src="{{asset('images/carousal/caro2.jpg')}}" class="absolute inset-0 w-full h-full object-cover grayscale blur-sm" alt="...">
        <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
            <h1 class="text-4xl md:text-7xl text-center font-yesava text-bgwhite drop-shadow-md">Our Mission</h1>
            <p class="w-3/4 text-2xl md:text-3xl text-center font-yesava text-bgwhite mt-5 drop-shadow-md">Delivering accessible, compassionate mental health services that promote awareness, resilience, and holistic healing for individuals of all backgrounds. We strive to ensure that everyone has the support they need to navigate life's challenges and thrive mentally and emotionally.</p>
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
<div class="flex justify bg-bgwhite h-max w-full py-10 md:p-10 ">  
  <div class="flex flex-col w-full justify-between lg:flex-row">
    <div class="h-max p-10 lg:w-1/2">
      <h1 class="lg:text-left text-4xl  text-center font-yesava" >Short Course</h1>
        <p class="text-lg pt-6 flex-1 text-justify font-pop">
          Empower yourself and elevate your career with our comprehensive short courses in counseling and clinical psychology. Designed for professionals across various settings, these courses provide focused learning opportunities that equip you with essential skills and knowledge to make a meaningful difference in people's lives. Our offerings include Developing Counseling Skills for Professionals, Mental Health Psycho-social Support (MHPSS), and Mental Health, Substance Abuse, and Addiction. Each course integrates practical exercises and real-world case studies, ensuring you can confidently apply what you learn in your professional context.
        </p>
          <p class="text-lg pt-6 flex-1 text-justify font-pop">
Additionally, our specialized courses cover areas such as Sexual and Gender-Based Violence Prevention, Marriage and Family Therapy, Child and Adolescent Mental Health, and Trauma-Informed Care. Whether you're looking to refine your clinical skills with expert supervision or explore the integration of spirituality in family therapy, our programs are designed to meet your needs. By participating in these courses, you will enhance your ability to support clients effectively, promote mental well-being, and contribute to community resilience, all while advancing your professional development.
        </p>
        <a href="courses" ><button class="bg-darkblue border-4 border-coreblue rounded-xl p-4 text-bgwhite text-xl font-bold  mt-10 max-w-max  hover:text-darkblue hover:bg-bgwhite duration-300 ease-in-out font-pop">Know More</button>
        </a>
    </div>
    <div class="bg-cover bg-center h-96 mx-10 lg:w-1/2 lg:h-full" style="background-image: url('{{ asset('images/png/broken_image.png') }}');"> </div>
  </div>
</div>
{{-- shortcourse brief --}}


<script>
  setInterval(() => {
      document.querySelector('[data-carousel-next]').click();
  }, 4000);
</script>


  
</x-layout>