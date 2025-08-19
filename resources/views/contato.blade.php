@extends('layouts.main_layout')

@section('title', 'Contato - MeuApp')
@section('page-title', 'Entre em Contato')
@section('page-subtitle', 'Estamos aqui para ajudar você')

@section('breadcrumbs')
    <ol class="flex items-center space-x-2 text-sm text-gray-500">
        <li><a href="{{ url('/') }}" class="hover:text-purple-600">Início</a></li>
        <li><i class="fas fa-chevron-right text-xs"></i></li>
        <li class="text-gray-800">Contato</li>
    </ol>
@endsection

@section('content')
    <div class="max-w-6xl mx-auto">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- Formulário de Contato -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Envie sua Mensagem</h2>
                    <p class="text-gray-600">Preencha o formulário abaixo e retornaremos o mais breve possível.</p>
                </div>

                <form action="#" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="nome" class="block text-sm font-medium text-gray-700 mb-2">
                                <i class="fas fa-user mr-1"></i>Nome Completo
                            </label>
                            <input
                                type="text"
                                id="nome"
                                name="nome"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors"
                                placeholder="Seu nome completo"
                            >
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                <i class="fas fa-envelope mr-1"></i>E-mail
                            </label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors"
                                placeholder="seu@email.com"
                            >
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="telefone" class="block text-sm font-medium text-gray-700 mb-2">
                                <i class="fas fa-phone mr-1"></i>Telefone
                            </label>
                            <input
                                type="tel"
                                id="telefone"
                                name="telefone"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors"
                                placeholder="(11) 99999-9999"
                            >
                        </div>

                        <div>
                            <label for="assunto" class="block text-sm font-medium text-gray-700 mb-2">
                                <i class="fas fa-tag mr-1"></i>Assunto
                            </label>
                            <select
                                id="assunto"
                                name="assunto"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors"
                            >
                                <option value="">Selecione um assunto</option>
                                <option value="suporte">Suporte Técnico</option>
                                <option value="vendas">Informações de Vendas</option>
                                <option value="parceria">Parcerias</option>
                                <option value="feedback">Feedback</option>
                                <option value="outros">Outros</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="mensagem" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-comment mr-1"></i>Mensagem
                        </label>
                        <textarea
                            id="mensagem"
                            name="mensagem"
                            rows="6"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors"
                            placeholder="Descreva sua solicitação ou dúvida..."
                        ></textarea>
                    </div>

                    <div class="flex items-start space-x-3">
                        <input
                            type="checkbox"
                            id="newsletter"
                            name="newsletter"
                            class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500"
                        >
                        <label for="newsletter" class="text-sm text-gray-600">
                            Desejo receber novidades e atualizações por e-mail
                        </label>
                    </div>

                    <div class="pt-4">
                        <button
                            type="submit"
                            class="w-full bg-purple-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-purple-700 transition-colors flex items-center justify-center"
                        >
                            <i class="fas fa-paper-plane mr-2"></i>
                            Enviar Mensagem
                        </button>
                    </div>
                </form>
            </div>

            <!-- Informações de Contato -->
            <div class="space-y-8">

                <!-- Informações Principais -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Informações de Contato</h2>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-purple-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Endereço</h3>
                                <p class="text-gray-600">
                                    Rua das Flores, 123<br>
                                    Centro, Brasília - DF<br>
                                    CEP: 70000-000
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-phone text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Telefone</h3>
                                <p class="text-gray-600">
                                    <a href="tel:+5561999999999" class="hover:text-blue-600">(61) 99999-9999</a><br>
                                    <a href="tel:+556133333333" class="hover:text-blue-600">(61) 3333-3333</a>
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-envelope text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">E-mail</h3>
                                <p class="text-gray-600">
                                    <a href="mailto:contato@meuapp.com.br" class="hover:text-green-600">contato@meuapp.com.br</a><br>
                                    <a href="mailto:suporte@meuapp.com.br" class="hover:text-green-600">suporte@meuapp.com.br</a>
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-clock text-orange-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Horário de Funcionamento</h3>
                                <p class="text-gray-600">
                                    Segunda a Sexta: 08:00 - 18:00<br>
                                    Sábado: 08:00 - 12:00<br>
                                    Domingo: Fechado
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Redes Sociais -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Siga-nos nas Redes Sociais</h2>
                    <p class="text-gray-600 mb-6">Fique por dentro das novidades e atualizações.</p>

                    <div class="grid grid-cols-2 gap-4">
                        <a href="#" class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:border-blue-300 hover:bg-blue-50 transition-colors">
                            <i class="fab fa-facebook-f text-blue-600 text-xl"></i>
                            <span class="font-medium text-gray-700">Facebook</span>
                        </a>

                        <a href="#" class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:border-blue-400 hover:bg-blue-50 transition-colors">
                            <i class="fab fa-twitter text-blue-400 text-xl"></i>
                            <span class="font-medium text-gray-700">Twitter</span>
                        </a>

                        <a href="#" class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:border-pink-300 hover:bg-pink-50 transition-colors">
                            <i class="fab fa-instagram text-pink-500 text-xl"></i>
                            <span class="font-medium text-gray-700">Instagram</span>
                        </a>

                        <a href="#" class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:border-blue-600 hover:bg-blue-50 transition-colors">
                            <i class="fab fa-linkedin text-blue-600 text-xl"></i>
                            <span class="font-medium text-gray-700">LinkedIn</span>
                        </a>
                    </div>
                </div>

                <!-- FAQ Rápido -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Perguntas Frequentes</h2>

                    <div class="space-y-4">
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-2">
                                <i class="fas fa-question-circle text-purple-600 mr-2"></i>
                                Qual o prazo de resposta?
                            </h4>
                            <p class="text-gray-600 text-sm pl-6">
                                Respondemos em até 24 horas durante dias úteis.
                            </p>
                        </div>

                        <div>
                            <h4 class="font-semibold text-gray-800 mb-2">
                                <i class="fas fa-question-circle text-purple-600 mr-2"></i>
                                Oferecem suporte técnico?
                            </h4>
                            <p class="text-gray-600 text-sm pl-6">
                                Sim, oferecemos suporte completo para nossos produtos.
                            </p>
                        </div>

                        <div>
                            <h4 class="font-semibold text-gray-800 mb-2">
                                <i class="fas fa-question-circle text-purple-600 mr-2"></i>
                                Como solicitar um orçamento?
                            </h4>
                            <p class="text-gray-600 text-sm pl-6">
                                Entre em contato pelo formulário ou e-mail com detalhes do projeto.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Mapa (Simulado) -->
        <div class="mt-12 bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Nossa Localização</h2>
            <div class="bg-gray-200 rounded-lg h-64 flex items-center justify-center">
                <div class="text-center text-gray-500">
                    <i class="fas fa-map-marked-alt text-4xl mb-4"></i>
                    <p>Mapa interativo seria inserido aqui</p>
                    <p class="text-sm">Integração com Google Maps ou similar</p>
                </div>
            </div>
        </div>

    </div>

    @push('scripts')
        <script>
            // Máscara para telefone
            document.getElementById('telefone').addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                if (value.length >= 11) {
                    value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
                } else if (value.length >= 7) {
                    value = value.replace(/(\d{2})(\d{4})(\d{0,4})/, '($1) $2-$3');
                } else if (value.length >= 3) {
                    value = value.replace(/(\d{2})(\d{0,5})/, '($1) $2');
                }
                e.target.value = value;
            });

            // Validação do formulário
            document.querySelector('form').addEventListener('submit', function(e) {
                e.preventDefault();

                // Simular envio
                const button = this.querySelector('button[type="submit"]');
                const originalText = button.innerHTML;

                button.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Enviando...';
                button.disabled = true;

                setTimeout(() => {
                    alert('Mensagem enviada com sucesso! Retornaremos em breve.');
                    button.innerHTML = originalText;
                    button.disabled = false;
                    this.reset();
                }, 2000);
            });
        </script>
    @endpush
@endsection
