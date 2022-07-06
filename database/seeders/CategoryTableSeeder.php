<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      //  $category=array(array('category_name'=>'sumsung s8'));
$categories = [
    ['category_name' => 'sumsung', ],
    ['category_name' => 'poco', ],
    ['category_name' => 'redmi', ],
    ['category_name' => 'i phne', ],
 

];

foreach ($categories as $cat){
    Category::create($cat);
}
    }
}


