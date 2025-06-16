<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
class TareaController extends Controller
{
    public function index(Request $request,$funcion){
        if($funcion==='create') $this->create($request);
        if($funcion==='delete') $this->delete($request);
        if($funcion==='update') $this->update($request); 
    }
    public function create(Request $request){
        $image=$request->file('imagen');
        $imagePath= $image->move(storage_path('app/public/profiles'),$image->getClientOriginalName());
        
        $task=Tarea::create([
            'name' => $request->input('titulo'),
            'description' => $request->input('descripcion'),
            'task_color'=>$request->input('colorTarea'),
            'header_color'=>$request->input('colorCabezado'),
            'priority_level'=>$request->input('prioridad'),
            'due_date'=>$request->input('fechaFinalizacion'),
            'image'=>strval($imagePath)
        ]);
        $task->users()->attach($request->input('usuario'));
        return redirect()->back();
     
       
        
    }
    public function delete($request){
        $userId=$request->input();

    }
    public function update($request){

    }
}
