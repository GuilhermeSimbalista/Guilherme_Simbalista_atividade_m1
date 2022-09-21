<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores = Autor::all();

        return view('Autor.index', compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Autor.create');
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
        'nome_autor' => 'required|max:45',
        'nacion_autor' => 'required|max:45'
        ]);

        //Gravando o autor
        $autor = Autor::create($validateData);

        //redirecionando a página após a gravação

        return redirect('autor')->with('success', 'Autor Cadastrado com Sucesso!');
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
        $autor = Autor::findOrFail($id);

        return view('Autor.edit', compact('autor'));
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

            'nome_autor' => 'required|max:45',
            'nacion_autor' => 'required|max:45'
        ]);

        Autor::whereId($id)->update($validateData);

        return redirect('autor')-> with('success', 'Autor Alterado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $autor = Autor::findOrFail($id);
        $autor->delete();
        return redirect('autor')->with('success', 'Autor Excluído com Sucesso!');
    }
}
