<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function documentable()
    {
        return $this->morphTo();
    }

    public function remark()
    {
        return $this->morphOne(Remark::class, 'remarkable');
    }

    public function likes()
    {
        return $this->morphToMany(Like::class, 'likeable');
    }

}
