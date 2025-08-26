@extends('layouts.main_layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col">

                @include('top_bar')

                <!-- nenhuma nota disponível -->
                <div class="row mt-5">
                    <div class="col text-center">
                        <p class="display-6 mb-5 text-secondary opacity-50">Você não tem notas disponíveis!</p>
                        <a href="#" class="btn btn-secondary btn-lg p-3 px-5">
                            <i class="fa-regular fa-pen-to-square me-3"></i>Criar Sua Primeira Nota
                        </a>
                    </div>
                </div>

                <!-- temp -->
                <hr class="my-5">

                <!-- notas estão disponíveis -->
                <div class="d-flex justify-content-end mb-3">
                    <a href="#" class="btn btn-secondary px-3">
                        <i class="fa-regular fa-pen-to-square me-2"></i>Nova Nota
                    </a>
                </div>

                <div class="row">
                    <div class="col">
                        @foreach($notes as $note )
                        <div class="card p-4">
                            <div class="row">
                                <div class="col">
                                    <h4 class="text-info">{{ $note->title }}</h4>
                                    <small class="text-secondary"><span class="opacity-75 me-2">Criado
                                            em:</span><strong>{{ $note->created_at->format('d/m/Y H:i:s') }}</strong></small>
                                </div>
                                <div class="col text-end">
                                    <a href="#" class="btn btn-outline-secondary btn-sm mx-1"><i
                                            class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="#" class="btn btn-outline-danger btn-sm mx-1"><i
                                            class="fa-regular fa-trash-can"></i></a>
                                </div>
                            </div>

                            <hr>
                            <p class="text-secondary">{{ $note->text }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
