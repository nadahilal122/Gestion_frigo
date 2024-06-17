<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBonLivrason extends Model
{
    use HasFactory;
    protected $table = 'detail_bon_livraisons';
    protected $fillable = [
        'bon_livraison_id',
        'conditionnement_id',
        'produit_id',
        'qte',
        'prix_vente',
    ];

    public function bonLivraison() {
        return $this->belongsTo(BonLivrason::class);
    }

    public function conditionnement()
    {
        return $this->belongsTo(Conditionnement::class);
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}
