@extends('layouts.main_layout')

@section('title', 'Página Inicial')
@section('page-title', 'Bem-vindo ao MeuApp!')
@section('page-subtitle', 'Uma aplicação Laravel moderna e elegante')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
            <div class="text-purple-600 text-3xl mb-4">
                <i class="fas fa-rocket"></i>
            </div>
            <h3 class="text-xl font-semibold mb-3">Rápido</h3>
            <p class="text-gray-600">Construído com as melhores práticas para máxima performance.</p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
            <div class="text-purple-600 text-3xl mb-4">
                <i class="fas fa-mobile-alt"></i>
            </div>
            <h3 class="text-xl font-semibold mb-3">Responsivo</h3>
            <p class="text-gray-600">Funciona perfeitamente em dispositivos móveis e desktop.</p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
            <div class="text-purple-600 text-3xl mb-4">
                <i class="fas fa-shield-alt"></i>
            </div>
            <h3 class="text-xl font-semibold mb-3">Seguro</h3>
            <p class="text-gray-600">Implementa as melhores práticas de segurança do Laravel.</p>
        </div>
    </div>

    <div class="mt-12 text-center">
        <a href="{{ url('/sobre') }}" class="inline-flex items-center px-6 py-3 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition-colors">
            <i class="fas fa-arrow-right mr-2"></i>
            Saiba Mais
        </a>
    </div>
@endsection
