<?php

use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Settings::setMany([
            'default_locale' => 'en',
            'default_timezone' => 'Africa/Cairo',
            'reviews_enabled' => true,
            'auto_approve_reviews' => true,
            'supported_currencies' => ['LE', 'USD', 'SR'],
            'default_currency' => 'LE',
            'store_email' => 'admin@commerce.test',
            'search_engine' => 'mysql',
            'local_shipping_cost' => 0,
            'outer_shipping_cost' => 0,
            'free_shipping_cost' => 0,
            'translatable' => [
                'store_name' => 'Ahmed Abdelrhim',
                'local_shipping_label' => 'Local Shipping',
                'outer_shipping_label' => 'Outer Shipping',
                'free_shipping_label' => 'Free Shipping',
            ],
        ]);
    }
}

