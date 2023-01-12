<x-layout  title="Editar Livro '{!!$livro->nome!!}'">
    <x-livros.form :action="route('livros.update', $livro->id)" :paginas='$livro->paginas' :nome='$livro->nome' :update='true' />
</x-layout>