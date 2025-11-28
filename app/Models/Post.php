<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // ホワイトリスト(指定されたフィールドのみマスアサインメント可能)
    protected $fillable = [
        'name'
    ];
}
