<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    protected $fillable = ['title', 'description', 'price', 'availability'];
}
// Le code ci-dessus place en liste blanche les attributs de titre, 
// de description, de prix et de disponibilité et les traite comme étant assignables en masse.
// Nous pouvons maintenant utiliser la méthode Product :: create pour insérer de nouvelles lignes
//  dans la table des produits.
