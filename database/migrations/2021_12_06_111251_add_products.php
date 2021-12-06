<?php

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class AddProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $products = Http::get('https://fakestoreapi.com/products')->json();

        foreach ($products as $product) {
            $product = (object)$product;

            $name = time() . '.jpg';
            Storage::put('public/images/' . $name, file_get_contents($product->image));
            $fileLink = url(Storage::url('public/images/' . $name));

            $product = Product::create([
                'title' => $product->title,
                'price' => $product->price,
                'description' => $product->description,
                'category' => $product->category,
                'image' => $fileLink,
                'rating' => $product->rating['rate'],
                'stock' => $product->rating['count'],
            ]);

            $reviewCount = rand(1, 5);
            for ($i = 0; $i < $reviewCount; $i++) {
                Review::create([
                    'user_id' => User::randomUser()->id,
                    'product_id' => $product->id,
                    'review' => User::factory()->make()->about
                ]);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
