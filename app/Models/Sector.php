<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;
    protected $primaryKey = 'sector_id';
    protected $guarded = [];

    public function district()
    {
        return $this->belongsTo(District::class);
    }
    public function cell()
    {
        return $this->hasMany(Cell::class);
    }
//user
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
    public function mitations()
    {
        return $this->hasMany(Mitation::class);
    }
    public function transfers()
    {
        return $this->hasMany(Transfer::class);
    }
    public function schools()
    {
        return $this->hasMany(School::class);
    }
    public function marks()
    {
        return $this->hasMany(Mark::class);
    }
    
}
