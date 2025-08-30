@extends('layouts.main_layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col">
                @include('top_bar')

                <div class="row justify-content-center mt-4">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header bg-danger text-white">
                                <h5 class="mb-0"><i class="fa-solid fa-triangle-exclamation me-2"></i>Confirmar Exclusão</h5>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-warning" role="alert">
                                    <strong>Atenção!</strong> Esta ação não pode ser desfeita.
                                </div>

                                <h6 class="text-muted mb-3">Você tem certeza que deseja excluir a seguinte nota?</h6>

                                {{-- Preview da nota --}}
                                <div class="card bg-light mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title text-info">{{ $note->title }}</h5>
                                        <p class="card-text text-secondary">{{ Str::limit($note->text, 200) }}</p>
                                        <small class="text-muted">
                                            Criada em: {{ $note->created_at->format('d/m/Y H:i') }}
                                            @if ($note->updated_at != $note->created_at)
                                                | Última atualização: {{ $note->updated_at->format('d/m/Y H:i') }}
                                            @endif
                                        </small>
                                    </div>
                                </div>

                                {{-- Botões de ação --}}
                                <div class="d-flex justify-content-between">
                                    <a href="{{ url()->previous() }}" class="btn btn-secondary">
                                        <i class="fa-solid fa-arrow-left me-2"></i>Cancelar
                                    </a>

                                    <form action="{{ route('deleteNote', $note->uuid) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa-regular fa-trash-can me-2"></i>Sim, Excluir Nota
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
