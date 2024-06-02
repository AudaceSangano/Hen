<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function districts()
    {
        return $this->hasMany(District::class, 'province_id');
    }
    public function sectors()
    {
        return $this->hasMany(Sector::class, 'province_id');
    }

    public function schools()
    {
        return $this->hasMany(School::class, 'province_id');
    }
    public function cells()
    {
        return $this->hasMany(Cell::class, 'province_id');
    }
    public function users()
    {
        return $this->hasMany(User::class, 'province_id');
    }
    public function employees()
    {
        return $this->hasMany(Employee::class, 'province_id');
    }
    public function mitations()
    {
        return $this->hasMany(Mitation::class, 'province_id');
    }
    public function transfers()
    {
        return $this->hasMany(Transfer::class, 'province_id');
    }
    

}



