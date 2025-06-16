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
        'priority_level', 
        'due_date', 
        'image',
        'created_at',
        'updated_at'
    ];

    protected $table='task';

    protected $primaryKey='id';

    protected $casts=[
        'due_date'=>'date'
    ];


    public function users(){
        return $this->belongsToMany(User::class,'task_user','task_id','user_id');
                                            //task_user de la tabla intermediaria
                                            //task_id es el campo de la tabla task_user para ello coge el campo id de la clase Tarea
                                            //user_id es el campo de la tabla task_user para ello coge el valor que le pasamos mediante la función y ponemos User::class
    }

}
