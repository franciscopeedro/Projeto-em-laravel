<x-layout title="Novo Livro">
    <form action="{{ route('livros.store') }}" method="post">
        @csrf
        <strong></strong>

        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-label" style="color:green"><strong>Nome:</strong></label>
                <input type="text" autofocus id="nome" name="nome" class="form-control" value="{{old('nome')}}" placeholder="{{ old('nome') }}">
            </div>   
            <div class="col-2">
                <label for="paginas" class="form-label" style="color:brown"><strong>Número de Páginas:</strong></label>
                <input type="text" autofocus id="paginas" name="paginas" class="form-control" value="{{old('paginas')}}" placeholder="{{ old('paginas') }}">
            </div>
        </div>
        <a href="{{route('livros.index')}}"class="btn btn-sn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-dark">Adicionar</button>
    </form>

</x-layout>