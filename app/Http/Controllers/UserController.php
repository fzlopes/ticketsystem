<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('profiles.edit');
    }

     
    public function store(Request $request)
    {
        $user = auth()->user();

        $data = $request->all();

        if ($data['password'] != null)
             $data['password'] =  bcrypt($data['password']);
         else
            unset($data['password']);

        
         $update = $user->update($data);

        if ($update)
            return redirect()
                        ->back()
                        ->with('success', 'Sucesso ao atualizar o perfil do usuário!');
        
         return redirect()
                        ->back()
                        ->with('error', 'Falha ao atualizar o perfil do usuário...');
    }
   
}
