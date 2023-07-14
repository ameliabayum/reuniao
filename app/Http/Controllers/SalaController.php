<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sala;
class SalaController extends Controller
{
    
    public function index()
    {
        $salas = Sala::all();
      
     
         return view('Sala.index')->with('salas', $salas);
    }

   
    public function create()
    {
        return view('Sala.create');
    }

   
    public function store(Request $request)
    {       
        $sala = new Sala();
        $sala->nome_sala = $request->input('nome_sala');
        $sala->horario_abertura = $request->input('horario_abertura');
        $sala->horario_fechamento = $request->input('horario_fechamento');
        $sala->save();
        $salas = Sala::all();
            return view('Sala.index')->with('msg', 'Sala cadastrado com sucesso!')->with('salas', $salas);
    }

 
    
    public function edit(string $id)
    {
        $sala = Sala::find($id);
 
        if ($sala) {
            return view('Sala.edit')->with('sala', $sala);
        } else {
            $salas = Sala::all();            
            return view('Sala.index')->with('salas', $salas)
                ->with('msg', 'Sala não encontrado!');
        }
    }

  
    public function update(Request $request, string $id)
    {
              
        $sala = Sala::find($id);
        
        $sala->nome_sala = $request->input('nome_sala');
        $sala->horario_abertura = $request->input('horario_abertura');
        $sala->horario_fechamento = $request->input('horario_fechamento');
        $sala->save();
        
        $salas = Sala::all();
        return view('Sala.index')->with('salas', $salas)
            ->with('msg', 'Sala atualizado com sucesso!');
       
    }

    
    public function destroy(string $id)
    {       
        $sala = Sala::find($id);
    
        $sala->delete();

        $salas = Sala::all();
        return view('Sala.index')->with('salas', $salas)
            ->with('msg', "Sala excluído com sucesso!");
    }
}