<?php

namespace App\Models\dashboard\product;

use App\Models\dashboard\category\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = ['name_product', 'desct', 'price_provider', 'price_final', 'stock', 'id_category'];

    public function post()
    {
        return $this->belongsTo(Category::class);
    }
}
