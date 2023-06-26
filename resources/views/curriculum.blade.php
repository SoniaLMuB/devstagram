<!--Crear una directiva para incluir la navegacio -->
@extends('layouts.app')

<!--Directiva para crear el contenido que se envia al contenedor (@ield) -->
<!--section es toda la infromacion que va tener el contenedor-->
@section('titulo')
    <div class="title">
        <h2>Mí <span>Curriculum</span></h2>
    </div>
@endsection

<!--crear el contenido que se envia al contenedor de contenedido en el app -->
@section('contenido')
  <div>
    <div>
      <section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20"></div>
        <div class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center"></div>
        <div class="mx-auto max-w-2xl lg:max-w-4xl">
          <img class="mx-auto h-12" src="https://tailwindui.com/img/logos/workcation-logo-indigo-600.svg" alt="">
          <figure class="mt-10">
            <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
              <p>Student with a positive attitude, with great purposes of improvement in personal and work life, 
                organized and with initiative, able to manage time efficiently. Responsible, punctual to what is asked, leadership skills and teamwork. I consider 
                myself someone who achieves what is proposed, since I believe that achievements are the result of the decisions that are made and the goals that 
                each one sets.</p>
            </blockquote>
            <figcaption class="mt-10">
              <img class="mx-auto h-10 w-10 rounded-full" src="https://scontent.frex1-1.fna.fbcdn.net/v/t39.30808-6/277804226_2313583938780825_8080120707843197126_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFf2n3dYwykx1oakgUfKgN8DclmHMcRgl8NyWYcxxGCX8YLSJheLA-gBQDEKzUNcZxITXnCIfKGbvuBPWauvEbp&_nc_ohc=l4MvAvJlcj4AX902qsp&_nc_ht=scontent.frex1-1.fna&oh=00_AfD-kJ9OMqbVAocTb2xADN3EVxVqVrRrUIcr2x1ADfRorA&oe=64691E5E" alt="">
              <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                <div class="font-semibold text-gray-900">Sonia Muñoz</div>
                <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
                  <circle cx="1" cy="1" r="1" />
                </svg>
                <div class="text-gray-600">Student of Victoria Polytechnic University</div>
              </div>
            </figcaption>
          </figure>
        </div>
      </section>
    </div>      
    
    <div class="personal_information">
      <div>
        <div class="px-4 sm:px-0">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Personal Information</h2>
        </div>
        <div class="mt-6 border-t border-gray-100">
          <dl class="divide-y divide-gray-100">
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Full name</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Sonia Lizbeth Muñoz Barrientos</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Ocupation:</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Student</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Email address</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">sony.mu2002@gmail.com</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Linkedin</dt>
              <a href="www.linkedin.com/in/sonia-muñoz-56770a263 " class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> Sonia Muñoz</a>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Academy history</dt>
              <div class="relative pl-16">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  Victoria Polytechnic University.
                </dt>
                <dd class="mt-2 text-base leading-7 text-gray-600">Information Technology Engineering</dd>
                <div class="text-sm leading-6">            
                  <p class="text-gray-600">  2020 - Present</p>
                </div>
              </div>
              <div class="relative pl-16">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  Industrial and Services Technological High School 119
                </dt>
                <dd class="mt-2 text-base leading-7 text-gray-600">Programming Technician</dd>
                <div class="text-sm leading-6">            
                  <p class="text-gray-600">  2019 - 2020</p>
                </div>
              </div>
              
            </div>
          </dl>
        </div>
      </div>
    </div>
    <div class="bg-white py-24 sm:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Work experience</h2>
        </div>
        <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
          <article class="flex max-w-xl flex-col items-start justify-between">
            <div class="flex items-center gap-x-4 text-xs">
              <time datetime="2020-03-16" class="text-gray-500">2019</time>
              <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100"></a>
            </div>
            <div class="group relative">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Programming
                </a>
              </h3>
              <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Programming of graphical interface in Python language.</p>
              <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Development of text analyzer for docx documents.</p>
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
              <div class="text-sm leading-6">            
                <p class="text-gray-600">Victoria Polytechnic University</p>
              </div>
            </div>
          </article>
          <article class="flex max-w-xl flex-col items-start justify-between">
            <div class="flex items-center gap-x-4 text-xs">
              <time datetime="2020-03-16" class="text-gray-500">2022</time>
              <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100"></a>
            </div>
            <div class="group relative">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Administrative Assistant.
                </a>
              </h3>
              <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Use of Microsoft Office applications</p>
              <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">File organization.</p>
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
              <div class="text-sm leading-6">            
                <p class="text-gray-600">Industrial and Services Technological High School 119 </p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
    
    <div class="bg-white py-24 sm:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Certificaciones y Badges</h2>
          <p class="mt-2 text-lg leading-8 text-gray-600"></p>
        </div>
        <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
          <article class="flex max-w-xl flex-col items-start justify-between">
            <div class="flex items-center gap-x-4 text-xs">
              <time datetime="2020-03-16" class="text-gray-500"> February 02, 2023</time>
              <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100"></a>
            </div>
            <div class="group relative">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  CCNA: Enterprise Networking, Security, and Automation
                </a>
              </h3>
              <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600"></p>
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
              <img src="https://images.credly.com/size/680x680/images/0a6d331e-8abf-4272-a949-33f754569a76/CCNAENSA__1_.png" alt="" class="h-10 w-10 rounded-full bg-gray-50">
              <div class="text-sm leading-6">     
                <p class="text-gray-600">Cisco Networking Academy</p>
              </div>
            </div>
          </article>
          <article class="flex max-w-xl flex-col items-start justify-between">
            <div class="flex items-center gap-x-4 text-xs">
              <time datetime="2020-03-16" class="text-gray-500"> October 29, 2022</time>
              <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100"></a>
            </div>
            <div class="group relative">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Python Essentials 1
                </a>
              </h3>
              <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600"></p>
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
              <img src="https://images.credly.com/size/680x680/images/68c0b94d-f6ac-40b1-a0e0-921439eb092e/image.png" alt="" class="h-10 w-10 rounded-full bg-gray-50">
              <div class="text-sm leading-6">
                
                <p class="text-gray-600">Cisco Networking Academy</p>
              </div>
            </div>
          </article>
          <article class="flex max-w-xl flex-col items-start justify-between">
            <div class="flex items-center gap-x-4 text-xs">
              <time datetime="2020-03-16" class="text-gray-500"> Mayo 10, 2022</time>
              <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100"></a>
            </div>
            <div class="group relative">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Laptop repair technician
                </a>
              </h3>
              <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600"></p>
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
              <img src="data:image/jpeg;base64,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" alt="" class="h-10 w-10 rounded-full bg-gray-50">
              <div class="text-sm leading-6">
                <p class="text-gray-600">Training for employment</p>
              </div>
            </div>
          </article>
          <article class="flex max-w-xl flex-col items-start justify-between">
            <div class="flex items-center gap-x-4 text-xs">
              <time datetime="2020-03-16" class="text-gray-500"> Abril 5, 2022</time>
              <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100"></a>
            </div>
            <div class="group relative">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Technician in installation and repair of computer equipment
                </a>
              </h3>
              <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600"></p>
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
              <img src="data:image/jpeg;base64,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" alt="" class="h-10 w-10 rounded-full bg-gray-50">
              <div class="text-sm leading-6">
                <p class="text-gray-600">Training for employment</p>
              </div>
            </div>
          </article>
          
          <article class="flex max-w-xl flex-col items-start justify-between">
            <div class="flex items-center gap-x-4 text-xs">
              <time datetime="2020-03-16" class="text-gray-500"> July 15, 2022</time>
              <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100"></a>
            </div>
            <div class="group relative">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Introduction to Cybersecurity
                </a>
              </h3>
              <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600"></p>
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
              <img src="https://images.credly.com/size/680x680/images/af8c6b4e-fc31-47c4-8dcb-eb7a2065dc5b/I2CS__1_.png" alt="" class="h-10 w-10 rounded-full bg-gray-50">
              <div class="text-sm leading-6">
                
                <p class="text-gray-600">Cisco Networking Academy</p>
              </div>
            </div>
          </article>

          <article class="flex max-w-xl flex-col items-start justify-between">
            <div class="flex items-center gap-x-4 text-xs">
              <time datetime="2020-03-16" class="text-gray-500"> March 22, 2022</time>
              <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100"></a>
            </div>
            <div class="group relative">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  CCNA: Switching, Routing, and Wireless Essentials
                </a>
              </h3>
              <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600"></p>
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
              <img src="https://images.credly.com/size/680x680/images/f4ccdba9-dd65-4349-baad-8f05df116443/CCNASRWE__1_.png" alt="" class="h-10 w-10 rounded-full bg-gray-50">
              <div class="text-sm leading-6">
                
                <p class="text-gray-600">Cisco Networking Academy</p>
              </div>
            </div>
          </article>

          <article class="flex max-w-xl flex-col items-start justify-between">
            <div class="flex items-center gap-x-4 text-xs">
              <time datetime="2020-03-16" class="text-gray-500"> December 06, 2021</time>
              <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100"></a>
            </div>
            <div class="group relative">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  CCNA: Introduction to Networks
                </a>
              </h3>
              <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600"></p>
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
              <img src="https://images.credly.com/size/680x680/images/70d71df5-f3dc-4380-9b9d-f22513a70417/CCNAITN__1_.png" alt="" class="h-10 w-10 rounded-full bg-gray-50">
              <div class="text-sm leading-6">
                
                <p class="text-gray-600">Cisco Networking Academy</p>
              </div>
            </div>
          </article>
          
    
        </div>
      </div>
    </div>

  </div>
    
    
    
@endsection