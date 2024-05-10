<x-layout>
    @section('title', 'EAPCI-Courses')
    {{-- mainstart --}}
    {{-- <div class="w-full relative bg-cover h-max" style="background-image:url({{asset('images/jpg/serbg.jpg')}})">
          <div class="flex justify-left">
            <div class="md:w-1/2">
            </div>
            <div class="relative md:w-2/3 text-left px-10 md:px-20 mt-20 ">
              <div class="relative bg-slate-400 h-full w-full z-10">

              </div>
              <p class="absolute text-lg md:text-xl text-gray-700">
                <strong>Feeling overwhelmed? Seeking clarity? Navigating life's challenges?</strong><br> Our multidimensional and comprehensive counseling, clinical, and psychiatric services offer a safe and supportive space where you can discover your inner strength and build a fulfilling life. Come and meet our highly qualified and experienced Counseling Psychologists, Clinical Psychologists, and Psychiatrists at East African Professional Counseling Institute Limited Uganda.
              </p>
            </div>
          </div>

      <div class="relative mt-20">
        <img src="{{asset('images/svg/cwave.svg')}}" alt="" class="w-full">
        
        <div class="absolute inset-0 flex flex-col justify-center items-center font-semibold italic text-darkblue"> 
            <h1 class="text-xl sm:text-2xl md:text-4xl text-center">“Confidentiality is Guaranteed”</h1>
        </div>
    
  </div>
</div> --}}
<div class="sticky h-full bg-bgwhite">
  <img src="{{asset('images/jpg/serbg.jpg')}}" alt="cover image" class="w-full h-full object-top object-cover align-top ">
  <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent mix-blend-normal"></div>
    <p class="absolute text-xs sm:text-base md:text:xl text-bgwhite m-10 md:mx-0 md:right-20 bottom-52 md:bottom-0 md:top-0 bg-darkblue h-max md:w-5/12 rounded-md p-10 backdrop-blur-lg opacity-70 font-pop">
      <strong>Feeling overwhelmed? Seeking clarity? Navigating life's challenges?</strong><br><span class="flex text-justify pt-2">Our multidimensional and comprehensive counseling, clinical, and psychiatric services offer a safe and supportive space where you can discover your inner strength and build a fulfilling life. Come and meet our highly qualified and experienced Counseling Psychologists, Clinical Psychologists, and Psychiatrists at East African Professional Counseling Institute Limited Uganda.
      </span>
    </p>
    <div class="absolute bg-bgwhite rounded-t-3xl w-full h-52 bottom-0 z-10"> 
      <h1 class="absolute inset-10 text-lg sm:text-2xl md:text-4xl text-center font-semibold italic text-darkblue drop-shadow-xl">“Confidentiality is Guaranteed”</h1> 
