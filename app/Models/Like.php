<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function remarks()
    {
        return $this->morphedByMany(Remark::class, 'likeable');
    }

    public function documents()
    {
        return $this->morphedByMany(Document::class, 'likeable');
    }

}
