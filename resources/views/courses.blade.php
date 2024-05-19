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
  <h1 class="relative text-3xl md:text-6xl text-center top-[40%] font-yesava text-white drop-shadow-md mix-blend-luminosity">Upskill and Make a Difference</h1>
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
<div class="flex justify bg-bgwhite h-max w-full py-10 md:p-10 ">
  <div class="flex flex-col w-full justify-between lg:flex-row">
    <div class="h-max p-10">
      <h1 class="lg:text-left text-2xl md:text-4xl mb-10 text-center font-yesava" >Explore Our Short Counseling and Clinical Psychology Courses</h1>
        <p class="text-lg flex-1 text-justify font-pop">
          Are you a mental health professional or someone working in a related field seeking to expand your knowledge and skillset? Do you yearn to make a positive impact on the lives of others? Our comprehensive selection of short courses in counseling and clinical psychology provides focused learning opportunities designed to meet your specific needs. Whether you're looking to master core counseling skills, delve deeper into specialized areas like child mental health or trauma-informed care, or gain practical tools for supporting clients facing diverse challenges, we have the right course for you.  Through interactive learning methods and expert instruction, you'll gain the knowledge and confidence to elevate your practice and make a real difference in the lives of those you serve.
        </p>
    </div>
  </div>
</div>
{{-- briefend --}}
  {{-- mainend --}}

  {{--Courses as Button Start --}}
<div class="h-max w-full px-10 md:px-20 font-pop">
  <h1 class="lg:text-left text-2xl md:text-4xl text-center font-yesava py-5" >Courses Offered by us</h1>
  <div  class="flex h-max text-justify" >
    <p class="text-lg flex-1 text-justify font-pop">Empower yourself and elevate your career with our comprehensive selection of short courses in counseling and clinical psychology. Designed for busy professionals, these focused learning opportunities equip you with the knowledge and skills to make a real difference in the lives of your clients. Explore various areas like core counseling skills, child mental health, trauma-informed care, and more. Invest in your professional growth and become a more effective practitioner.</p>
  </div>
</div>
<div class="hidden md:grid grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 mt-20 mb-10 mx-10 md:mx-20"  data-aos="fade-up" data-aos-duration="1000">
  <a href="#course1" class="bg-darkblue border-4 border-coreblue rounded-xl py-3 px-6 text-bgwhite text-sm sm:text-base lg:text-lg font-bold hover:text-darkblue hover:bg-bgwhite font-pop hover:drop-shadow-xl active:text-activeblack transition duration-300 ease-in-out">Developing Counseling Skills for Professionals: Theory and Practice</a>
  <a href="#course2" class="bg-darkblue border-4 border-coreblue rounded-xl py-3 px-6 text-bgwhite text-sm sm:text-base lg:text-lg font-bold hover:text-darkblue hover:bg-bgwhite font-pop hover:drop-shadow-xl active:text-activeblack transition duration-300 ease-in-out">Mental Health Psycho-social Support (MHPSS)</a>
  <a href="#course3" class="bg-darkblue border-4 border-coreblue rounded-xl py-3 px-6 text-bgwhite text-sm sm:text-base lg:text-lg font-bold hover:text-darkblue hover:bg-bgwhite font-pop hover:drop-shadow-xl active:text-activeblack transition duration-300 ease-in-out">Mental Health, Substance Abuse and Addiction</a>
  <a href="#course4" class="bg-darkblue border-4 border-coreblue rounded-xl py-3 px-6 text-bgwhite text-sm sm:text-base lg:text-lg font-bold hover:text-darkblue hover:bg-bgwhite font-pop hover:drop-shadow-xl active:text-activeblack transition duration-300 ease-in-out">Sexual and Gender Based Violence Prevention Response and Management</a>
  <a href="#course5" class="bg-darkblue border-4 border-coreblue rounded-xl py-3 px-6 text-bgwhite text-sm sm:text-base lg:text-lg font-bold hover:text-darkblue hover:bg-bgwhite font-pop hover:drop-shadow-xl active:text-activeblack transition duration-300 ease-in-out">Marriage and Family Therapy</a>
  <a href="#course6" class="bg-darkblue border-4 border-coreblue rounded-xl py-3 px-6 text-bgwhite text-sm sm:text-base lg:text-lg font-bold hover:text-darkblue hover:bg-bgwhite font-pop hover:drop-shadow-xl active:text-activeblack transition duration-300 ease-in-out">Child and Adolescent Mental Health Challenges and Support Approaches</a>
  <a href="#course7" class="bg-darkblue border-4 border-coreblue rounded-xl py-3 px-6 text-bgwhite text-sm sm:text-base lg:text-lg font-bold hover:text-darkblue hover:bg-bgwhite font-pop hover:drop-shadow-xl active:text-activeblack transition duration-300 ease-in-out">Clinical Counseling Supervision</a>
  <a href="#course8" class="bg-darkblue border-4 border-coreblue rounded-xl py-3 px-6 text-bgwhite text-sm sm:text-base lg:text-lg font-bold hover:text-darkblue hover:bg-bgwhite font-pop hover:drop-shadow-xl active:text-activeblack transition duration-300 ease-in-out">Psycho-Spiritual and Family Therapies</a>
  <a href="#course9" class="bg-darkblue border-4 border-coreblue rounded-xl py-3 px-6 text-bgwhite text-sm sm:text-base lg:text-lg font-bold hover:text-darkblue hover:bg-bgwhite font-pop hover:drop-shadow-xl active:text-activeblack transition duration-300 ease-in-out">Crisis Intervention and Suicide Prevention</a>
  <a href="#course10" class="bg-darkblue border-4 border-coreblue rounded-xl py-3 px-6 text-bgwhite text-sm sm:text-base lg:text-lg font-bold hover:text-darkblue hover:bg-bgwhite font-pop hover:drop-shadow-xl active:text-activeblack transition duration-300 ease-in-out">Trauma Informed Care</a>
