<div class="row">
    <div class="col">
        <div class="card p-4">
            <div class="row">
                <div class="col">
                    <h4 class="text-info">{{ $note->title }}</h4>
                    <small class="text-secondary"><span class="opacity-75 me-2">Criado
                            em:</span><strong>{{ $note->created_at->format('d/m/Y H:i') }}</strong></small>
                    @if ($note->updated_at != $note->created_at)
                        <br>
                        <small class="text-secondary"><span class="opacity-75 me-2">Última atualização
                                em:</span><strong>{{ $note->updated_at->format('d/m/Y H:i') }}</strong>
                    @endif
                </div>
                <div class="col text-end">
                    <a href="{{ route('editNote', $note->uuid) }}" class="btn btn-outline-secondary btn-sm mx-1"><i
                            class="fa-regular fa-pen-to-square"></i></a>

                    {{-- Botão de deletar --}}
                    <form action="{{ route('deleteNoteConfirm', $note->uuid) }}" method="GET" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm mx-1">
                            <i class="fa-regular fa-trash-can"></i>
                        </button>
                    </form>
                </div>
            </div>
            <hr>
            <p class="text-secondary">{{ $note->text }}</p>
        </div>
    </div>
</div>
