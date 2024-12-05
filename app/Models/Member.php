<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function member_detail(){

        return $this->hasOne(Member_detail::class);
    }
}


