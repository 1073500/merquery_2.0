<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Content;
use Illuminate\Http\Request;

class Tag extends Model
{

    protected $fillable = [
        'tag_name'
    ];

    public function contents(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Content::class, 'content_tag_correct', 'tag_id', 'content_id');
    }
}
