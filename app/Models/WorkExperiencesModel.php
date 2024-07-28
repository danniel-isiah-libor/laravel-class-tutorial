<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperiencesModel extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id','company','from','to','position'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
