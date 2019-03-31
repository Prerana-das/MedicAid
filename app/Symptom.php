<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    protected $table = 'symptoms';
    protected $primaryKey = 'symptomID';
    protected $fillable = ['symptom_name','userID'];
}
