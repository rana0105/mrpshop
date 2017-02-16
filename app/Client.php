<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $fillable = ['name', 'phone', 'email', 'address', 'p_qauantity', 't_p_quantity', 'u_price', 't_price'];
}
