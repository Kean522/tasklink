<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

     protected $fillable = [
        'id',
        'name', 
        'description',  
        'color_project', 
        'color_font',
        'due_date', 
        'image',
        'created_at',
        'updated_at'
    ];

    protected $table='project';

    protected $primaryKey='id';

    protected $casts=[
        'due_date'=>'date'
    ];

    public function users(){
        return $this->belongsToMany(User::class,'project_user','project_id','user_id');
    }
    

}
