<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChucVu extends Model
{
    public    $timestamps   = false; 

    protected $table        = 'chucvu';

    protected $guarded      = ['nv_ma', 'role_id'];
    protected $primaryKey   = ['nv_ma', 'role_id'];

    public    $incrementing = false;
}
