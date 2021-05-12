<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizator extends Model
{
    use HasFactory;

    protected $table = 'organizators';

    protected $fillable = [
        'id',
        'name'
    ];

    public function contact(){
        return $this->hasOne(Contact::class);
    }

    public function service(){
        return $this->belongsToMany(Service::class);
    }

}
