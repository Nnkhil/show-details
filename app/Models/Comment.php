<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
}
