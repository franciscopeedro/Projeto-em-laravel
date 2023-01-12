<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Requests\LivrosFormRequest;
use App\Models\Chapter;
use App\Models\Livro;
use App\Models\Livros;
use App\Models\Page;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function index(Request $request)
    {
        $livros = Livro::query()->orderby('nome')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        return view('livros.index')->with('livros',$livros)->with('mensagemSucesso',$mensagemSucesso);
    }

    public function create()
    {
        return view('livros.create');
    }

    public function store(LivrosFormRequest $request)
    {
        $livro = Livro::create($request->all());
        $paglivros = $request->input('número de páginas');
        $livro->paginas= $paglivros;

        return redirect('/livros')
        ->with('mensagem.sucesso',"O livro '$livro->nome' foi adicionado com sucesso!");
    }

    public function destroy(Livro $livro)
    {
        $livro->delete();
        return to_route('livros.index')
        ->with('mensagem.sucesso',"O livro '$livro->nome' foi removido com sucesso!");
    }

    public function edit(Livro $livro)
    {
        return view('livros.edit')->with('livro',$livro);
    }

    public function update(Livro $livro, LivrosFormRequest $request)
    {
        $livro->fill($request->all());
        $livro->save();
        return to_route('livros.index')
        ->with('mensagem.sucesso',"O livro '$livro->nome' com '$livro->paginas' páginas foi atualizado com sucesso!" );
    }
}
