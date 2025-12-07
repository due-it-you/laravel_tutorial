<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    // ホワイトリスト(指定されたフィールドのみマスアサインメント可能)
    protected $fillable = [
        'name'
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
