<?php

use Illuminate\Database\Seeder;

class OrderlinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //------------------------------------------------------------------------
        DB::table('orderlines')->insert(
            [
                ['orderId' => 1,
                 'productId' => 1,
                 'number' => 1,
                 'price' => 2.50,
                ],

                ['orderId' => 1,
                 'productId' => 2,
                 'number' => 2,
                 'price' => 3.50,
                ],

                ['orderId' => 1,
                 'productId' => 3,
                 'number' => 3,
                 'price' => 4.50,
                ]

            ]);
        //------------------------------------------------------------------------






    }
}
