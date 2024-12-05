<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $timestamps = false;
    protected $fillable = ['department_name', 'employee_id'];

    
    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
