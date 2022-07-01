<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobpost extends Model
{
    use HasFactory;
    public function Employee(){
        return $this->belongsto(Employee::class);
    }
    public function CV(){
        return $this->hasmany(CV::class);
    }
}
