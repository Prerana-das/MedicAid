<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $table = 'diseases';
    protected $primaryKey = 'diseaseID';
    protected $fillable = ['disease_name','disease_description','disease_tag','tips'];
}
