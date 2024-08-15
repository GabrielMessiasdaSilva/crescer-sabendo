<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProfessorController
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        $senha = $req->input('Senha');
        $c_senha = $req->input('C_Senha');

        // Validação dos dados
        $validator = Validator::make($req->all(), [
            'Nome' => 'required|string|max:255',
            'CPF' => 'required|string|size:14|unique:professores,cpf',
            'Nascimento' => 'required|date',
            'Telefone' => 'nullable|string|max:15',
            'Formacao' => 'nullable|string|max:255',
            'Email' => 'required|email|unique:professores,email',
            'Senha' => 'required|string|min:8',
            'C_Senha' => 'required|string|same:Senha',
            'Foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'Nome.required' => 'O campo nome deve ser preenchido',
            'CPF.required' => 'O campo CPF deve ser preenchido',
            'CPF.size' => 'O campo CPF deve ter exatamente :size caracteres',
            'Nascimento.required' => 'O campo data de nascimento deve ser preenchido',
            'Email.required' => 'O campo email deve ser preenchido',
            'Email.email' => 'O campo email deve ser um endereço de e-mail válido',
            'Email.unique' => 'O e-mail informado já está em uso',
            'Senha.required' => 'O campo senha deve ser preenchido',
            'Senha.min' => 'A senha deve ter pelo menos :min caracteres',
            'C_Senha.required' => 'O campo confirmação de senha deve ser preenchido',
            'C_Senha.same' => 'A confirmação da senha não coincide com a senha',
            'Foto.image' => 'A Foto deve ser uma imagem válida',
            'Foto.mimes' => 'A Foto deve estar em um dos formatos: jpeg, png, jpg, gif',
            'Foto.max' => 'A Foto não pode ter mais que 2MB',
        ]);

        // Retorna os erros de validação se houver
        if ($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();


        // Criação do objeto Professor
        $professor = new Professor();
        $professor->Nome = $req->input('Nome');
        $professor->CPF = $req->input('CPF');
        $professor->Nascimento = $req->input('Nascimento');
        $professor->Telefone = $req->input('Telefone');
        $professor->Formacao = $req->input('Formacao');
        $professor->Email = $req->input('Email');
        $professor->Senha = Hash::make($req->input('Senha'));

        // Verificação e armazenamento da imagem
        if ($req->hasFile('Foto') && $req->file('Foto')->isValid()) {
            $professor->Foto = $req->file('Foto')->store('fotos', 'public');
        }


        // Verificação de correspondência das senhas
        if ($c_senha !== $senha) {
            return redirect()->back()->withInput()->withErrors(['senha' => 'Senhas não coincidem']);
        }

        // Salvamento do professor no banco de dados
        $professor->save();

        // Armazenamento do professor na sessão e redirecionamento
        Session::put('professor', $professor);
        return redirect('/prof/account');
    }

    public function edit($id)
    {
        $id = Session::get('professor');
        $professor = Professor::findOrFail($id);
        return view('user.prof.account', compact('professor'));
    }

    public function update(Request $request, $id)
    {
        // Obtenha o ID do professor corretamente
        $id = $request->route('id');

        Log::info('Método update foi chamado.');

        $validated = $request->validate([
            'Nome' => 'required|string|max:255',
            'Email' => 'required|email|max:255',
            'Telefone' => 'required|string|max:15',
            'Formacao' => 'required|string|max:255',
            'Nascimento' => 'required|date',
            'Foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'FotoBack' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Encontre o professor usando a coluna correta
        $professor = Professor::where('Id_Professor', $id)->firstOrFail();

        // Atualize os dados
        $professor->update($validated);

        // Verifique se uma nova foto foi enviada e atualize-a
        if ($request->hasFile('Foto')) {
            if ($professor->Foto) {
                Storage::disk('public')->delete($professor->Foto);
            }
            $path = $request->file('Foto')->store('fotos_professores', 'public');
            $professor->Foto = $path;
        }

        if ($request->hasFile('FotoBack')) {
            if ($professor->FotoBack) {
                Storage::disk('public')->delete($professor->FotoBack);
            }
            $path = $request->file('FotoBack')->store('fotos_professores', 'public');
            $professor->FotoBack = $path;
        }

        // Salve as mudanças
        $professor->save();

        // Redirecione para a página de edição do professor
        Session::put('professor', $professor);
        return redirect('/prof/account');
    }


}
