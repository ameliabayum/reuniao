<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Perfil;
class UsuarioController extends Controller
{
    
    public function index()
    {
        $usuarios = Usuario::with('perfis')->get();
      
     
         return view('Usuario.index')->with('usuarios', $usuarios);
    }

   
    public function create()
    {
        return view('Usuario.create');
    }

   
    public function store(Request $request)
    {       
        $usuario = new Usuario();
        $usuario->nome_usuario = $request->input('nome_usuario');
        $usuario->email_usuario = $request->input('email_usuario');
        $usuario->senha_usuario = $request->input('senha_usuario');
        $usuario->perfil_id = $request->input('perfil_usuario');
        $usuario->save();
        $usuarios = Usuario::with('perfis')->get();
            return view('Usuario.index')->with('msg', 'Usuário cadastrado com sucesso!')->with('usuarios', $usuarios);
    }

 
    
    public function edit(string $id)
    {
        $usuario = Usuario::find($id);
 
        if ($usuario) {
            return view('Usuario.edit')->with('usuario', $usuario);
        } else {
            $usuarios = Usuario::all();            
            return view('Usuario.index')->with('usuarios', $usuarios)
                ->with('msg', 'Usuário não encontrado!');
        }
    }

  
    public function update(Request $request, string $id)
    {
              
        $usuario = Usuario::find($id);
        
        $usuario->nome_usuario = $request->input('nome_usuario');
        $usuario->email_usuario = $request->input('email_usuario');
        $usuario->senha_usuario = Hash::make($request->input('senha_usuario'));
        $usuario->perfil_id = $request->input('perfil_usuario');        
        $usuario->save();
        
        $usuarios = usuario::all();
        return view('Usuario.index')->with('usuarios', $usuarios)
            ->with('msg', 'Usuário atualizado com sucesso!');
       
    }

    
    public function destroy(string $id)
    {       
        $usuario = usuario::find($id);
    
        $usuario->delete();

        $usuarios = usuario::all();
        return view('Usuario.index')->with('usuarios', $usuarios)
            ->with('msg', "Usuário excluído com sucesso!");
    }
}