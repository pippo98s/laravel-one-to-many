<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $fillable = [
        'name',
        'desc'
    ];

    public function employee() {

      return $this -> belongsTo(Employee::class);
    }
}
