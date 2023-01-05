<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function remarkable()
    {
        return $this->morphTo();
    }

    public function likes()
    {
        return $this->morphToMany(Like::class, 'likeable');
    }
}
