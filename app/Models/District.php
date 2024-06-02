<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $primaryKey = 'district_id';
    protected $guarded = [];
    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }
    public function schools()
    {
        return $this->hasMany(School::class, 'district_id');
    }
    public function sectors()
    {
        return $this->hasMany(Sector::class, 'district_id');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'district_id');
    }
    public function employees()
    {
        return $this->hasMany(Employee::class, 'district_id');
    }
    public function mitations()
    {
        return $this->hasMany(Mitation::class, 'district_id');
    }
//

    public function transfers()
    {
        return $this->hasMany(Transfer::class, 'district_id');
    }
    public function cells()
    {
        return $this->hasMany(Cell::class, 'district_id');
    }
    


    



}
