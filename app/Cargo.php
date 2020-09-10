<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cargo extends Model
{
    protected $table        =   'cargos';
    protected $primaryKey   =   'id';
    protected $guarded = [];
}
