<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        // return $cursos;
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){
        //VALIDACION DE CAMPOS VACIOS, se puede hacer asi o sino se envia a Storecursos que esta ubicado en app/request/storecurso

        //$request->validate([
        //    'name' => 'required',
         //   'descripcion' => 'required',
         //   'categoria' => 'required'
        //]);


        // $curso = new Curso();
        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;

        // $curso->save();

        // $curso = Curso::create([
        //     'name'=>$request->name,
        //     'decripcion'=>$request->descripcion,
        //     'categoria'=>$request->categoria
        // ]);
        $curso = Curso::create($request->all());
        return redirect()->route('cursos.show', $curso->id);//redireccionar a una pagina
    }

    public function show($id){
        // return view('cursos.show', ['curso'=> $curso]);
        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
    }

    public function edit($id){
        // return view('cursos.show', ['curso'=> $curso]);
        $curso = Curso::find($id);
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request,Curso $curso ){

        $request->validate([
            'name' => 'required|max:10',
            'descripcion' => 'required|min:3',
            'categoria' => 'required'
        ]);
        // return view('cursos.show', ['curso'=> $curso]);
        // $curso = new Curso();
        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;

        // $curso->save();
        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso->id);//redireccionar a una pagina
    }

    public function destroy(Curso $curso ){

        $curso->delete();
        return redirect()->route('cursos.index');//redireccionar a una pagina
    }
}