</div>
</div>
{{-- mainend --}}
    
        <!-- New section starts here -->
        <div class="md:w-full text-left px-10 md:px-20 pb-10 md:pb-20  bg-bgwhite font-pop text-base md:text-md lg:text-lg">
          {{-- how we can empower --}}
          <h2 class="text-center md:text-left text-2xl md:text-4xl font-bold text-gray-800 mb-10 font-yesava">Here's how we can empower you:</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 min-h-56 text-coreblue">
            <div class="group bg-image rounded-md overflow-hidden shadow-md relative">
              <div class="bg-darkblue group-hover:bg-gradient-to-t from-black to-darkblue transition duration-300 ease-in-out absolute inset-0 z-0 w-full h-full ">
                <img src="{{asset('images/jpg/ser1.jpg')}}" alt="mental health" class="w-full h-full object-cover opacity-50  group-hover:scale-110 transition duration-300">
              </div>
              <div class="p-4 text-center relative group-hover:text-bgwhite h-full drop-shadow-xl m-auto flex items-center justify-center">
                  <p class="text-xl md:text-2xl lg:text-4xl font-bold group-hover:hidden drop-shadow-2xl">Conquer emotional challenges</p>
                  <div class="hidden group-hover:block p-5 lg:p-10">
                      <p class="text-lg font-bold">Conquer emotional challenges</p>
                      <p class="text-md text-justify">Manage stress, anxiety, and depression, find healing from loss and trauma, and overcome addiction with individual counseling tailored to your needs.</p>
                  </div>
              </div>
          </div>
            <div class="group bg-image rounded-md overflow-hidden shadow-md relative">
                <div class="bg-darkblue group-hover:bg-gradient-to-t from-black to-darkblue transition duration-300 ease-in-out absolute inset-0 z-0 w-full h-full ">
                  <img src="{{asset('images/jpg/ser2.jpg')}}" alt="mental health" class="w-full h-full object-cover opacity-50  group-hover:scale-110 transition duration-300">
                </div>
                <div class="p-4 text-center relative group-hover:text-bgwhite h-full drop-shadow-xl m-auto flex items-center justify-center">
                    <p class="text-xl md:text-2xl lg:text-4xl font-bold group-hover:hidden drop-shadow-2xl">Navigate life transitions</p>
                    <div class="hidden group-hover:block p-5 lg:p-10">
                        <p class="text-lg font-bold">Navigate life transitions</p>
                        <p class="text-md text-justify">Seek guidance for children, youth, and adults facing unique challenges.</p>
                    </div>
                </div>
            </div>
            <div class="group bg-image rounded-md overflow-hidden shadow-md relative">
              <div class="bg-darkblue group-hover:bg-gradient-to-t from-black to-darkblue transition duration-300 ease-in-out absolute inset-0 z-0 w-full h-full ">
                <img src="{{asset('images/jpg/ser3.jpg')}}" alt="mental health" class="w-full h-full object-cover opacity-50  group-hover:scale-110 transition duration-300">
              </div>
              <div class="p-4 text-center relative group-hover:text-bgwhite h-full drop-shadow-xl m-auto flex items-center justify-center">
                  <p class="text-xl md:text-2xl lg:text-4xl font-bold group-hover:hidden drop-shadow-2xl">Gain deeper understanding</p>
                  <div class="hidden group-hover:block p-5 lg:p-10">
                      <p class="text-lg font-bold">Gain deeper understanding</p>
                      <p class="text-md text-justify">Uncover hidden patterns and unlock growth potential through psychological assessments and psychotherapy</p>
                  </div>
              </div>
          </div>
        </div>
        {{-- additonal benefits --}}
        <h2 class="text-center md:text-left text-2xl md:text-4xl font-bold text-gray-800 my-10 font-yesava">We offer additional benefits:</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 min-h-56 text-coreblue">
          <div class="group bg-image rounded-md overflow-hidden shadow-md relative">
            <div class="bg-darkblue group-hover:bg-gradient-to-t from-black to-darkblue transition duration-300 ease-in-out absolute inset-0 z-0 w-full h-full ">
              <img src="{{asset('images/jpg/ser4.jpg')}}" alt="mental health" class="w-full h-full object-cover opacity-50  group-hover:scale-110 transition duration-300">
            </div>
            <div class="p-4 text-center relative group-hover:text-bgwhite h-full drop-shadow-xl m-auto flex items-center justify-center">
                <p class="text-xl md:text-2xl lg:text-4xl font-bold group-hover:hidden drop-shadow-2xl">A diverse team of qualified professionals</p>
                <div class="hidden group-hover:block p-5 lg:p-10">
                    <p class="text-lg font-bold">A diverse team of qualified professionals</p>
                    <p class="text-md text-justify">Find the perfect counselor who understands your specific needs. Or a clinical psychologist who will help you discover your mental health state through assessment and treatment of severe mental disorders. Or a psychiatrist who will diagnose you and prescribe medicine to enhance your mental health.</p>
                </div>
            </div>
        </div>
          <div class="group bg-image rounded-md overflow-hidden shadow-md relative">
              <div class="bg-darkblue group-hover:bg-gradient-to-t from-black to-darkblue transition duration-300 ease-in-out absolute inset-0 z-0 w-full h-full ">
                <img src="{{asset('images/jpg/ser5.jpg')}}" alt="mental health" class="w-full h-full object-cover opacity-50  group-hover:scale-110 transition duration-300">
              </div>
              <div class="p-4 text-center relative group-hover:text-bgwhite h-full drop-shadow-xl m-auto flex items-center justify-center">
                  <p class="text-xl md:text-2xl lg:text-4xl font-bold group-hover:hidden drop-shadow-2xl">Flexible scheduling and modalities</p>
                  <div class="hidden group-hover:block p-5 lg:p-10">
                      <p class="text-lg font-bold">Flexible scheduling and modalities</p>
                      <p class="text-md text-justify">We offer in-person and online options to fit your busy lifestyle.</p>
                  </div>
              </div>
          </div>
          <div class="group bg-image rounded-md overflow-hidden shadow-md relative">
            <div class="bg-darkblue group-hover:bg-gradient-to-t from-black to-darkblue transition duration-300 ease-in-out absolute inset-0 z-0 w-full h-full ">
              <img src="{{asset('images/jpg/ser6.jpg')}}" alt="mental health" class="w-full h-full object-cover opacity-50  group-hover:scale-110 transition duration-300">
            </div>
            <div class="p-4 text-center relative group-hover:text-bgwhite h-full drop-shadow-xl m-auto flex items-center justify-center">
                <p class="text-xl md:text-2xl lg:text-4xl font-bold group-hover:hidden drop-shadow-2xl">Culturally sensitive and inclusive environment</p>
                <div class="hidden group-hover:block p-5 lg:p-10">
                    <p class="text-lg font-bold">Culturally sensitive and inclusive environment</p>
                    <p class="text-md text-justify">Feel welcomed and respected regardless of your background.</p>
                </div>
            </div>
        </div>
      </div>
    </div>
      <!-- New section ends here -->

      {{-- Content Section --}}

      <div class="w-full px-10 md:px-20 pb-20 font-pop  drop-shadow-xl" style="
      background-color: rgb(17, 94, 89);
      background-image: radial-gradient(at 15% 14%, rgb(31, 41, 55) 0, transparent 100%), radial-gradient(at 8% 76%, rgb(8, 145, 178) 0, transparent 85%), radial-gradient(at 92% 14%, rgb(55, 65, 81) 0, transparent 37%), radial-gradient(at 27% 48%, rgb(41, 37, 36) 0, transparent 65%), radial-gradient(at 23% 28%, rgb(15, 23, 42) 0, transparent 31%);">
        <h2 class="text-2xl font-bold text-center text-bgwhite py-10 font-yesava drop-shadow-xl">Step Forward For A Well-being Journey: Service Descriptions</h2>
        <ul class="service-list grid grid-cols-1 md:grid-cols-2 gap-4">
          <li class="service-item py-4 px-6 rounded-lg shadow-xl hover:shadow-[3px_3px_7px_#000000] transition duration-300 ease-in-out">
            <h3 class="text-xl font-bold text-bgwhite mb-2 font-pop">1. Stress, Anxiety, and Depression Counseling</h3>
            <p class="text-bgwhite">
              <strong>Definition:</strong> This therapy helps individuals manage difficult emotions like stress, anxiety, and depression, which can manifest as excessive worrying, sadness, fatigue, changes in sleep or appetite, and difficulty concentrating.
              <br>
              <strong>Signs:</strong> Feeling overwhelmed, irritable, hopeless, or isolated, experiencing panic attacks, avoiding social situations, changes in mood or energy levels.
            </p>
          </li>
          <li class="service-item py-4 px-6 rounded-lg shadow-xl hover:shadow-[3px_3px_7px_#000000] transition duration-300 ease-in-out">
            <h3 class="text-xl font-bold text-bgwhite mb-2 font-pop">2. Child, Youth, and Adult Counseling</h3>
            <p class="text-bgwhite">
              <strong>Definition:</strong> Tailored therapy for children, adolescents, and adults facing various challenges like bullying, social anxiety, family conflict, learning difficulties, or emotional disturbances.
              <br>
              <strong>Signs:</strong> Changes in behavior (withdrawal, aggression), academic difficulties, low self-esteem, difficulty managing emotions, or significant life changes causing distress.
            </p>
          </li>
          <li class="service-item py-4 px-6 rounded-lg shadow-xl hover:shadow-[3px_3px_7px_#000000] transition duration-300 ease-in-out">
            <h3 class="text-xl font-bold text-bgwhite mb-2 font-pop">3. Psychological Assessment and Psychotherapy</h3>
            <p class="text-bgwhite">
                <strong>Definition:</strong> In-depth evaluation of thoughts, behaviors, and emotions to understand underlying issues and develop a personalized treatment plan (psychotherapy) using methods like CBT or psychodynamic therapy.
                <br>
                <strong>Signs:</strong> Struggling with repetitive thoughts or behaviors, wanting to understand the root of emotional challenges, seeking support for complex mental health concerns.
            </p>
        </li>
        <li class="service-item py-4 px-6 rounded-lg shadow-xl hover:shadow-[3px_3px_7px_#000000] transition duration-300 ease-in-out">
            <h3 class="text-xl font-bold text-bgwhite mb-2 font-pop">4. Alcohol, Drug Abuse, and Addiction Counseling</h3>
            <p class="text-bgwhite">
                <strong>Definition:</strong> Specialized therapy to help individuals overcome dependence on alcohol, drugs, or other substances, addressing the underlying causes and developing coping mechanisms for recovery.
                <br>
                <strong>Signs:</strong> Difficulty controlling substance use, cravings, neglecting responsibilities due to use, negative impact on relationships or work, withdrawal symptoms when trying to stop.
            </p>
        </li>
        <li class="service-item py-4 px-6 rounded-lg shadow-xl hover:shadow-[3px_3px_7px_#000000] transition duration-300 ease-in-out">
          <h3 class="text-xl font-bold text-bgwhite mb-2 font-pop" >5. Loss, Grief, and Trauma Counseling</h3>
          <p class="text-bgwhite">
              <strong>Definition:</strong> Support for navigating the emotional challenges of loss (death, divorce, etc.), grief (sadness, anger, guilt), and trauma (post-traumatic stress disorder, etc.).
              <br>
              <strong>Signs:</strong> Difficulty processing loss, intense emotions like sadness or anger, avoidance of reminders of the loss, flashbacks, nightmares, or intrusive thoughts related to the trauma.
          </p>
      </li>
      <!-- 6. Gender Identity and Sexuality Counseling -->
      <li class="service-item py-4 px-6 rounded-lg shadow-xl hover:shadow-[3px_3px_7px_#000000] transition duration-300 ease-in-out">
          <h3 class="text-xl font-bold text-bgwhite mb-2 font-pop">6. Gender Identity and Sexuality Counseling</h3>
          <p class="text-bgwhite">
              <strong>Definition:</strong> Affirming and supportive therapy for individuals exploring their gender identity, sexual orientation, or questioning these aspects of themselves.
              <br>
              <strong>Signs:</strong> Confusion or distress about gender identity or sexual orientation, desire for exploration or transition support, facing discrimination or challenges related to identity.
          </p>
      </li>
      <!-- 7. Career and Financial Guidance -->
      <li class="service-item py-4 px-6 rounded-lg shadow-xl hover:shadow-[3px_3px_7px_#000000] transition duration-300 ease-in-out">
          <h3 class="text-xl font-bold text-bgwhite mb-2 font-pop">7. Career and Financial Guidance</h3>
          <p class="text-bgwhite">
              <strong>Definition:</strong> Personalized guidance to help individuals navigate career decisions, set financial goals, manage debt, and develop healthy financial habits.
              <br>
              <strong>Signs:</strong> Feeling stuck in a career, unsure of next steps, experiencing financial stress or concerns, seeking strategies for achieving financial goals.
          </p>
      </li>
      <!-- 8. Life Coaching -->
      <li class="service-item py-4 px-6 rounded-lg shadow-xl hover:shadow-[3px_3px_7px_#000000] transition duration-300 ease-in-out">
          <h3 class="text-xl font-bold text-bgwhite mb-2 font-pop">8. Life Coaching</h3>
          <p class="text-bgwhite">
              <strong>Definition:</strong> Partnership to enhance self-awareness, set and achieve personal goals, and improve overall well-being in various life areas.
              <br>
              <strong>Signs:</strong> Desire for personal growth and development, wanting to overcome self-limiting beliefs, seeking support for achieving specific goals like improving communication skills or building confidence.
          </p>
      </li>
      <!-- 9. HIV/AIDS Counseling -->
      <li class="service-item py-4 px-6 rounded-lg shadow-xl hover:shadow-[3px_3px_7px_#000000] transition duration-300 ease-in-out">
          <h3 class="text-xl font-bold text-bgwhite mb-2 font-pop">9. HIV/AIDS Counseling</h3>
          <p class="text-bgwhite">
              <strong>Definition:</strong> Specialized support for individuals living with HIV/AIDS, addressing emotional, social, and practical challenges related to the diagnosis and treatment.
              <br>
              <strong>Signs:</strong> Recently diagnosed with HIV/AIDS, facing challenges with medication adherence, experiencing emotional distress related to the diagnosis, needing support with disclosure or navigating relationships.
          </p>
      </li>
      <!-- 10. Premarital, Marriage, and Family Counseling -->
      <li class="service-item py-4 px-6 rounded-lg shadow-xl hover:shadow-[3px_3px_7px_#000000] transition duration-300 ease-in-out">
          <h3 class="text-xl font-bold text-bgwhite mb-2 font-pop">10. Premarital, Marriage, and Family Counseling</h3>
          <p class="text-bgwhite">
              <strong>Definition:</strong> Support for couples and families at various stages, addressing communication issues, conflict resolution, parenting challenges, or preparing for marriage.
              <br>
              <strong>Signs:</strong> Relationship conflict, difficulty communicating effectively, wanting to strengthen family bonds, preparing for marriage and navigating expectations.
          </p>
      </li>
      <!-- 11. Psychospiritual Therapy -->
      <li class="service-item py-4 px-6 rounded-lg shadow-xl hover:shadow-[3px_3px_7px_#000000] transition duration-300 ease-in-out">
          <h3 class="text-xl font-bold text-bgwhite mb-2 font-pop">11. Psychospiritual Therapy</h3>
          <p class="text-bgwhite">
              <strong>Definition:</strong> Integrates spiritual exploration and psychological support to address mental health concerns while considering the meaning and purpose in life.
              <br>
              <strong>Signs:</strong> Seeking to connect with your spiritual identity, wanting to explore the role of spirituality in mental health, searching for meaning and purpose amidst life challenges.
          </p>
      </li>
      </ul>
      </div>
      

      {{-- Content Section Ends--}}
       
           

  </x-layout>
  