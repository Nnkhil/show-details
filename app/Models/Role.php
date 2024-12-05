<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function company_employee()
    {
        return $this->belongsToMany(Company_employee::class, 'company_employee_role', 'role_id', 'company_employee_id');
    }   
}
