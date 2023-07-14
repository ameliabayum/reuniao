<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Perfil;
class UsuarioController extends Controller
{
    
    public function index()
    {
        $usuarios = Usuario::with('perfis')->get();
        return $usuarios;
     
        // return view('Usuario.index')->with('usuarios', $usuarios);
    }

   
    public function create()
    {
        return view('Usuario.create');
    }

   
    public function store(Request $request)
    {
    return  $request;
    $usuario = new Usuario();
    $usuario->nome_usuario = $request->input('nome_usuario');
    $usuario->email_usuario = $request->input('email_usuario');
    $usuario->senha_usuario = $request->input('senha_usuario');
    $usuario->pefil_usuario = $request->input('perfil_usuario');
    //$usuario->save();
   
  //  return view('Usuario.index')->with('msg', 'Veículo cadastrado com sucesso!');      
    }

 
    public function show(string $id)
    {
      
    }

    
    public function edit(string $id)
    {
   
    }

  
    public function update(Request $request, string $id)
    {
        
    }

    
    public function destroy(string $id)
    {
        
    }
}
