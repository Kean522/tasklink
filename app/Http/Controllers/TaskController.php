<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index($projectId){
        $project=Project::findOrFail($projectId);
        $tasks=$project->tasks;
        return view('tasks.index',compact('project','tasks'));
    }
}
