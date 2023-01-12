<x-layout title="Meus Livros">
    <a href="{{ route('livros.create') }}" class="btn btn-primary mb-2">Adicionar Livro</a>
    
    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset


    <ul class="list-group ">
        @foreach ($livros as $livro)
        <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $livro->nome }} 

              <span class="badge bg-primary rounded-pill">Páginas :{{$livro->paginas}}</span>  

            <span class="d-flex">


                <a href="{{ route('livros.edit', $livro->id) }}" class="btn btn-primary btn-sn">
                    E
                </a>

                <form action="{{ route('livros.destroy', $livro->id) }}" method="post" class="ms-2">
                    @csrf
                    @method('DELETE')
                    <button class="btn-sn btn btn-danger ">X</button>
                </form>
            </span>
        </li>
        @endforeach
    </ul>
</x-layout>