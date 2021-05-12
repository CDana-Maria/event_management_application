<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'id',
        'price',
        'sponsor_id',
        'description',
        'created_at'
    ];

    public function sponsor(){
        return $this->belongsTo(Sponsor::class);
    }

    public function organizator(){
        return $this->belongsToMany(Organizator::class);
    }

}
