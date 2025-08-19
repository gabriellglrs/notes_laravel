<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Minha Aplicação')</title>

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .fade-in {
            animation: fadeIn 0.6s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

    @stack('styles')
</head>
<body class="bg-gray-50 min-h-screen">

<!-- Header/Navbar -->
<header class="gradient-bg shadow-lg">
    <nav class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center">
                    <i class="fas fa-rocket text-purple-600 text-xl"></i>
                </div>
                <span class="text-white text-xl font-bold">MeuApp</span>
            </div>

            <!-- Menu Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ url('/') }}" class="text-white hover:text-purple-200 transition-colors duration-200">
                    <i class="fas fa-home mr-2"></i>Início
                </a>
                <a href="{{ url('/sobre') }}" class="text-white hover:text-purple-200 transition-colors duration-200">
                    <i class="fas fa-info-circle mr-2"></i>Sobre
                </a>
                <a href="{{ url('/contato') }}" class="text-white hover:text-purple-200 transition-colors duration-200">
                    <i class="fas fa-envelope mr-2"></i>Contato
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-btn" class="text-white hover:text-purple-200">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden mt-4 pb-4 hidden">
            <a href="{{ url('/') }}" class="block text-white hover:text-purple-200 py-2">
                <i class="fas fa-home mr-2"></i>Início
            </a>
            <a href="{{ url('/sobre') }}" class="block text-white hover:text-purple-200 py-2">
                <i class="fas fa-info-circle mr-2"></i>Sobre
            </a>
            <a href="{{ url('/contato') }}" class="block text-white hover:text-purple-200 py-2">
                <i class="fas fa-envelope mr-2"></i>Contato
            </a>
        </div>
    </nav>
</header>

<!-- Breadcrumbs (opcional) -->
@hasSection('breadcrumbs')
    <div class="bg-white shadow-sm border-b">
        <div class="container mx-auto px-6 py-3">
            <nav class="text-sm">
                @yield('breadcrumbs')
            </nav>
        </div>
    </div>
@endif

<!-- Main Content -->
<main class="container mx-auto px-6 py-8">

    <!-- Título da Página -->
    @hasSection('page-title')
        <div class="mb-8 fade-in">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">
                @yield('page-title')
            </h1>
            @hasSection('page-subtitle')
                <p class="text-gray-600 text-lg">
                    @yield('page-subtitle')
                </p>
            @endif
        </div>
    @endif

    <!-- Alerts/Mensagens -->
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 fade-in">
            <div class="flex items-center">
                <i class="fas fa-check-circle mr-2"></i>
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6 fade-in">
            <div class="flex items-center">
                <i class="fas fa-exclamation-circle mr-2"></i>
                {{ session('error') }}
            </div>
        </div>
    @endif

    @if (session('warning'))
        <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded mb-6 fade-in">
            <div class="flex items-center">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                {{ session('warning') }}
            </div>
        </div>
    @endif

    <!-- Conteúdo Principal -->
    <div class="fade-in">
        @yield('content')
    </div>

</main>

<!-- Footer -->
<footer class="bg-gray-800 text-white mt-16">
    <div class="container mx-auto px-6 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Coluna 1 -->
            <div>
                <div class="flex items-center space-x-2 mb-4">
                    <div class="w-8 h-8 bg-purple-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-rocket text-white"></i>
                    </div>
                    <span class="text-xl font-bold">MeuApp</span>
                </div>
                <p class="text-gray-400">
                    Uma aplicação moderna e elegante construída com Laravel e Tailwind CSS.
                </p>
            </div>

            <!-- Coluna 2 -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Links Rápidos</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ url('/') }}" class="text-gray-400 hover:text-white transition-colors">
                            Início
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/sobre') }}" class="text-gray-400 hover:text-white transition-colors">
                            Sobre
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contato') }}" class="text-gray-400 hover:text-white transition-colors">
                            Contato
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Coluna 3 -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Redes Sociais</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <i class="fab fa-facebook-f text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                </div>
            </div>

        </div>

        <div class="border-t border-gray-700 mt-8 pt-8 text-center">
            <p class="text-gray-400">
                &copy; {{ date('Y') }} MeuApp. Todos os direitos reservados.
            </p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script>
    // Mobile Menu Toggle
    document.getElementById('mobile-menu-btn').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });

    // Smooth scroll para links internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Auto-hide alerts after 5 seconds
    setTimeout(() => {
        const alerts = document.querySelectorAll('.bg-green-100, .bg-red-100, .bg-yellow-100');
        alerts.forEach(alert => {
            alert.style.opacity = '0';
            alert.style.transform = 'translateY(-10px)';
            setTimeout(() => {
                alert.remove();
            }, 300);
        });
    }, 5000);
</script>

@stack('scripts')
</body>
</html>
