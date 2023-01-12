<form action="{{ $action  }}" method="post">
    @csrf

    @if($update)
    @method('PUT')
    @endif

    <div class="row mb-3">
        <div class="col-8">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" autofocus name="nome" id="nome" class="form-control" 
            @isset($nome)value="{{$nome}}" @endisset placeholder="Nome do livro">
        </div>
        <div class="col-2">
            <label for="paginas" class="form-label">Número de Páginas:</label>
            <input type="text" autofocus id="paginas" name="paginas" class="form-control" 
            @isset($paginas)value="{{$paginas}}"@endisset placeholder="paginas">
        </div>
    </div>

    <a href="{{ route('livros.store')  }}" class="btn btn-danger">Cancelar</a>
    <button type="submit" class="btn btn-dark">Adicionar</button>
</form>