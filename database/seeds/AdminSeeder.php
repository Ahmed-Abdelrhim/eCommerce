<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::create([
            'id' => 2,
            'name' => 'Mohamed Abdelrhman',
            'email' => 'mohamed.abdelrhman.237@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
//composer dump-autoload
