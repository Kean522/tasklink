<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function create(Request $request){
        $image=$request->file('imagen');
        $imagePath= $image->move(storage_path('app/public/profiles'),$image->getClientOriginalName());
        
        
        $project=Project::create([
            'name'=>$request->input('titulo'),
            'description'=>$request->input('descripcion'),
            'color_project'=>$request->input('projectBackgroundColor'),
            'color_font'=>$request->input('font'),
            'due_date'=>$request->input('fechaFinalizacion'),
            'image'=>strval($imagePath)
        ]);

        echo $project;
        $project->users()->attach($request->input('usuario'));
        return redirect()->back();
    }

    public function delete(Request $request){
        $projectId=$request->input('id');
        $project=Project::find($projectId);
        if($project) $project->delete();
        return redirect()->back();
    }
}
