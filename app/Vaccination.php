<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    protected $table = "vaccinations";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'name', 'nik', 'vaccination_date'
    ];
}
