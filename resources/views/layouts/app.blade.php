<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Arti Odonto - Clínica Odontológica')</title>
    <meta name="description" content="@yield('description', 'Clínica odontológica especializada em tratamentos modernos e personalizados')">
    <link rel="icon" href="{{ asset('images/favicon.png') }}">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Parkinsans:wght@300..800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    


</head>
<body class="font-sans antialiased" style="font-family: 'Ubuntu', sans-serif;">

 
 <!-- Menu adicional -->
     <div id="menu-adicional" class="w-full h-auto bg-gradient-to-r from-teal-700 via-teal-500 to-teal-800 fixed top-0 left-0 right-0 z-[9999] transform -translate-y-full transition-transform duration-300 ease-in-out hidden sm:block">
         <div class="container mx-auto h-full flex flex-row justify-between relative z-10 items-center py-4">
             <div class="flex items-center justify-between">
                 <div class="flex items-center">
                     <img src="{{ asset('images/logo.png') }}" alt="Logo da Clínica" class="h-8 w-auto">
                 </div>
             </div>
             <ul class="hidden lg:flex space-x-6">
                     <li class="menu-item">
                         <a href="#" class="text-white hover:text-teal-300 transition-colors textbase antialiased text-sm">Home</a>
                         <div class="menu-line"></div>
                     </li>
                     <li class="menu-item">
                         <a href="{{ url('/a-clinica') }}" class="text-white hover:text-teal-300 transition-colors textbase antialiased text-sm">A Clínica</a>
                         <div class="menu-line"></div>
                     </li>
                     <li class="menu-item">
                          <a href="{{ url('/procedimentos') }}" class="text-white hover:text-teal-300 transition-colors textbase antialiased text-sm">Procedimentos</a>
                          <div class="menu-line"></div>
                      </li>
                     <li class="menu-item">
                            <a href="{{ url('/arti-kids') }}" class="text-white hover:text-teal-300 transition-colors textbase antialiased text-sm">Arti Kids</a>
                         <div class="menu-line"></div>
                     </li>
                     <li class="menu-item">
                         <a href="{{ url('/contato') }}" class="text-white hover:text-teal-300 transition-colors textbase antialiased text-sm">Contato</a>
                         <div class="menu-line"></div>
                     </li>
                     <li class="flex items-center space-x-4">
                         <a href="#" class="text-white hover:text-gray-300 transition-colors">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M16.5 7.5v.01" /></svg>
                         </a>
                         <a href="#" class="text-white hover:text-gray-300 transition-colors">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
                         </a>
                         <a href="#" class="text-white hover:text-gray-300 transition-colors">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-tiktok"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M21 7.917v4.034a9.948 9.948 0 0 1 -5 -1.951v4.5a6.5 6.5 0 1 1 -8 -6.326v4.326a2.5 2.5 0 1 0 4 2v-11.5h4.083a6.005 6.005 0 0 0 4.917 4.917z" /></svg>
                         </a>
                     </li>
                 </ul>
         </div>
     </div>   

    



 <!--Menu interno-->
 @if(isset($isInternalPage) && $isInternalPage)
     <div id="menu-interno" class="w-full h-16 sm:h-32 bg-gradient-to-r from-teal-800 via-teal-600 to-teal-900 relative top-0 left-0 right-0 z-[9999] block px-3 sm:px-0 shadow-2xl shadow-black/40 border-b border-b-white/40">
        <div class="container mx-auto h-full flex flex-row justify-between relative z-10 items-center py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo da Clínica" class="h-8 w-auto">
                </div>
            </div>
                <ul class="hidden lg:flex space-x-6 items-center">
                    <li class="menu-item">
                        <a href="{{ url('/') }}" class="text-white hover:text-teal-300 transition-colors textbase antialiased text-sm">Home</a>
                        <div class="menu-line"></div>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/a-clinica') }}" class="text-white hover:text-teal-300 transition-colors textbase antialiased text-sm">A Clínica</a>
                        <div class="menu-line"></div>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/procedimentos') }}" class="text-white hover:text-teal-300 transition-colors textbase antialiased text-sm">Procedimentos</a>
                        <div class="menu-line"></div>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/arti-kids') }}" class="text-white hover:text-teal-300 transition-colors textbase antialiased text-sm">Arti Kids</a>
                        <div class="menu-line"></div>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/contato') }}" class="text-white hover:text-teal-300 transition-colors textbase antialiased text-sm">Contato</a>
                        <div class="menu-line"></div>
                    </li>
                    <li class="flex items-center space-x-4">
                        <a href="#" class="text-white hover:text-gray-300 transition-colors">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M16.5 7.5v.01" /></svg>
                        </a>
                        <a href="#" class="text-white hover:text-gray-300 transition-colors">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
                        </a>
                        <a href="#" class="text-white hover:text-gray-300 transition-colors">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-tiktok"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M21 7.917v4.034a9.948 9.948 0 0 1 -5 -1.951v4.5a6.5 6.5 0 1 1 -8 -6.326v4.326a2.5 2.5 0 1 0 4 2v-11.5h4.083a6.005 6.005 0 0 0 4.917 4.917z" /></svg>
                        </a>
                    </li>
                    <li class="text-white hover:text-gray-300 transition-colors textbase antialiased text-sm bg-teal-500/20 rounded-xl px-4 py-2 flex items-center">
                        <svg class="mr-3" xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg> (54) 3313-6579
                    </li>
                </ul>
        </div>
    </div>   
    <!-- Menu Mobile -->
    <div id="menu-mobile" class="md:hidden fixed inset-0 bg-gradient-to-t from-teal-700 via-teal-500 to-teal-800 z-50 flex flex-col items-center justify-center space-y-8 hidden">
        <button id="menu-close" class="absolute top-6 right-6 text-white text-3xl" aria-label="Fechar menu">&times;</button>
        <a href="{{ url('/') }}" class="text-white text-2xl hover:text-gray-300 transition-colors">Home</a>
        <a href="{{ url('/a-clinica') }}" class="text-white text-2xl hover:text-gray-300 transition-colors">A Clínica</a>
                                <a href="{{ url('/procedimentos') }}" class="text-white text-2xl hover:text-gray-300 transition-colors">Procedimentos</a>
        <a href="{{ url('/arti-kids') }}" class="text-white text-2xl hover:text-gray-300 transition-colors">Arti Kids</a>
        <a href="{{ url('/contato') }}" class="text-white text-2xl hover:text-gray-300 transition-colors">Contato</a>
        <div class="flex space-x-6 mt-4">
            <a href="#" class="text-white hover:text-gray-300 transition-colors">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="28"  height="28"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M16.5 7.5v.01" /></svg>
            </a>
            <a href="#" class="text-white hover:text-gray-300 transition-colors">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="28"  height="28"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
            </a>
            <a href="#" class="text-white hover:text-gray-300 transition-colors">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="28"  height="28"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-tiktok"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M21 7.917v4.034a9.948 9.948 0 0 1 -5 -1.951v4.5a6.5 6.5 0 1 1 -8 -6.326v4.326a2.5 2.5 0 1 0 4 2v-11.5h4.083a6.005 6.005 0 0 0 4.917 4.917z" /></svg>
            </a>
        </div>
    </div>

 @endif

     


    <!-- Main Content -->
    <main class="block">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-white leading-[1.5] bg-zinc-700">
    <div class="w-full max-w-7xl mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Coluna 1: Logo e Redes Sociais -->
            <div>
                <div class="flex items-center">
                  
                    <div>
                        <img src="{{ asset('images/logo-footer.png') }}" alt="Arti Odontologia" class=" h-16">
                    </div>
                </div>
                <p class="mt-4 text-white/70 leading-[1.625] text-sm">
                    Excelência em tratamentos odontológicos com tecnologia avançada e atendimento personalizado.
                </p>
                <div class="mt-4 flex">
                    <a href="https://www.instagram.com/artiodonto/" class="bg-teal-500/20 flex justify-center items-center cursor-pointer rounded-xl w-8 h-8 hover:bg-teal-500/30 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-teal-500 fill-none stroke-2 stroke-teal-500">
                            <rect width="20" height="20" x="2" y="2" class="fill-none stroke-2 stroke-teal-500"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" class="fill-none stroke-2 stroke-teal-500"></path>
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/artiodontologiaesaude" class="ml-4 bg-teal-500/20 flex justify-center items-center cursor-pointer rounded-xl w-8 h-8 hover:bg-teal-500/30 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-teal-500 fill-none stroke-2 stroke-teal-500">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" class="fill-none stroke-2 stroke-teal-500"></path>
                        </svg>
                    </a>

                </div>
            </div>

            <!-- Coluna 2: Navegação -->
            <div>
                <h4 class="mb-4 text-teal-500 leading-[28px] text-lg font-semibold">Navegação</h4>
                <nav>
                    <a class="text-white/70 leading-[20px] text-sm block cursor-pointer hover:text-white transition-colors" href="{{ url('/') }}">Home</a>
                    <a class="mt-3 text-white/70 leading-[20px] text-sm block cursor-pointer hover:text-white transition-colors" href="{{ url('/a-clinica') }}">A Clínica</a>
                    <a class="mt-3 text-white/70 leading-[20px] text-sm block cursor-pointer hover:text-white transition-colors" href="{{ url('/procedimentos') }}">Procedimentos</a>
                    <a class="mt-3 text-white/70 leading-[20px] text-sm block cursor-pointer hover:text-white transition-colors" href="{{ url('/arti-kids') }}">Arti Kids</a>
                    <a class="mt-3 text-white/70 leading-[20px] text-sm block cursor-pointer hover:text-white transition-colors" href="{{ url('/contato') }}">Contato</a>
                </nav>
            </div>

            <!-- Coluna 3: Contato -->
            <div>
                <h4 class="mb-4 text-teal-500 leading-[28px] text-lg font-semibold">Contato</h4>
                <div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-teal-500 fill-none stroke-2 stroke-teal-500">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" class="fill-none stroke-2 stroke-teal-500"></path>
                        </svg>
                        <span class="ml-3 text-white/70 leading-[20px] text-sm block">(54) 99939-0644</span>
                    </div>
                    <div class="mt-3 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-teal-500 fill-none stroke-2 stroke-teal-500">
                            <rect width="20" height="16" x="2" y="4" class="w-5 h-4 fill-none stroke-2 stroke-teal-500"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" class="fill-none stroke-2 stroke-teal-500"></path>
                        </svg>
                        <span class="ml-3 text-white/70 leading-[20px] text-sm block">contato@artiodon.com.br</span>
                    </div>
                    <div class="mt-3 flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="mt-[2px] text-teal-500 fill-none stroke-2 stroke-teal-500">
                            <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" class="fill-none stroke-2 stroke-teal-500"></path>
                            <circle cx="12" cy="10" r="3" class="fill-none stroke-2 stroke-teal-500"></circle>
                        </svg>
                        <span class="ml-3 text-white/70 leading-[1.625] text-sm block">
                            Rua João de Césaro, 429<br>
                            Passo Fundo - RS
                        </span>
                    </div>
                </div>
            </div>

            <!-- Coluna 4: Horário de Atendimento -->
            <div>
                <h4 class="mb-4 text-teal-500 leading-[28px] text-lg font-semibold">Horário de Atendimento</h4>
                <div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-teal-500 fill-none stroke-2 stroke-teal-500">
                            <circle cx="12" cy="12" r="10" class="fill-none stroke-2 stroke-teal-500"></circle>
                            <polyline points="12 6 12 12 16 14" class="fill-none stroke-2 stroke-teal-500"></polyline>
                        </svg>
                        <div class="ml-3 text-white/70 leading-[20px] text-sm">
                            <p>Segunda a Sexta</p>
                            <p>8h às 18h</p>
                        </div>
                    </div>
                    <div class="mt-3 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-teal-500 fill-none stroke-2 stroke-teal-500">
                            <circle cx="12" cy="12" r="10" class="fill-none stroke-2 stroke-teal-500"></circle>
                            <polyline points="12 6 12 12 16 14" class="fill-none stroke-2 stroke-teal-500"></polyline>
                        </svg>
                        <div class="ml-3 text-white/70 leading-[20px] text-sm">
                            <p>Sábado</p>
                            <p>8h às 14h</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Linha divisória e copyright -->
        <div class="mt-8 pt-8 border-t border-white/20">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <p class="text-white/50 leading-[20px] text-sm text-center md:text-left">
                    © 2025 Arti Odontologia e Saúde. Todos os direitos reservados.
                </p>
                <p class="text-white/40 leading-[16px] text-xs text-center md:text-right">
                    Tratamentos odontológicos especializados | Implantes | Ortodontia | Harmonização Orofacial
                </p>
            </div>
        </div>
    </div>
