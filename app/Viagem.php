<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viagem extends Model
{
    protected $table        =   'viagens';
    protected $primaryKey   =   'id';
    protected $guarded = [];
}
