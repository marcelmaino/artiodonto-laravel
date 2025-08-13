@extends('layouts.app')

@section('title', 'Obrigado - Arti Odonto')
@section('description', 'Obrigado por entrar em contato conosco. Em breve retornaremos sua mensagem.')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-green-600 to-green-800 text-white">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <div class="text-6xl mb-6">✅</div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Obrigado!
                </h1>
                <p class="text-xl text-green-100 max-w-3xl mx-auto">
                    Sua mensagem foi enviada com sucesso. Em breve entraremos em contato com você.
                </p>
            </div>
        </div>
    </section>

    <!-- Mensagem de Confirmação -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-green-50 rounded-2xl p-8 mb-8">
                <div class="text-4xl mb-4">🎉</div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">
                    Mensagem Enviada com Sucesso!
                </h2>
                <p class="text-lg text-gray-600 mb-6">
                    Agradecemos por entrar em contato conosco. Nossa equipe recebeu sua mensagem e responderá o mais breve possível.
                </p>
                <div class="bg-white rounded-xl p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">O que acontece agora?</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm text-gray-600">
                        <div>
                            <div class="text-2xl mb-2">📧</div>
                            <p>Receberá uma confirmação por e-mail</p>
                        </div>
                        <div>
                            <div class="text-2xl mb-2">📞</div>
                            <p>Entraremos em contato em até 24h</p>
                        </div>
                        <div>
                            <div class="text-2xl mb-2">📅</div>
                            <p>Agendaremos sua consulta</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Próximos Passos -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Próximos Passos
                </h2>
                <p class="text-xl text-gray-600">
                    Enquanto aguarda nosso contato, que tal conhecer um pouco mais sobre nossos serviços?
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-8 text-center">
                    <div class="text-4xl mb-4">🦷</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Nossos Procedimentos</h3>
                    <p class="text-gray-600 mb-6">
                        Conheça todos os tratamentos que oferecemos e descubra qual é ideal para você.
                    </p>
                    <a href="{{ route('procedimentos') }}" class="text-blue-600 font-semibold hover:text-blue-700">
                        Ver Procedimentos →
                    </a>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg p-8 text-center">
                    <div class="text-4xl mb-4">🏥</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Conheça a Clínica</h3>
                    <p class="text-gray-600 mb-6">
                        Saiba mais sobre nossa história, equipe e instalações modernas.
                    </p>
                    <a href="{{ route('a-clinica') }}" class="text-blue-600 font-semibold hover:text-blue-700">
                        Sobre Nós →
                    </a>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg p-8 text-center">
                    <div class="text-4xl mb-4">👶</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Arti Kids</h3>
                    <p class="text-gray-600 mb-6">
                        Cuidados especiais para crianças com ambiente lúdico e tratamentos preventivos.
                    </p>
                    <a href="{{ route('arti-kids') }}" class="text-blue-600 font-semibold hover:text-blue-700">
                        Arti Kids →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Informações Importantes -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Informações Importantes
                </h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-blue-50 rounded-xl p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">📞 Contato de Emergência</h3>
                    <p class="text-gray-600 mb-4">
                        Se você está enfrentando uma emergência odontológica, não espere nossa resposta por e-mail.
                    </p>
                    <div class="space-y-2">
                        <p class="text-gray-600"><strong>Telefone:</strong> (11) 99999-9999</p>
                        <p class="text-gray-600"><strong>WhatsApp:</strong> (11) 99999-9999</p>
                        <p class="text-gray-600"><strong>Atendimento:</strong> 24 horas</p>
                    </div>
                </div>
                
                <div class="bg-green-50 rounded-xl p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">📅 Horário de Funcionamento</h3>
                    <p class="text-gray-600 mb-4">
                        Nossa clínica está aberta nos seguintes horários:
                    </p>
                    <div class="space-y-2">
                        <p class="text-gray-600"><strong>Segunda a Sexta:</strong> 8h às 18h</p>
                        <p class="text-gray-600"><strong>Sábado:</strong> 8h às 12h</p>
                        <p class="text-gray-600"><strong>Domingo:</strong> Fechado</p>
                        <p class="text-gray-600"><strong>Emergências:</strong> 24h por WhatsApp</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Redes Sociais -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">
                Siga-nos nas Redes Sociais
            </h2>
            <p class="text-xl text-gray-600 mb-8">
                Acompanhe nossas novidades, dicas de saúde bucal e casos de sucesso.
            </p>
            
            <div class="flex justify-center space-x-6">
                <a href="#" class="bg-blue-600 text-white p-4 rounded-full hover:bg-blue-700 transition-colors">
                    <span class="sr-only">Facebook</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                    </svg>
                </a>
                
                <a href="#" class="bg-pink-600 text-white p-4 rounded-full hover:bg-pink-700 transition-colors">
                    <span class="sr-only">Instagram</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                    </svg>
                </a>
                
                <a href="#" class="bg-green-600 text-white p-4 rounded-full hover:bg-green-700 transition-colors">
                    <span class="sr-only">WhatsApp</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-green-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Obrigado por escolher a Arti Odonto!
            </h2>
            <p class="text-xl mb-8 text-green-100">
                Estamos ansiosos para cuidar do seu sorriso e proporcionar a melhor experiência odontológica.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('home') }}" class="bg-white text-green-600 px-8 py-4 rounded-lg font-semibold hover:bg-green-50 transition-colors">
                    Voltar ao Início
                </a>
                <a href="{{ route('procedimentos') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-green-600 transition-colors">
                    Ver Procedimentos
                </a>
            </div>
        </div>
    </section>
@endsection