</footer>

<a href="https://wa.me/5554999390644?text=Olá, estou entrando em contato pelo site" target="_blank" class="fixed bottom-4 right-4 z-50 group">
    <img src="{{ asset('images/whatsapp.svg') }}" alt="Whatsapp" class="w-12 h-12 cursor-pointer">
    <div class="absolute right-14 bottom-1 flex items-center opacity-0 group-hover:opacity-100 transition-opacity duration-200">
        <div class="relative">
            <span class="whitespace-nowrap bg-white text-teal-800 text-sm font-semibold px-4 py-2 rounded-lg shadow-lg border border-teal-200">
                Clique para falar pelo WhatsApp
            </span>
            <span class="absolute left-full top-1/2 -translate-y-1/2 ml-[-6px] w-0 h-0 border-t-8 border-b-8 border-l-8 border-t-transparent border-b-transparent border-l-white"></span>
        </div>
    </div>
</a>




<script>
    // Script para alternar o menu mobile
    const menuToggle = document.getElementById('menu-toggle');
    const menuMobile = document.getElementById('menu-mobile');
    const menuClose = document.getElementById('menu-close');
    const menuDesktop = document.getElementById('menu-desktop');

    menuToggle.addEventListener('click', () => {
        menuMobile.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    });

    menuClose.addEventListener('click', () => {
        menuMobile.classList.add('hidden');
        document.body.style.overflow = '';
    });

        // Fecha o menu mobile ao clicar em qualquer link do menu mobile
    menuMobile.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            menuMobile.classList.add('hidden');
            document.body.style.overflow = '';
        });
    });

    // Script para a linha animada do menu desktop com mouseover
    const menuItems = document.querySelectorAll('.menu-item');
    
    menuItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            // Remove a classe hover de todos os itens
            menuItems.forEach(i => i.classList.remove('hover'));
            // Adiciona a classe hover ao item atual
            item.classList.add('hover');
        });
    });
    
    // Remove a classe hover quando o mouse sai do menu
    const menuDesktopContainer = document.getElementById('menu-desktop');
    menuDesktopContainer.addEventListener('mouseleave', () => {
        menuItems.forEach(item => item.classList.remove('hover'));
    });

    // Script para o accordion de procedimentos
    const accordionItems = document.querySelectorAll('.accordion-item');
    const accordionContainer = document.getElementById('accordion-container');
    
    accordionItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            // Remove classes de todos os itens
            accordionItems.forEach(i => {
                i.classList.remove('expanded');
                i.style.flex = '0.8';
            });
            
            // Adiciona classe ao item atual
            item.classList.add('expanded');
            item.style.flex = '1.5';
        });
        
        item.addEventListener('mouseleave', () => {
            // Remove classes de todos os itens
            accordionItems.forEach(i => {
                i.classList.remove('expanded');
                i.style.flex = '1';
            });
        });
    });

    // Script para o slider de cards personalizados com navegação infinita e responsividade
    const sliderContainer = document.getElementById('slider-container');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const indicators = document.querySelectorAll('.indicator');
    
    // Verifica se os elementos existem antes de inicializar o slider
    if (sliderContainer && prevBtn && nextBtn && indicators.length > 0) {
        let currentSlide = 0;
        const totalSlides = 5;
        
        function getSlideWidth() {
            const width = window.innerWidth;
            if (width < 640) { // Mobile (sm)
                return 100; // 1 card por vez
            } else if (width < 1024) { // Tablet (lg)
                return 50; // 2 cards por vez
            } else { // Desktop (lg+)
                return 20; // 5 cards por vez (20% cada)
            }
        }
        
        function updateSlider() {
            const slideWidth = getSlideWidth();
            const translateX = -currentSlide * slideWidth;
            sliderContainer.style.transform = `translateX(${translateX}%)`;
            
            // Atualizar indicadores
            indicators.forEach((indicator, index) => {
                if (index === currentSlide) {
                    indicator.classList.remove('bg-teal-200');
                    indicator.classList.add('bg-teal-600');
                } else {
                    indicator.classList.remove('bg-teal-600');
                    indicator.classList.add('bg-teal-200');
                }
            });
            
            // Remover estados desabilitados dos botões para navegação infinita
            prevBtn.classList.remove('opacity-50', 'cursor-not-allowed');
            nextBtn.classList.remove('opacity-50', 'cursor-not-allowed');
        }
        
        // Event listeners para os botões com navegação infinita
        prevBtn.addEventListener('click', () => {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlider();
        });
        
        nextBtn.addEventListener('click', () => {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        });
        
        // Event listeners para os indicadores
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                currentSlide = index;
                updateSlider();
            });
        });
        
        // Inicializar slider
        updateSlider();
        
        // Listener para redimensionamento da janela
        window.addEventListener('resize', () => {
            updateSlider();
        });
    }
    
    // Auto-play opcional (descomente se quiser)
    /*
    setInterval(() => {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlider();
    }, 5000);
    */

    // Script para o slider de antes e depois
    class BeforeAfterSlider {
        constructor() {
            // console.log('Inicializando BeforeAfterSlider...');
            this.currentSlide = 0;
            this.totalSlides = 1; // Apenas 1 slide por enquanto
            this.indicators = document.querySelectorAll('#antes-depois .indicator');
            this.beforeAfterContainers = document.querySelectorAll('#antes-depois .before-after-container');
            
            // console.log('Indicadores encontrados:', this.indicators.length);
            // console.log('Containers encontrados:', this.beforeAfterContainers.length);
            
            // Verifica se os elementos existem antes de inicializar
            if (this.beforeAfterContainers.length > 0) {
                // console.log('Iniciando slider...');
                this.init();
            } else {
                // console.log('Nenhum container encontrado, slider não inicializado');
            }
        }
        
        init() {
            this.setupBeforeAfterSliders();
            this.updateIndicators();
        }
        
        setupBeforeAfterSliders() {
            // console.log('Configurando sliders de antes e depois...');
            this.beforeAfterContainers.forEach((container, index) => {
                // console.log(`Configurando container ${index}:`, container);
                
                const handle = container.querySelector('.slider-handle');
                const afterImage = container.querySelector('.after-image');
                let isDragging = false;
                
                // console.log('Handle encontrado:', handle);
                // console.log('Imagem depois encontrada:', afterImage);
                
                // Define posição inicial do slider
                container.style.setProperty('--clip-position', '50%');
                // console.log('Posição inicial definida como 50%');
                
                const updatePosition = (e) => {
                    const rect = container.getBoundingClientRect();
                    const x = (e.clientX || e.touches[0].clientX) - rect.left;
                    const percentage = Math.max(0, Math.min(100, (x / rect.width) * 100));
                    
                    container.style.setProperty('--clip-position', percentage + '%');
                    // console.log('Posição atualizada para:', percentage + '%');
                };
                
                if (handle) {
                    handle.addEventListener('mousedown', (e) => {
                        isDragging = true;
                        e.preventDefault();
                        // console.log('Mouse down no handle');
                    });
                    
                    handle.addEventListener('touchstart', (e) => {
                        isDragging = true;
                        e.preventDefault();
                        // console.log('Touch start no handle');
                    });
                }
                
                document.addEventListener('mousemove', (e) => {
                    if (isDragging) updatePosition(e);
                });
                
                document.addEventListener('touchmove', (e) => {
                    if (isDragging) updatePosition(e);
                });
                
                document.addEventListener('mouseup', () => {
                    isDragging = false;
                });
                
                document.addEventListener('touchend', () => {
                    isDragging = false;
                });
                
                container.addEventListener('click', updatePosition);
                // console.log('Event listeners configurados para o container', index);
            });
        }
        
        updateIndicators() {
            this.indicators.forEach((indicator, index) => {
                if (index === this.currentSlide) {
                    indicator.style.opacity = '1';
                } else {
                    indicator.style.opacity = '0.5';
                }
            });
        }
        
        // Auto-play removido - slider fica parado até interação do usuário
    }
    
    // Inicializar o slider de antes e depois quando o DOM estiver carregado
    document.addEventListener('DOMContentLoaded', function() {
        // console.log('DOM carregado, inicializando sliders...');
        try {
            new BeforeAfterSlider();
            // console.log('Slider de antes e depois inicializado com sucesso');
        } catch (error) {
            console.error('Erro ao inicializar slider:', error);
        }
    });
    
    // Slider de fundo do header
    class HeaderBackgroundSlider {
        constructor() {
            this.currentSlide = 0;
            this.slides = [
                document.getElementById('bg-slide-1'),
                document.getElementById('bg-slide-2')
            ];
            this.interval = null;
            this.slideDuration = 5000; // 5 segundos por slide
            
            this.init();
        }
        
        init() {
            // Verifica se os elementos existem
            if (this.slides[0] && this.slides[1]) {
                // console.log('Slider de fundo inicializado com sucesso');
                
                // Aplica as imagens diretamente via JavaScript
                this.applyBackgroundImages();
                
                // Verifica se as imagens carregaram corretamente
                this.checkImagesLoaded().then(() => {
                    // Esconde o fallback e mostra o slider
                    const fallback = document.getElementById('bg-fallback');
                    const sliderContainer = document.getElementById('slider-container');
                    
                    if (fallback && sliderContainer) {
                        fallback.style.display = 'none';
                        sliderContainer.style.display = 'block';
                        // console.log('Slider ativado com sucesso');
                    }
                    
                    this.startAutoPlay();
                }).catch(() => {
                    // console.log('Imagens não carregaram, mantendo fallback ativo');
                });
                
                // Adiciona listener para redimensionamento
                window.addEventListener('resize', () => this.handleResize());
            } else {
                console.error('Elementos do slider não encontrados');
                // console.log('Elementos encontrados:', this.slides);
                // Mantém o fallback ativo
            }
        }
        
        checkImagesLoaded() {
            return new Promise((resolve, reject) => {
                const isMobile = window.innerWidth <= 768;
                const mobileImage1 = '{{ asset("images/fundo-hero-mobile.webp") }}';
                const mobileImage2 = '{{ asset("images/fundo-hero-mobile1.webp") }}';
                const desktopImage1 = '{{ asset("images/fundo-hero.webp") }}';
                const desktopImage2 = '{{ asset("images/fundo-hero2.webp") }}';
                
                const imagesToCheck = isMobile ? [mobileImage1, mobileImage2] : [desktopImage1, desktopImage2];
                let loadedCount = 0;
                
                imagesToCheck.forEach(src => {
                    const img = new Image();
                    img.onload = () => {
                        loadedCount++;
                        if (loadedCount === imagesToCheck.length) {
                            resolve();
                        }
                    };
                    img.onerror = () => {
                        console.error('Erro ao carregar imagem:', src);
                        reject();
                    };
                    img.src = src;
                });
            });
        }
        
        applyBackgroundImages() {
            // Determina qual imagem usar baseado no tamanho da tela
            const isMobile = window.innerWidth <= 768;
            
            // URLs das imagens processadas pelo Blade
            const mobileImage1 = '{{ asset("images/fundo-hero-mobile.webp") }}';
            const mobileImage2 = '{{ asset("images/fundo-hero-mobile1.webp") }}';
            const desktopImage1 = '{{ asset("images/fundo-hero.webp") }}';
            const desktopImage2 = '{{ asset("images/fundo-hero2.webp") }}';
            
            if (isMobile) {
                // No mobile, usa a mesma imagem mobile para ambos os slides
                this.slides[0].style.backgroundImage = `url('${mobileImage1}')`;
                this.slides[1].style.backgroundImage = `url('${mobileImage2}')`;
                // console.log('Mobile: usando fundo-hero-mobile.webp para ambos os slides');
            } else {
                // No desktop, usa imagens diferentes para criar o efeito slider  
                this.slides[0].style.backgroundImage = `url('${desktopImage1}')`;
                this.slides[1].style.backgroundImage = `url('${desktopImage2}')`;
                // console.log('Desktop: usando fundo-hero.webp e fundo-hero2.webp');
            }
            
            // Aplica estilos de background
            this.slides.forEach(slide => {
                slide.style.backgroundSize = 'cover';
                slide.style.backgroundPosition = 'center';
                slide.style.backgroundRepeat = 'no-repeat';
            });
            
            // console.log('Imagens aplicadas via JavaScript');
            // console.log('Slide 1 background:', this.slides[0].style.backgroundImage);
            // console.log('Slide 2 background:', this.slides[1].style.backgroundImage);
        }
        
        // Listener para redimensionamento da janela
        handleResize() {
            this.applyBackgroundImages();
        }
        
        nextSlide() {
            if (this.slides[this.currentSlide]) {
                this.slides[this.currentSlide].style.opacity = '0';
            }
            this.currentSlide = (this.currentSlide + 1) % this.slides.length;
            if (this.slides[this.currentSlide]) {
                this.slides[this.currentSlide].style.opacity = '1';
            }
            
            // Log para debug
            // console.log('Slide atual:', this.currentSlide);
            // console.log('Opacity slide 1:', this.slides[0].style.opacity);
            // console.log('Opacity slide 2:', this.slides[1].style.opacity);
        }
        
        startAutoPlay() {
            this.interval = setInterval(() => {
                this.nextSlide();
            }, this.slideDuration);
        }
        
        stopAutoPlay() {
            if (this.interval) {
                clearInterval(this.interval);
                this.interval = null;
            }
        }
    }

         // Initialize when DOM is loaded
     document.addEventListener('DOMContentLoaded', () => {
         // Aguarda um pouco para garantir que as imagens sejam carregadas
         setTimeout(() => {
             // Inicializa o slider de fundo do header
             new HeaderBackgroundSlider();
         }, 100);
         
         new BeforeAfterSlider();
         
         // Intersection Observer para animações da seção de procedimentos
         const procedimentosSection = document.getElementById('procedimentos');
         const animatedElements = document.querySelectorAll('.procedimentos-fade-in');
         
         const observer = new IntersectionObserver((entries) => {
             entries.forEach(entry => {
                 if (entry.isIntersecting) {
                     // Adiciona a classe 'fade-in-active' a todos os elementos com delay
                     animatedElements.forEach(element => {
                         element.classList.add('fade-in-active');
                     });
                     
                     // Para de observar após a primeira vez
                     observer.unobserve(entry.target);
                 }
             });
         }, {
             threshold: 0.2, // Dispara quando 20% da seção estiver visível
             rootMargin: '0px 0px -50px 0px' // Dispara um pouco antes da seção entrar completamente
         });
         
         if (procedimentosSection) {
             observer.observe(procedimentosSection);
         }
         
         // Controle do menu adicional com scroll
         const menuAdicional = document.getElementById('menu-adicional');
         let lastScrollTop = 0;
         let isMenuVisible = false;
         
         if (menuAdicional) {
             // console.log('Menu adicional encontrado:', menuAdicional);
             // console.log('Classes iniciais:', menuAdicional.className);
             
             // Verifica se o menu está inicialmente escondido
             if (menuAdicional.classList.contains('-translate-y-full')) {
                 // console.log('Menu adicional inicialmente escondido');
             } else {
                 // console.log('Menu adicional inicialmente visível');
             }
         }
         
         window.addEventListener('scroll', () => {
             const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
             const header = document.querySelector('header');
             
             // Se não houver header (páginas internas), usa uma altura fixa
             const headerHeight = header ? header.offsetHeight/3 : 300;
             
             // Mostra o menu adicional quando o usuário rola para baixo e passa do header
             if (scrollTop > headerHeight && scrollTop > lastScrollTop && !isMenuVisible) {
                 menuAdicional.classList.remove('-translate-y-full');
                 isMenuVisible = true;
                 // console.log('Menu adicional mostrado');
             }
             
             // Esconde o menu adicional quando o usuário rola para cima
             if (scrollTop < lastScrollTop && isMenuVisible) {
                 menuAdicional.classList.add('-translate-y-full');
                 isMenuVisible = false;
                 // console.log('Menu adicional escondido');
             }
             
             lastScrollTop = scrollTop;
         });
     });

</script>




</body>
</html>
