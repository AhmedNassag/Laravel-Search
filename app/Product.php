<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use App\Category;
use App\Tag;

class Product extends Model
{
    use SearchableTrait;
    protected $guarded    = [];
    protected $searchable =
    [
        'columns' =>
        [
            'product.name'            => 10,
            'product.description'     => 10,
            'product.price'           => 10,
            'categories.name'         => 10,
        ],
        'joins' =>
        [
            'categories' => ['products.category_id','categories.id']
        ],
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tag','product_id','tag_id');;
    }
}