</div>


    {{--Courses as Button End --}}
    
    {{-- Courses as Description Start --}}
    <div class="mx-10 md:mx-20">
      <div id="course1" class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:shadow-[34px_34px_68px_#b6ccd3,-34px_-34px_68px_#f6ffff] transition duration-300 ease-in-out font-pop"  data-aos="flip-up" data-aos-duration="300" data-aos-once="true">
          <h2 class="text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1">Developing Counseling Skills for Professionals: Theory and Practice</h2>
          <div class="flex flex-col text-lg space-y-4 px-4 pb-4">
              <div class="text-gray-700">
                  <strong>Description:</strong> Master fundamental counseling skills – active listening, empathy, reflection, and collaboration – through interactive exercises, role-plays, and case studies. Learn key therapeutic approaches and ethical considerations to effectively support clients in diverse settings.
              </div>
              <div class="text-green-500 font-bold">
                  <strong>Outcome:</strong> Confidently apply core counseling skills, build rapport with clients, and initiate positive change across various professional contexts.
              </div>
          </div>
      </div>
      <div id="course2" class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:shadow-[34px_34px_68px_#b6ccd3,-34px_-34px_68px_#f6ffff] transition duration-300 ease-in-out font-pop"  data-aos="flip-up" data-aos-duration="300" data-aos-once="true">
          <h2 class="text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1">Mental Health Psycho-social Support (MHPSS)</h2>
          <div class="flex flex-col text-lg space-y-4 px-4 pb-4">
              <div class="text-gray-700">
                  <strong>Description:</strong> Explore the psychosocial effects of mental health challenges and interventions within community-based contexts. Gain practical skills in providing effective, non-clinical support to individuals and communities facing mental health concerns.
              </div>
              <div class="text-green-500 font-bold">
                  <strong>Outcome:</strong> Deliver culturally appropriate psychosocial support, promote mental well-being, and contribute to community resilience.
              </div>
          </div>
      </div>
      <div id="course3" class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:shadow-[34px_34px_68px_#b6ccd3,-34px_-34px_68px_#f6ffff] transition duration-300 ease-in-out font-pop"  data-aos="flip-up" data-aos-duration="300" data-aos-once="true">
          <h2 class="text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1">Mental Health, Substance Abuse and Addiction</h2>
          <div class="flex flex-col text-lg space-y-4 px-4 pb-4">
              <div class="text-gray-700">
                  <strong>Description:</strong> Develop a comprehensive understanding of the interrelatedness of mental health, substance abuse, and addiction. Learn evidence-based screening, assessment, and intervention strategies to support individuals with co-occurring disorders.
              </div>
              <div class="text-green-500 font-bold">
                  <strong>Outcome:</strong> Provide holistic and integrated care for people struggling with multiple challenges, contributing to improved treatment outcomes.
              </div>
          </div>
      </div>
      <div id="course4" class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:shadow-[34px_34px_68px_#b6ccd3,-34px_-34px_68px_#f6ffff] transition duration-300 ease-in-out font-pop"  data-aos="flip-up" data-aos-duration="300" data-aos-once="true">
          <h2 class="text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1">Sexual and Gender Based Violence Prevention Response and Management</h2>
          <div class="flex flex-col text-lg space-y-4 px-4 pb-4">
              <div class="text-gray-700">
                  <strong>Description:</strong> Gain vital knowledge about sexual and gender-based violence (SGBV), explore prevention strategies, and develop skills to effectively respond to and manage cases of SGBV within your professional capacity.
              </div>
              <div class="text-green-500 font-bold">
                  <strong>Outcome:</strong> Confidently address SGBV issues, support survivors, and contribute to creating safer and more inclusive environments.
              </div>
          </div>
      </div>
      <div id="course5" class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:shadow-[34px_34px_68px_#b6ccd3,-34px_-34px_68px_#f6ffff] transition duration-300 ease-in-out font-pop"  data-aos="flip-up" data-aos-duration="300" data-aos-once="true">
        <h2 class="text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1">Marriage and Family Therapy</h2>
        <div class="flex flex-col text-lg space-y-4 px-4 pb-4">
            <div class="text-gray-700">
                <strong>Description:</strong> Delve into the complexities of family dynamics and relationships. Learn evidence-based techniques for navigating conflict, improving communication, and fostering healthy family functioning.
            </div>
            <div class="text-green-500 font-bold">
                <strong>Outcome:</strong> Effectively support couples and families facing challenges, strengthen relationships, and promote family well-being.
            </div>
        </div>
    </div>
    <div id="course6" class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:shadow-[34px_34px_68px_#b6ccd3,-34px_-34px_68px_#f6ffff] transition duration-300 ease-in-out font-pop"  data-aos="flip-up" data-aos-duration="300" data-aos-once="true">
        <h2 class="text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1">Child and Adolescent Mental Health Challenges and Support Approaches</h2>
        <div class="flex flex-col text-lg space-y-4 px-4 pb-4">
            <div class="text-gray-700">
                <strong>Description:</strong> Gain in-depth knowledge of common mental health challenges faced by children and adolescents. Explore developmentally appropriate assessment and intervention strategies to effectively support young people and their families.
            </div>
            <div class="text-green-500 font-bold">
                <strong>Outcome:</strong> Enhance your ability to identify and address mental health concerns in children and adolescents, contributing to their social, emotional, and academic success.
            </div>
        </div>
    </div>
    <div id="course7" class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:shadow-[34px_34px_68px_#b6ccd3,-34px_-34px_68px_#f6ffff] transition duration-300 ease-in-out font-pop"  data-aos="flip-up" data-aos-duration="300" data-aos-once="true">
        <h2 class="text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1">Clinical Counseling Supervision</h2>
        <div class="flex flex-col text-lg space-y-4 px-4 pb-4">
            <div class="text-gray-700">
                <strong>Description:</strong> Receive expert guidance and support from experienced supervisors to refine your clinical skills, deepen your theoretical understanding, and navigate ethical dilemmas encountered in counseling practice.
            </div>
            <div class="text-green-500 font-bold">
                <strong>Outcome:</strong> Develop greater confidence, hone your clinical expertise, and become a more effective therapist.
            </div>
        </div>
    </div>
    <div id="course8" class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:shadow-[34px_34px_68px_#b6ccd3,-34px_-34px_68px_#f6ffff] transition duration-300 ease-in-out font-pop"  data-aos="flip-up" data-aos-duration="300" data-aos-once="true">
        <h2 class="text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1">Psycho-Spiritual and Family Therapies</h2>
        <div class="flex flex-col text-lg space-y-4 px-4 pb-4">
            <div class="text-gray-700">
                <strong>Description:</strong> Explore the integration of spirituality and psychological approaches within family therapy practices. Learn to address spiritual concerns within the family context and facilitate growth towards collective well-being.
            </div>
            <div class="text-green-500 font-bold">
                <strong>Outcome:</strong> Expand your therapeutic toolkit, provide holistic support to families, and embrace the multifaceted aspects of human experience.
            </div>
        </div>
    </div>
    <div id="course9" class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:shadow-[34px_34px_68px_#b6ccd3,-34px_-34px_68px_#f6ffff] transition duration-300 ease-in-out font-pop"  data-aos="flip-up" data-aos-duration="300" data-aos-once="true">
        <h2 class="text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1">Crisis Intervention and Suicide Prevention</h2>
        <div class="flex flex-col text-lg space-y-4 px-4 pb-4">
            <div class="text-gray-700">
                <strong>Description:</strong> Develop essential skills for effectively intervening in crisis situations and preventing suicide attempts. Learn risk assessment, communication strategies, and de-escalation techniques to support individuals in distress.
            </div>
            <div class="text-green-500 font-bold">
                <strong>Outcome:</strong> Save lives, respond confidently to crisis situations, and equip yourself to help people navigate moments of extreme difficulty.
            </div>
        </div>
    </div>
    <div id="course10" class="w-full h-max text-justify md:p-5 my-5 rounded-lg hover:shadow-[34px_34px_68px_#b6ccd3,-34px_-34px_68px_#f6ffff] transition duration-300 ease-in-out font-pop"  data-aos="flip-up" data-aos-duration="300" data-aos-once="true">
        <h2 class="text-center md:text-left text-lg sm:text-xl md:text-2xl font-bold mb-5 border-activeblack border-b-2 p-1">Trauma Informed Care</h2>
        <div class="flex flex-col text-lg space-y-4 px-4 pb-4">
            <div class="text-gray-700">
                <strong>Description:</strong> Gain in-depth understanding of trauma's impact on individuals and systems. Learn trauma-informed assessment, intervention, and self-care strategies to create safe and supportive environments for healing.
            </div>
            <div class="text-green-500 font-bold">
                <strong>Outcome:</strong> Provide more effective and compassionate care to individuals with trauma histories, fostering individual and community resilience.
            </div>
        </div>
    </div>
  </div>
{{-- Courses as Description End --}}
</x-layout>
