<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agriculteur extends Model
{
    use HasFactory;
    protected $fillable = ['Agr_Nom','Agr_Prenom','Agr_Resid'];
}
