<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
     protected $table = 'specialists';
    protected $primaryKey = 'specialistID';
    protected $fillable = ['specialist_name','diseaseID','userID'];
}
