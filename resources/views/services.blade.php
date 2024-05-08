<x-layout>
    @section('title', 'EAPCI-Courses')
    {{-- mainstart --}}
    <div class="w-full relative bg-cover h-max">
      <div class="bg-bgwhite">
        <div class="text-center h-2/3 right-2">
          <h1 class="text-4xl md:text-6xl font-bold text-black pt-4 w-full right-2 font-serif">Our Services</h1>
          <div class="flex justify-left">
            <div class="md:w-1/2">
              <img src="{{asset('images/svg/coursebanner.svg')}}" alt="" class="self-center md:left-20 py-10">
            </div>
            <div class="md:w-2/3 text-left px-10 mt-20  ">
              <p class="text-lg md:text-xl text-gray-700">
                <strong>Feeling overwhelmed? Seeking clarity? Navigating life's challenges?</strong><br> Our multidimensional and comprehensive counseling, clinical, and psychiatric services offer a safe and supportive space where you can discover your inner strength and build a fulfilling life. Come and meet our highly qualified and experienced Counseling Psychologists, Clinical Psychologists, and Psychiatrists at East African Professional Counseling Institute Limited Uganda.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="relative mt-2">
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
    
        <!-- New section starts here -->
        <div class="md:w-2/3 text-left px-10 mt-8">
          <h2 class="text-2xl font-bold text-gray-800 mb-4">Here's how we can empower you:</h2>
          <ul class="list-disc list-inside text-gray-700">
            <li style="font-size: 1.1em;">Conquer emotional challenges: Manage stress, anxiety, and depression, find healing from loss and trauma, and overcome addiction with individual counseling tailored to your needs.</li>
              <li style="font-size: 1.1em;">Navigate life transitions: Seek guidance for children, youth, and adults facing unique challenges.</li>
              <li style="font-size: 1.1em;">Gain deeper understanding: Uncover hidden patterns and unlock growth potential through psychological assessments and psychotherapy.</li>
              <!-- Add more list items as needed -->
          </ul>
          <!-- Additional benefits section -->
          <h2 class="text-2xl font-bold text-gray-800 mt-6 mb-4">We offer additional benefits:</h2>
          <ul class="list-disc list-inside text-gray-700">
              <li style="font-size: 1.1em;">A diverse team of qualified professionals: Find the perfect counselor who understands your specific needs. Or a clinical psychologist who will help you discover your mental health state through assessment and treatment of severe mental disorders. Or a psychiatrist who will diagnose you and prescribe medicine to enhance your mental health.</li>
              <li style="font-size: 1.1em;">Flexible scheduling and modalities: We offer in-person and online options to fit your busy lifestyle.</li>
              <li style="font-size: 1.1em;">Culturally sensitive and inclusive environment: Feel welcomed and respected regardless of your background.</li>
          </ul>
          <!-- Contact information -->
          
      </div>
      <!-- New section ends here -->

      {{-- Content Section --}}

      <div class="w-full bg-white border border-gray-300 rounded-lg shadow-md px-8 py-6 mt-10">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Step Forward For A Well-being Journey: Service Descriptions</h2>
        <ul class="service-list grid grid-cols-1 md:grid-cols-2 gap-4">
          <li class="service-item py-4 px-6 rounded-lg shadow-inner hover:bg-gray-100">
            <h3 class="text-xl font-bold text-gray-800 mb-2">1. Stress, Anxiety, and Depression Counseling</h3>
            <p class="text-gray-700">
              <strong>Definition:</strong> This therapy helps individuals manage difficult emotions like stress, anxiety, and depression, which can manifest as excessive worrying, sadness, fatigue, changes in sleep or appetite, and difficulty concentrating.
              <br>
              <strong>Signs:</strong> Feeling overwhelmed, irritable, hopeless, or isolated, experiencing panic attacks, avoiding social situations, changes in mood or energy levels.
            </p>
          </li>
          <li class="service-item py-4 px-6 rounded-lg shadow-inner hover:bg-gray-100">
            <h3 class="text-xl font-bold text-gray-800 mb-2">2. Child, Youth, and Adult Counseling</h3>
            <p class="text-gray-700">
              <strong>Definition:</strong> Tailored therapy for children, adolescents, and adults facing various challenges like bullying, social anxiety, family conflict, learning difficulties, or emotional disturbances.
              <br>
              <strong>Signs:</strong> Changes in behavior (withdrawal, aggression), academic difficulties, low self-esteem, difficulty managing emotions, or significant life changes causing distress.
            </p>
          </li>
          <li class="service-item py-4 px-6 rounded-lg shadow-inner hover:bg-gray-100">
            <h3 class="text-xl font-bold text-gray-800 mb-2">3. Psychological Assessment and Psychotherapy</h3>
            <p class="text-gray-700">
                <strong>Definition:</strong> In-depth evaluation of thoughts, behaviors, and emotions to understand underlying issues and develop a personalized treatment plan (psychotherapy) using methods like CBT or psychodynamic therapy.
                <br>
                <strong>Signs:</strong> Struggling with repetitive thoughts or behaviors, wanting to understand the root of emotional challenges, seeking support for complex mental health concerns.
            </p>
        </li>
        <li class="service-item py-4 px-6 rounded-lg shadow-inner hover:bg-gray-100">
            <h3 class="text-xl font-bold text-gray-800 mb-2">4. Alcohol, Drug Abuse, and Addiction Counseling</h3>
            <p class="text-gray-700">
                <strong>Definition:</strong> Specialized therapy to help individuals overcome dependence on alcohol, drugs, or other substances, addressing the underlying causes and developing coping mechanisms for recovery.
                <br>
                <strong>Signs:</strong> Difficulty controlling substance use, cravings, neglecting responsibilities due to use, negative impact on relationships or work, withdrawal symptoms when trying to stop.
            </p>
        </li>
        <li class="service-item py-4 px-6 rounded-lg shadow-inner hover:bg-gray-100">
          <h3 class="text-xl font-bold text-gray-800 mb-2">5. Loss, Grief, and Trauma Counseling</h3>
          <p class="text-gray-700">
              <strong>Definition:</strong> Support for navigating the emotional challenges of loss (death, divorce, etc.), grief (sadness, anger, guilt), and trauma (post-traumatic stress disorder, etc.).
              <br>
              <strong>Signs:</strong> Difficulty processing loss, intense emotions like sadness or anger, avoidance of reminders of the loss, flashbacks, nightmares, or intrusive thoughts related to the trauma.
          </p>
      </li>
      <!-- 6. Gender Identity and Sexuality Counseling -->
      <li class="service-item py-4 px-6 rounded-lg shadow-inner hover:bg-gray-100">
          <h3 class="text-xl font-bold text-gray-800 mb-2">6. Gender Identity and Sexuality Counseling</h3>
          <p class="text-gray-700">
              <strong>Definition:</strong> Affirming and supportive therapy for individuals exploring their gender identity, sexual orientation, or questioning these aspects of themselves.
              <br>
              <strong>Signs:</strong> Confusion or distress about gender identity or sexual orientation, desire for exploration or transition support, facing discrimination or challenges related to identity.
          </p>
      </li>
      <!-- 7. Career and Financial Guidance -->
      <li class="service-item py-4 px-6 rounded-lg shadow-inner hover:bg-gray-100">
          <h3 class="text-xl font-bold text-gray-800 mb-2">7. Career and Financial Guidance</h3>
          <p class="text-gray-700">
              <strong>Definition:</strong> Personalized guidance to help individuals navigate career decisions, set financial goals, manage debt, and develop healthy financial habits.
              <br>
              <strong>Signs:</strong> Feeling stuck in a career, unsure of next steps, experiencing financial stress or concerns, seeking strategies for achieving financial goals.
          </p>
      </li>
      <!-- 8. Life Coaching -->
      <li class="service-item py-4 px-6 rounded-lg shadow-inner hover:bg-gray-100">
          <h3 class="text-xl font-bold text-gray-800 mb-2">8. Life Coaching</h3>
          <p class="text-gray-700">
              <strong>Definition:</strong> Partnership to enhance self-awareness, set and achieve personal goals, and improve overall well-being in various life areas.
              <br>
              <strong>Signs:</strong> Desire for personal growth and development, wanting to overcome self-limiting beliefs, seeking support for achieving specific goals like improving communication skills or building confidence.
          </p>
      </li>
      <!-- 9. HIV/AIDS Counseling -->
      <li class="service-item py-4 px-6 rounded-lg shadow-inner hover:bg-gray-100">
          <h3 class="text-xl font-bold text-gray-800 mb-2">9. HIV/AIDS Counseling</h3>
          <p class="text-gray-700">
              <strong>Definition:</strong> Specialized support for individuals living with HIV/AIDS, addressing emotional, social, and practical challenges related to the diagnosis and treatment.
              <br>
              <strong>Signs:</strong> Recently diagnosed with HIV/AIDS, facing challenges with medication adherence, experiencing emotional distress related to the diagnosis, needing support with disclosure or navigating relationships.
          </p>
      </li>
      <!-- 10. Premarital, Marriage, and Family Counseling -->
      <li class="service-item py-4 px-6 rounded-lg shadow-inner hover:bg-gray-100">
          <h3 class="text-xl font-bold text-gray-800 mb-2">10. Premarital, Marriage, and Family Counseling</h3>
          <p class="text-gray-700">
              <strong>Definition:</strong> Support for couples and families at various stages, addressing communication issues, conflict resolution, parenting challenges, or preparing for marriage.
              <br>
              <strong>Signs:</strong> Relationship conflict, difficulty communicating effectively, wanting to strengthen family bonds, preparing for marriage and navigating expectations.
          </p>
      </li>
      <!-- 11. Psychospiritual Therapy -->
      <li class="service-item py-4 px-6 rounded-lg shadow-inner hover:bg-gray-100">
          <h3 class="text-xl font-bold text-gray-800 mb-2">11. Psychospiritual Therapy</h3>
          <p class="text-gray-700">
              <strong>Definition:</strong> Integrates spiritual exploration and psychological support to address mental health concerns while considering the meaning and purpose in life.
              <br>
              <strong>Signs:</strong> Seeking to connect with your spiritual identity, wanting to explore the role of spirituality in mental health, searching for meaning and purpose amidst life challenges.
          </p>
      </li>
      </ul>
      </div>
      

      {{-- Content Section Ends--}}
       
           
    </div>
  </x-layout>
  