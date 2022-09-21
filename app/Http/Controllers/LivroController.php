<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = Livro::all();

        return view('Livro.index', compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Livro/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                //Validação dos campos
                $validateData = $request->validate([
                    'nome_livro' => 'required|max:45',
                    'nome_original' => 'max:75',
                    'genero_livro' => 'required|max:25',
                    'sinopse_livro' => 'max:500',
                    'paginas_livro' => 'required',
                    'anopub_livro' => 'required',
                    'editora_livro' => 'required'
                    ]);
            
                    //Gravando o autor
                    $livro = Livro::create($validateData);
            
                    //redirecionando a página após a gravação
            
                    return redirect('/livros')->with('success', 'Livro Cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livro = Livro::findOrFail($id);

        return view('Livro/edit', compact('livro'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nome_livro' => 'required|max:45',
            'nome_original' => 'max:75',
            'genero_livro' => 'required|max:25',
            'sinopse_livro' => 'max:500',
            'paginas_livro' => 'required',
            'anopub_livro' => 'required',
            'editora_livro' => 'required'
            ]);

        Livro::whereId($id)->update($validateData);

        return redirect('/livros')-> with('success', 'Livro Alterado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livro = Livro::findOrFail($id);
        $livro->delete();
        return redirect('/livros')->with('success', 'Livro Excluído com Sucesso!');
    }
}
