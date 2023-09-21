<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [ // definit proprietà model 
        'name',
        'description',
        'framework',
        'creation_date',
    
    ];


    //$guarded per i non mass assignment
}
