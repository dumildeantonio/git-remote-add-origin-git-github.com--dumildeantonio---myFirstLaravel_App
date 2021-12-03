<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class jogosController extends Controller
{
    public function index()
    {
        //dd('Hello World');
        $jogos = Jogo::all();
        //dd($jogos);
        return view('jogos.index', ['jogos' => $jogos]);
    }

    public function create()
    {

        return view('jogos.create');
    }


    public function store(Request $request)
    {
        //dd($request);
        Jogo::create($request->all());
        return redirect()->route('jogos-index');
    }

    //Crontrolando rota de edicao

    public function edit($id)
    {
        $jogos = Jogo::where('id', $id)->first();

        if (!empty($jogos)) {
            //dd($jogo->);
            return view('jogos.edit', ['jogos' => $jogos]);
        } else {
            return redirect()->route('jogos-index');
        }
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'ano' => $request->ano,
            'valor' => $request->valor,

        ];

        Jogo::where('id', $id)->update($data);
        return redirect(route('jogos-index'));
    }

    public function destroy($id){
        // dd($id);
        Jogo::where('id', $id)->delete();
        return redirect(route('jogos-index'));
    }
};
