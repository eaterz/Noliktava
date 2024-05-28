<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'brand', 'price', 'image'];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($product) {
            Activity::create([
                'user_id' => auth()->user()->id,
                'activity_type' => 'created_product',
                'subject_id' => $product->id,
                'subject_type' => Product::class,
                'description' => "Created a new product: {$product->name}",
            ]);
        });

        static::updated(function ($product) {
            Activity::create([
                'user_id' => auth()->user()->id,
                'activity_type' => 'updated_product',
                'subject_id' => $product->id,
                'subject_type' => Product::class,
                'description' => "Updated product: {$product->name}",
            ]);
        });

        static::deleted(function ($product) {
            Activity::create([
                'user_id' => auth()->user()->id,
                'activity_type' => 'deleted_product',
                'subject_id' => $product->id,
                'subject_type' => Product::class,
                'description' => "Deleted product: {$product->name}",
            ]);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
