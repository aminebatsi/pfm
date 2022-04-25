<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tarif;

class Employe extends Model
{
    use HasFactory;
    protected $fillable = ['Emp_Nss','Emp_Nom','Emp_Pm','Emp_Tarif'];
    public function tarif()
    {
        return $this->belongsTo(Tarif::class);
    }
}
