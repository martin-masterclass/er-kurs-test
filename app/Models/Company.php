<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }

    public function contact_people()
    {
        return $this->hasManyThrough(ContactPerson::class, Branch::class);
    }

    public function bank_account()
    {
        return $this->hasOne(BankAccount::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function remark()
    {
        return $this->morphOne(Remark::class, 'remarkable');
    }

    public function documents()
    {
        return $this->morphMany(Document::class, 'documentable');
    }
}
