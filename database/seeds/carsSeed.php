<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class carsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert(
            [
                [
                    'car_name' => 'Innova Reborn',
                    'price' => '700000',
                    'image' => 'innova-reborn.jpeg'
                ],
                [
                    'car_name' => 'Toyota Haice',
                    'price' => '1000000',
                    'image' => 'toyota-haice.jpeg'
                ],
                [
                    'car_name' => 'Innova Genic',
                    'price' => '750000',
                    'image' => 'innova-genic.jpeg'
                ],
                [
                    'car_name' => 'Toyota Alphard 2016 / 2020',
                    'price' => '1500000',
                    'image' => 'alphard-2016.jpg'
                ],
                [
                    'car_name' => 'Toyota Alphard 2021',
                    'price' => '1800000',
                    'image' => 'alphard-2021.jpg'
                ],
                [
                    'car_name' => 'Mitsubishi Xpander 2018',
                    'price' => '500000',
                    'image' => 'xpander-2018.jpg'
                ],
                [
                    'car_name' => 'Mitsubishi Xpander 2020',
                    'price' => '550000',
                    'image' => 'xpander-2020.jpeg'
                ],
                [
                    'car_name' => 'Bus Medium 25 / 29 Seat',
                    'price' => '1300000',
                    'image' => 'bus-29.jpeg'
                ],
                [
                    'car_name' => 'Toyota Avanza',
                    'price' => '650000',
                    'image' => 'toyota-avanza.jpg'
                ],
                [
                    'car_name' => 'Daihatsu Xenia',
                    'price' => '650000',
                    'image' => 'daihatsu-xenia.jpeg'
                ]
            ]
        );
    }
}
