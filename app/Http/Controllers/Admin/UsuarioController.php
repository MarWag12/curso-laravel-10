<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
class UsuarioController extends Controller
{
    public function index(Usuario $usuario){
        
        $usuarios = $usuario->all();
        return view('admin/usuarios/index', compact('usuarios'));
    } 

    public function show(string|int $id)
    {
        
        if (!$usuario = Usuario::find($id)) {
            return back();
        }
        return view('admin/usuarios/show', compact('usuario'));
    } 

    public function create(){
        
        return view('admin/usuarios/create');
    } 

    public function store(Request $request){
        
        $data = $request->all();
        Usuario::create($data);
        return redirect()->route('usuario.index');

    } 
}


