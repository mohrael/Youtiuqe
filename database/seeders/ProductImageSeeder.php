<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductImage;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
           $productImages=[
             [

                'product_id' => '1',
                'image_path'=>'5c324c12-f1cf-4420-8655-21592e385872.jpg',
            ],
              [

                'product_id' => '1',
                'image_path'=>'5c324c12-f1cf-4420-8655-21592e385872.jpg',
            ],
              [

                'product_id' => '1',
                'image_path'=>'5c324c12-f1cf-4420-8655-21592e385872.jpg',
            ],
              [
                'product_id' => '1',
                'image_path'=>'5c324c12-f1cf-4420-8655-21592e385872.jpg',
            ],
            [
                'product_id' => '2',
                'image_path'=>'9946888f-c181-42c9-9540-9d110aa83a8c.jpg',
            ],
            [

                'product_id' => '2',
                'image_path'=>'5c324c12-f1cf-4420-8655-21592e385872.jpg',
            ],
            [
                'product_id' => '3',
                'image_path'=>'aa197940-436d-4f01-b3e9-dd2b8144eba1.jpg',
            ],
            [
                'product_id' => '4',
                'image_path'=>'9946888f-c181-42c9-9540-9d110aa83a8c.jpg'          
            ],
        
        ];
        foreach ($productImages as $product) {
            ProductImage::create($product);
        }
    }
}
