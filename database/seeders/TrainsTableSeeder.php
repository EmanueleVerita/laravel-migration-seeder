<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $train = new Train();

        $train->company = fake()->company();
        $train->dep_station = fake()->city();
        $train->arr_station = fake()->city();
        $train->dep_timestamp = fake()->dateTimeBetween('tomorrow' , '+1 week');
        $train->arr_timestamp = fake()->dateTimeBetween('+1 week' , '+2 week');
        $train->code = 'ABCD1234'.rand(1 , 99);
        $train->train_cars_number = fake()->shuffle(fake()->bothify('##???'));
        $train->in_time = fake()->boolean();
        $train->delated = fake()->boolean();
        $train->save(); 

    }
}
