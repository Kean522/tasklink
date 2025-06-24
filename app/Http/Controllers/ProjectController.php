<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{

    

    public function create(Request $request){

        if(!empty($request->input('projectId'))) $this->update($request);
        else{
            $image=$request->file('imagen');
            $imagePath= $image->move(storage_path('app/public/profiles'),$image->getClientOriginalName());
            
            $project=Project::create([
                'name'=>$request->input('titulo'),
                'description'=>$request->input('descripcion'),
                'color_project'=>$request->input('projectBackgroundColor'),
                'color_font'=>$request->input('font'),
                'color_progress_bar'=>$request->input('progressBarBackground'),
                'due_date'=>$request->input('fechaFinalizacion'),
                'image'=>strval($imagePath)
            ]);

            $project->users()->attach($request->input('usuario'));
            return redirect()->back();
        }

    }

    public function update(Request $request){
        $projectId=$request->input('projectId');
        $project=Project::find($projectId);
        
        $project->update([
            'name'=>$request->input('titulo'),
            'description'=>$request->input('descripcion'),
            'color_project'=>$request->input('projectBackgroundColor'),
            'color_font'=>$request->input('font'),
            'color_progress_bar'=>$request->input('progressBarBackground'),
            'due_date'=>$request->input('fechaFinalizacion'),
            'image'=>$request->input('rutaImagen')
        ]);
        $project->users()->sync($request->input('usuario'));
        return redirect()->back();
    }

    public function delete(Request $request){
        $projectId=$request->input('id');
        $project=Project::find($projectId);
        if($project) $project->delete();
        else echo "Error 303";
        return redirect()->back();
    }
}
