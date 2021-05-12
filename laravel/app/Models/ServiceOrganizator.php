<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrganizator extends Model
{
    use HasFactory;

    protected $table = 'events_and_organizators';

    protected $fillable = [
        'id',
        'service_id',
        'organizator_id'
    ];

}
