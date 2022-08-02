<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Category::setMany([
            1 => 'furniture',
            2 => 'Living Room',
            3 => 'Reception',
            4 => 'Kitchen',
            5 => 'Bathroom',
            6 => 'Kids Room',
            'is_translatable' => [
                'Home Furniture' => 'اثاث منزلي',
                'Home Bathroom' =>'حمام منزلي',
                'Home Kitchen' =>'مطبخ منزلي',
                'Home Machine' =>'غسالة منزلية',
            ],
        ]);
    }
}
