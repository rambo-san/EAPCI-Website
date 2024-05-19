<x-layout>
  @section('title') {{'EAPCI - About Us'}} @endsection
  <div class="relative bg-aboutbg text-white min-h-screen flex flex-col items-center justify-center font-pop bg-cover bg-fixed bg-center ">
    <div class="absolute top-0 bg-gradient-to-t from-black to-transparent h-full w-full backdrop-blur md:backdrop-blur-sm"></div>
    {{-- <div class="absolute inset-0 opacity-40 bg-cover blur-md sm:blur-0" style="background-image: url('{{asset('images/jpg/aboutbg.jpg')}}')"></div> --}}
    <div class="container my-16 mx-auto p-10 md:p-20 z-10 sm:backdrop-blur-xl rounded-xl sm:border border-white text-cente drop-shadow-xl" data-aos="zoom-in" data-aos-duration="1000">
      <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-4xl font-bold leading-tight mb-4 text-center">East African Professional Counselling Institute (EAPCI)</h1>
      <p class="text-md sm:text-xl md:text-2xl leading-relaxed mb-8 text-justify">
        EAPCI was established in 2010 by Counseling and Clinical psychologists from Uganda and Kenya after realizing that both countries share similar psychosocial challenges. A unique experiential learning methodology is applied in all courses and has been found to be very effective. The shared vision of founders was realized when they established an institute in Uganda which has been steadily progressing over the past 13 years. EAPCI is a professional counseling institute registered with the Registrar of Companies (number 119844) in Uganda.
      </p>
    </div>
    <div class="absolute bottom-0 h-10 w-full bg-bgwhite rounded-t-3xl z-10"></div>
</div>



  <div class="relative bg-bgwhite p-10 md:p-20 text-justify font-pop">
    <div class="container mx-auto">
      <h2 class="text-2xl md:text-3xl  text-center md:text-left p-3 my-5  font-yesava w-full border-b-2 border-black text-black">Our Story and Mission</h2>  <p class="text-gray-700 text-lg leading-relaxed mb-8">
        EAPCI stays at the forefront of holistic mental health services in Uganda and the Great Lakes Region by constantly incorporating new techniques and skills. We've provided psychosocial counseling services to organizations like Communication for Development Foundation Uganda (CDFU), Reproductive Health Uganda (RH Uganda), and World Vision International Uganda. Currently, we support the Ministry of Gender Labour and Social Development's Gender Unit and the SATI child helpline, as well as Kampala Medical Chambers' mental health clinic hospital.
      </p>
    
      <h3 class="text-2xl md:text-3xl  text-center md:text-left text-black p-3 my-5  font-yesava w-full border-b-2 border-black">Extensive Service Offerings</h3>  <p class="text-gray-700 text-lg leading-relaxed mb-8">
        EAPCI offers a comprehensive range of services, including mental health training, clinical counseling supervision, and direct support for mental health and psychosocial support caregivers. We've collaborated with the International Conference of the Great Lakes Region (ICGLR) to provide services for mental health professionals from 12 member countries: Angola, Burundi, Central African Republic, Democratic Republic of Congo, Congo Brazzaville, Kenya, Rwanda, Sudan, South Sudan, Tanzania, Uganda, and Zambia.
      </p>
    
      <h3 class="text-2xl md:text-3xl  text-center md:text-left text-black p-3 my-5  font-yesava w-full border-b-2 border-black">Our Impact</h3>  <p class="text-gray-700 text-lg leading-relaxed mb-8">
        Our work with various organizations has encompassed a wide range of areas. We've helped with employee assistance programs (including psychoeducation, SGBV counseling, stress management, and financial literacy), training and development, performance management, HIV/AIDS intervention, and family mediation.
      </p>
    
      <h3 class="text-2xl md:text-3xl  text-center md:text-left text-black p-3 my-5  font-yesava w-full border-b-2 border-black">Vision and Mission</h3>  <p class="text-gray-700 text-lg leading-relaxed mb-8">
        EAPCI's vision is the holistic empowerment of both men and women. We fulfill this mission by providing counseling, training, and community outreach services to individuals and families, promoting healthy relationships.
      </p>
    </div>
    
  </div>

  <div class="p-10 md:p-20 bg-gradient-to-t from-darkblue to-bgwhite text-justify overflow-x-hidden">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class=" rounded-lg p-5 shadow-2xl text-bgwhite bg-darkblue hover:shadow-[3px_3px_7px_#2C6173] transition duration-300 ease-in-out" data-aos="fade-right" data-aos-duration="1000"  >
        <h3 class="text-2xl font-bold mb-4">EAPCI Niche</h3>
        <p class="text-base leading-relaxed mb-4 italic">
          EAPCI brings expertise in mental health and psychosocial support, relevant in the East African Region, the Great Lakes Region, and across many sectors in Government, Business Organizations, and Higher institutions of education to assist in analysis, benchmarking, and problem-solving. EAPCI consultants are well-grounded in theory and practice in their areas of expertise and armed with confidentiality, i.e. they approach a project from both systems and reality perspective. EAPCI understands schedules, budgets, and timelines, and is committed to completing projects on time and within the budget framework. Their services have been made available to their clients in a confidential environment and available 24/7 and accessible by telephone, e-mail, and other electronic means.
        </p>
      </div>
        <div class="bg-bgwhite border border-gray-200 rounded-lg p-8 shadow-2xl hover:shadow-[3px_3px_7px_#2C6173] transition duration-300 ease-in-out" data-aos="fade-left" data-aos-duration="1000"  >
          <h3 class="text-2xl font-bold text-black mb-4">Core Values</h3>
          <ul class="list-disc text-black ml-4 italic">
            <li>Confidentiality</li>
            <li>Empathy</li>
            <li>Genuineness</li>
            <li>Respect</li>
            <li>Justice</li>
            <li>Compassion</li>
            <li>Integrity</li>
            <li>Collaboration</li>
          </ul>
        </div>
      
    </div>
  </div>
  
  {{-- campus --}}
<div class="h-max bg-gradient-to-b from-darkblue to-gray-800 px-10 md:px-20 pb-20 font-pop">
  <div class="bg-white rounded-lg shadow-lg p-6">
    <div class="grid md:grid-cols-2 gap-10">
    <div class="relative grid-rows-2">
        <img src="{{ asset('images/jpg/aboutbg.jpg') }}" alt="Campus Image 1" class="w-full h-96 object-cover rounded-lg mb-4 object-center" data-aos="zoom-in" data-aos-duration="1000">
        <h1 class="absolute left-2 top-2 sm:top-5 sm:left-5 z-10 text-2xl md:text-3xl font-bold text-center p-4 mr-2 sm:mr-5 rounded-xl backdrop-blur-sm text-white drop-shadow-sm border-white border">Our Campus</h1>
        <div><h2 class="text-2xl font-bold mb-2">Campus Building 1</h2>
        {{-- <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
      </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.771929990687!2d32.612902976151744!3d0.27629646408330777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbdcff6c0e613%3A0xf3c603d2b5b8fdb!2sEAST%20AFRICAN%20PROFESSIONAL%20COUNSELLING%20INSTITUTE!5e0!3m2!1sen!2sin!4v1715612332824!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="md:h-full w-full"></iframe>
    </div>
    </div>
</div>

{{-- campus --}}
</x-layout>
