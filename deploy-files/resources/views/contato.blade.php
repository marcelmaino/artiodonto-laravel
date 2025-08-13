@extends('layouts.app')

@section('title', 'Contato - Arti Odonto')
@section('description', 'Entre em contato conosco para agendar sua consulta. Telefone, WhatsApp, email e endereço da Arti Odonto.')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-[url('{{ asset('images/fundo-titulo-clinica.jpg') }}')] bg-cover bg-center text-white">
       <div class="absolute w-full h-full bg-teal-800/90"></div>
        <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-3xl md:text-5xl font-bold mb-6">
                    Entre em Contato
                </h1>
                <p class="text-lg text-blue-100 max-w-3xl mx-auto">
                Estamos aqui para cuidar do seu sorriso. Entre em contato conosco e agende sua consulta.
                </p>
            </div>
        </div>
    </section>

<section class="bg-white py-16">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Formulário de Contato -->
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-teal-800 mb-6">Fale Conosco</h2>
                <form method="POST" action="" class="space-y-5 bg-white p-8 rounded-2xl shadow-lg">
                    @csrf
                    <div>
                        <label for="nome" class="block text-sm font-medium text-teal-700 mb-1">Nome</label>
                        <input type="text" id="nome" name="nome" required class="w-full border border-teal-700/30 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-400 transition" placeholder="Seu nome completo">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-teal-700 mb-1">E-mail</label>
                        <input type="email" id="email" name="email" required class="w-full border border-teal-700/30 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-400 transition" placeholder="seu@email.com">
                    </div>
                    <div>
                        <label for="telefone" class="block text-sm font-medium text-teal-700 mb-1">Telefone</label>
                        <input type="tel" id="telefone" name="telefone" class="w-full border border-teal-700/30 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-400 transition" placeholder="(99) 99999-9999">
                    </div>
                    <div>
                        <label for="mensagem" class="block text-sm font-medium text-teal-700 mb-1">Mensagem</label>
                        <textarea id="mensagem" name="mensagem" rows="4" required class="w-full border border-teal-700/30 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-400 transition" placeholder="Como podemos ajudar?"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-teal-600 hover:bg-teal-700 text-white font-semibold py-3 rounded-lg transition shadow">
                        Enviar mensagem
                    </button>
                </form>
            </div>
            <!-- Formas de Contato e Localização -->
            <div class="flex flex-col justify-between h-full">
                <div class="mb-10">
                    <h3 class="text-lg font-bold text-teal-800 mb-4">Outras formas de contato</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <span class="inline-flex items-center justify-center w-8 h-8 bg-teal-100 rounded-full mr-3">
                                <svg class="w-3 h-3 text-teal-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M3 5.75A2.75 2.75 0 015.75 3h12.5A2.75 2.75 0 0121 5.75v12.5A2.75 2.75 0 0118.25 21H5.75A2.75 2.75 0 013 18.25V5.75z" />
                                    <path d="M21 6.5l-9 7-9-7" />
                                </svg>
                            </span>
                            <a href="mailto:contato@arti-odonto.com.br" class="text-sm text-teal-700 hover:underline">contato@artiodonto.com.br</a>
                        </li>
                        <li class="flex items-center">
                            <span class="inline-flex items-center justify-center w-8 h-8 bg-teal-100 rounded-full mr-3">
                                <svg class="w-3 h-3 text-teal-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M3 5.75A2.75 2.75 0 015.75 3h12.5A2.75 2.75 0 0121 5.75v12.5A2.75 2.75 0 0118.25 21H5.75A2.75 2.75 0 013 18.25V5.75z" />
                                    <path d="M7 10h10M7 14h6" />
                                </svg>
                            </span>
                            <a href="tel:+5511999999999" class="text-sm text-teal-700 hover:underline">(54) 3313-6579</a>
                        </li>
                        <li class="flex items-center">
                            <span class="inline-flex items-center justify-center w-8 h-8 bg-teal-100 rounded-full mr-3">
                                <svg class="w-3 h-3 text-teal-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M16.72 11.06a11.05 11.05 0 01-4.78-4.78l1.06-2.12a1 1 0 00-.23-1.09L10.13 1.13a1 1 0 00-1.09-.23C7.1 1.64 5.5 3.1 5.5 5.25c0 7.18 5.82 13 13 13 2.15 0 3.61-1.6 4.35-3.54a1 1 0 00-.23-1.09l-2.04-2.04a1 1 0 00-1.09-.23l-2.12 1.06z"/>
                                </svg>
                            </span>
                            <a  href="https://wa.me/5554999390644?text=Olá, estou entrando em contato pelo site" target="_blank" class="text-sm text-teal-700 hover:underline">WhatsApp: (54) 99939-0644</a>
                        </li>
                        <li class="flex items-center">
                            <span class="inline-flex items-center justify-center w-8 h-8 bg-teal-100 rounded-full mr-3">
                                <svg class="w-3 h-3 text-teal-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M17.657 16.657L13.414 12.414a4 4 0 10-1.414 1.414l4.243 4.243a1 1 0 001.414-1.414z"/>
                                    <path d="M15 11a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </span>
                            <span class="text-sm text-teal-700">Rua João de Césaro, 429
                            Passo Fundo - RS</span>
                        </li>
                    </ul>
                </div>
                <!-- Localização e Mapa -->
                <div>
                    <h3 class="text-xl font-bold text-teal-800 mb-4">Nossa Localização</h3>
                    <div class="rounded-2xl overflow-hidden shadow-lg mb-3">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3514.1749417937617!2d-52.401931323765076!3d-28.26271175096021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e2bfbed80684dd%3A0x66d7e81869adaa0!2sARTI%20Odontologia%20e%20Sa%C3%BAde!5e0!3m2!1spt-BR!2sbr!4v1754677667793!5m2!1spt-BR!2sbr" 
                            width="100%" 
                            height="220" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                        ></iframe>
                    </div>
                    <div class="text-teal-700 text-sm">
                    Rua João de Césaro, 429<br>
                    Passo Fundo - RS
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
