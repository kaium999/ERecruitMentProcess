<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    public function ProfilePicture(){
        return $this->hasOne(ProfilePicture::class);
    }
    public function Education(){
        return $this->hasmany(Education::class);
    }
    public function CV(){
        return $this->hasOne(CV::class);
    }
}
