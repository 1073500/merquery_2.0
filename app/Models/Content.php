<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Tag;
use Illuminate\Http\Request;

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

    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'content_tag_correct', 'content_id', 'tag_id');
    }

}
