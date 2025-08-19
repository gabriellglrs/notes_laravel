@extends('layouts.main_layout')

@section('title', 'Sobre Nós - MeuApp')
@section('page-title', 'Sobre Nós')
@section('page-subtitle', 'Conheça nossa história e nossa missão')

@section('breadcrumbs')
    <ol class="flex items-center space-x-2 text-sm text-gray-500">
        <li><a href="{{ url('/') }}" class="hover:text-purple-600">Início</a></li>
        <li><i class="fas fa-chevron-right text-xs"></i></li>
        <li class="text-gray-800">Sobre</li>
    </ol>
@endsection

@section('content')
    <div class="max-w-4xl mx-auto">

        <!-- Seção Principal -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Nossa Missão</h2>
                    <p class="text-gray-600 mb-4">
                        Desenvolvemos soluções tecnológicas inovadoras que transformam a maneira como as pessoas
                        interagem com a tecnologia. Nossa missão é criar aplicações que não apenas atendem às
                        necessidades dos usuários, mas também proporcionam experiências excepcionais.
                    </p>
                    <p class="text-gray-600">
                        Com foco em qualidade, performance e design moderno, construímos ferramentas que fazem
                        a diferença no dia a dia das pessoas e empresas.
                    </p>
                </div>
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full mx-auto flex items-center justify-center mb-4">
                        <i class="fas fa-lightbulb text-white text-4xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Inovação Constante</h3>
                </div>
            </div>
        </div>

        <!-- Valores -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover">
                <div class="w-16 h-16 bg-blue-100 rounded-full mx-auto flex items-center justify-center mb-4">
                    <i class="fas fa-users text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Colaboração</h3>
                <p class="text-gray-600">
                    Acreditamos no poder da colaboração e trabalho em equipe para criar soluções extraordinárias.
                </p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover">
                <div class="w-16 h-16 bg-green-100 rounded-full mx-auto flex items-center justify-center mb-4">
                    <i class="fas fa-leaf text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Sustentabilidade</h3>
                <p class="text-gray-600">
                    Desenvolvemos pensando no futuro, criando soluções sustentáveis e responsáveis.
                </p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover">
                <div class="w-16 h-16 bg-purple-100 rounded-full mx-auto flex items-center justify-center mb-4">
                    <i class="fas fa-rocket text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Excelência</h3>
                <p class="text-gray-600">
                    Buscamos sempre a excelência em tudo que fazemos, desde o código até a experiência do usuário.
                </p>
            </div>
        </div>

        <!-- Timeline da Empresa -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Nossa Jornada</h2>

            <div class="relative">
                <div class="absolute left-4 top-0 bottom-0 w-0.5 bg-purple-200"></div>

                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-purple-600 rounded-full flex items-center justify-center z-10">
                            <span class="text-white text-sm font-bold">1</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">2020 - Fundação</h3>
                            <p class="text-gray-600">
                                Início da jornada com o objetivo de criar soluções web inovadoras.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-purple-600 rounded-full flex items-center justify-center z-10">
                            <span class="text-white text-sm font-bold">2</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">2022 - Crescimento</h3>
                            <p class="text-gray-600">
                                Expansão da equipe e desenvolvimento de projetos mais complexos.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-purple-600 rounded-full flex items-center justify-center z-10">
                            <span class="text-white text-sm font-bold">3</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">2024 - Inovação</h3>
                            <p class="text-gray-600">
                                Implementação de novas tecnologias e metodologias ágeis.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-purple-600 rounded-full flex items-center justify-center z-10">
                            <span class="text-white text-sm font-bold">4</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">2025 - Futuro</h3>
                            <p class="text-gray-600">
                                Continuamos evoluindo e criando soluções que fazem a diferença.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tecnologias -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Tecnologias que Utilizamos</h2>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <div class="text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-lg mx-auto flex items-center justify-center mb-2">
                        <i class="fab fa-laravel text-red-600 text-2xl"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700">Laravel</span>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg mx-auto flex items-center justify-center mb-2">
                        <i class="fab fa-php text-blue-600 text-2xl"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700">PHP</span>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-lg mx-auto flex items-center justify-center mb-2">
                        <i class="fab fa-node-js text-green-600 text-2xl"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700">Node.js</span>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-cyan-100 rounded-lg mx-auto flex items-center justify-center mb-2">
                        <i class="fab fa-react text-cyan-600 text-2xl"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700">React</span>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg mx-auto flex items-center justify-center mb-2">
                        <i class="fab fa-docker text-blue-600 text-2xl"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700">Docker</span>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-orange-100 rounded-lg mx-auto flex items-center justify-center mb-2">
                        <i class="fab fa-aws text-orange-600 text-2xl"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700">AWS</span>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-lg shadow-lg p-8 text-center text-white">
            <h2 class="text-2xl font-bold mb-4">Pronto para trabalhar conosco?</h2>
            <p class="text-purple-100 mb-6">
                Entre em contato e descubra como podemos ajudar seu projeto a alcançar o próximo nível.
            </p>
            <a href="{{ url('/contato') }}" class="inline-flex items-center px-6 py-3 bg-white text-purple-600 font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                <i class="fas fa-envelope mr-2"></i>
                Fale Conosco
            </a>
        </div>

    </div>
@endsection
