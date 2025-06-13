<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name', 
        'description', 
        'task_color', 
        'header_color', 
        'user_task', 
        'priority_level', 
        'due_date', 
        'image'
    ];

    protected $table='task';

    protected $primaryKey='id';

    protected $casts=[
        'due_date'=>'date'
    ];


}
