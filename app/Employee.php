<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $fillable =[
        'name',
        'lastname'
    ];

    public function tasks() {
        return $this -> hasMany(Task::class);
    }
}
