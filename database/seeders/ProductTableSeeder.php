<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['product_name' => '12 pro', 'price'=>'300000','status'=>'1','category_id'=>'4' ],
            ['product_name' => '11 pro','price'=>'300000','status'=>'1','category_id'=>'4' ],
            ['product_name' => '7 plus','price'=>'30000','status'=>'1','category_id'=>'4' ],
            ['product_name' => '8 plus','price'=>'30000','status'=>'1','category_id'=>'4' ],
            ['product_name' => 'sumsung 7','price'=>'30000','status'=>'1','category_id'=>'1' ],
            ['product_name' => 'redmi 7','price'=>'30000','status'=>'1','category_id'=>'3' ],
            ['product_name' => 'redmi 8','price'=>'40000','status'=>'1','category_id'=>'3' ],
            ['product_name' => 'redmi 9','price'=>'35000','status'=>'1','category_id'=>'3' ],
            ['product_name' => 'poco f1','price'=>'35000','status'=>'1','category_id'=>'2' ],
        
        ];
        
        foreach ($products as $pro){
            Product::create($pro);
        }
    }
}
