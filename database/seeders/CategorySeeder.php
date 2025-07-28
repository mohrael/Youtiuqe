<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories=[
            [
                'name'=>'Dresses',
                'description'=>'category 1',
                'image'=>'5c324c12-f1cf-4420-8655-21592e385872.jpg'
            ],
             [
                'name'=>'Tops',
                'description'=>'category 1',
                'image'=>'9946888f-c181-42c9-9540-9d110aa83a8c.jpg'
            ],
             [
                'name'=>'Skirts',
                'description'=>'category 1',
                'image'=>'5c324c12-f1cf-4420-8655-21592e385872.jpg'
            ],
            [
                'name'=>'Shorts',
                'description'=>'category 1',
                'image'=>'9946888f-c181-42c9-9540-9d110aa83a8c.jpg'
            ],
        ];
         foreach ($categories as $category) {
            Category::create($category);
        }
    }
    
}
