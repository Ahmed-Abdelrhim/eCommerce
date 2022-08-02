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
            'id' => 5,
            'name' => 'Test Admin',
            'email' => 'test.admin@gmail.com',
            'photo' => '',
            'password' => bcrypt('12345678'),
        ]);
    }
}
//composer dump-autoload
// Bassant Hossam
// bassant.hossam@gmail.com
//Aya Alaa
// aya.alaa@gmail.com
