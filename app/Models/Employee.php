<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Employee extends Model
{
    use HasFactory; 
    
    protected $fillable = [
        'username','email','address'
    ];

    public function department(){

        return $this->hasOne(Department::class);
    }
}
