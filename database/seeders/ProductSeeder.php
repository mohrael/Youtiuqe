<?php

namespace Database\Seeders;
use App\Models\Product;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dressCategory = Category::where('name', 'Dresses')->first();
        $topsCategory = Category::where('name', 'Tops')->first();
        $skirtsCategory = Category::where('name', 'Skirts')->first();
        $shortCategory=Category::where('name', 'Shorts')->first();
        //
         $products=[
             [

                'productName' => 'product 1',
                'description' => 'content of product 1',
                'price'=>'$49.9',
                'image'=>'5c324c12-f1cf-4420-8655-21592e385872.jpg',
                'category_id' => $dressCategory->id,

            ],
            [
                'productName' => 'product 2',
                'description' => 'content of product 1',
                'price'=>'$49.9',
                'image'=>'9946888f-c181-42c9-9540-9d110aa83a8c.jpg',
                'category_id' => $dressCategory->id,

            ],
            [
                'productName' => 'product 3',
                'description' => 'content of product 1',
                'price'=>'$49.9',           
                'image'=>'aa197940-436d-4f01-b3e9-dd2b8144eba1.jpg',
                'category_id' => $topsCategory->id,
            ],
            [
                'productName' => 'product 4',
                'description' => 'content of product 1',
                'price'=>'$49.9',  
                'image'=>'9946888f-c181-42c9-9540-9d110aa83a8c.jpg',
                'category_id' => $skirtsCategory->id,
            ],
        
        ];
        foreach ($products as $product) {
            Product::create($product);
        }


    
    }
}
