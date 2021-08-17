<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientReviewModel extends Model
{
    protected $table = 'clientreview';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
