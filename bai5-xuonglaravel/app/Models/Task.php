<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public function project(){
        return $this->belongsTo(Project::class);
    }
    protected $fillable=[
        'name',
        'status',

    ];
    protected $attributes=[
        'status'=>'Chưa thực hiện'

    ];
}
