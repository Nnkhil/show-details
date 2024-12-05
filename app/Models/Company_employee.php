<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company_employee extends Model
{
    public function role()
    {
        return $this->belongsToMany(Role::class, 'company_employee_role', 'company_employee_id', 'role_id');
    }
}
