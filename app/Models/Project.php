<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function documents()
    {
        return $this->morphMany(Document::class, 'documentable');
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function remark()
    {
        return $this->morphOne(Remark::class, 'remarkable');
    }

}
