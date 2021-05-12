<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    protected $table = 'sponsors';

    protected $fillable = [
        'id',
        'sponsor_name',
        'phone_number',
        'email'
    ];

    public function service(){
        return $this->hasMany(Service::class);
    }

}


