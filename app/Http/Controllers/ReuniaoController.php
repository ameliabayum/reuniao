<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Reuniao;

class ReuniaoController extends Controller
{
    
    public function index()
    {
        $reunioes = Reuniao::all();
      
     
         return view('Reuniao.index')->with('reunioes', $reunioes);
    }

   
    public function create()
    {
        return view('Reuniao.create');
    }

   
    public function store(Request $request)
    {       
    }
    
    public function edit(string $id)
    {
       
    }

  
    public function update(Request $request, string $id)
    {  $reuniao = Reuniao::find($id);
              if ($request->input('negar_reuniao')) {
                $reuniao->status_reuniao = "Negada";        
              }
              if ($request->input('aceitar_reuniao')) {
                $reuniao->status_reuniao = "Aceita";        
              }
      
        
        $reuniao->save();
        
        $reunioes = Reuniao::all();
        return view('Reuniao.index')->with('reunioes', $reunioes)
            ->with('msg', 'Reunião atualizada com sucesso!');
       
    }

    
    public function destroy(string $id)
    {       
        $reuniao = Reuniao::find($id);
    
        $reuniao->delete();

        $reunioes = Reuniao::all();
        return view('Reuniao.index')->with('reunioes', $reunioes)
            ->with('msg', "Reunião excluída com sucesso!");
    }
}