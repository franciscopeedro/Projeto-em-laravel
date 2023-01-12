<x-layout title="Novo Livro">
    <form action="{{ route('livros.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" autofocus id="nome" name="nome" class="form-control" value="{{old('nome')}}" placeholder="{{ old('nome') }}">
            </div>   
            <div class="col-2">
                <label for="paginas" class="form-label">Número de Páginas:</label>
                <input type="text" autofocus id="paginas" name="paginas" class="form-control" value="{{old('paginas')}}" placeholder="{{ old('paginas') }}">
            </div>
        </div>
        <a href="{{route('livros.index')}}"class="btn btn-sn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-dark">Adicionar</button>
    </form>

</x-layout>