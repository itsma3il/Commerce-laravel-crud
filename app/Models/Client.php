<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom','sexe','tel','email','fonction'];

    public function commandes(){
        return $this->hasMany(Commande::class);
    }
}
