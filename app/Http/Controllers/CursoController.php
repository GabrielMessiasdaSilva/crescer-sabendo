<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all(); // Fetch all courses
        return view('user/ong/courses', compact('cursos')); // Pass courses to the view
    }
    
    

    public function store(Request $request)
    {
        $request->validate([
            'Nome' => 'required|string|max:255',
            'Duracao' => 'required|string|max:255',
            'Id_Professor' => 'required|string|max:255',
            'Itens_Aula' => 'required|string|max:255',
            'Sobre' => 'required|string|max:255',
            'Dias' => 'required|string|max:255',
            'Foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $curso = new Curso();
        $curso->Nome = $request->Nome;
        $curso->Duracao = $request->Duracao;
        $curso->Professor = $request->Professor;
        $curso->Itens_Aula = $request->Itens_Aula;
        $curso->Sobre = $request->Sobre;
        $curso->Dias = $request->Dias;
        

        if ($request->hasFile('Foto')) {
            $file = $request->file('Foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public', $filename);
            $curso->Foto = $filename;
        }

        $curso->save();

        return redirect()->route('cursos.index')->with('success', 'Curso criado com sucesso.');
    }

    public function show($id)
    {
        $curso = Curso::findOrFail($id);
        return response()->json($curso);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nome' => 'required|string|max:255',
            'Duracao' => 'required|string|max:255',
            'Professor' => 'required|string|max:255',
            'Itens_Aula' => 'required|string|max:255',
            'Sobre' => 'required|string|max:255',
            'Dias' => 'required|string|max:255',
            'Foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $curso = Curso::findOrFail($id);
        $curso->Nome = $request->Nome;
        $curso->Duracao = $request->Duracao;
        $curso->Professor = $request->Professor;
        $curso->Itens_Aula = $request->Itens_Aula;
        $curso->Sobre = $request->Sobre;
        $curso->Dias = $request->Dias;

        if ($request->hasFile('Foto')) {
            $file = $request->file('Foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public', $filename);
            $curso->Foto = $filename;
        }

        $curso->save();

        return redirect()->route('cursos.index')->with('success', 'Curso atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        if ($curso->Foto) {
            Storage::delete('public/' . $curso->Foto);
        }
        $curso->delete();

        return redirect()->route('cursos.index')->with('success', 'Curso excluído com sucesso.');
    }
}
