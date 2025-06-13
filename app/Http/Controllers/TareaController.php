<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
class TareaController extends Controller
{
    public function index(Request $request,$funcion){
        echo "has llegado hasta aquí";
        echo $funcion;
        if($funcion==='create') $this->create($request);
        if($funcion==='delete') $this->delete($request);
        if($funcion==='update') $this->update($request); 
    }
    public function create($request){
        echo "has llegado al método de crear";
        $image=$request->file('imagen');
        $imagePath=

        Tarea::create([
            'name' => $request->input('titulo'),
            'description' => $request->input('descripcion'),
            'task_color'=>$request->input('colorTarea'),
            'header_color'=>$request->input('colorCabezado'),
            'user_task'=>$request->input('usuario'),
            'priority_level'=>$request->input('prioridad'),
            'due_date'=>$request->input('fechaFinalizacion'),
            'image'=>$request->file('imagen')
        ]);
        return redirect()->back();
    }
    public function delete($request){
        $userId=$request->input();

    }
    public function update($request){

    }
}
