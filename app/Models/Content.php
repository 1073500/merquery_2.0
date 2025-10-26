<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'title', 'name', 'constellation', 'city', 'town',
        'province', 'country', 'date', 'description', 'type'
    ];
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        //een op veel
        return $this->belongsTo(User::class);
    }
}
