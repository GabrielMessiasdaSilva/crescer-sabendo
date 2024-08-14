<?php

namespace App\Http\Controllers;

use App\Models\Ong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;;

class OngController
{
    public function create(Request $req)
    {
        $senha = $req->input('Senha');
        $c_senha = $req->input('C_Senha');

        $ong = new Ong();
        $ong->Nome = $req->input('Nome');
        $ong->CPF = $req->input('CPF');
        $ong->Nascimento = $req->input('Nascimento');
        $ong->Telefone = $req->input('Telefone');
        $ong->Formacao = $req->input('Formacao');
        $ong->Email = $req->input('Email');
        $ong->Senha = Hash::make($req->input('Senha'));

        if ($c_senha !== $senha) return redirect()->back()->withInput()->withErrors(['senha' => 'senhas não coincidem']);


        $ong->save();
        Session::put('ong', $ong);
        return redirect('/ong/account');
    }
}
