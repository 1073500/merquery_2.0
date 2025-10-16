<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        //een op veel
        return $this->belongsTo(User::class);
    }
}
