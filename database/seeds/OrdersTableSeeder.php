<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
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
                DB::table('orders')->insert(
                [
                ['userId' => 1,
                ],

                ['userId' => 1,
                ],

                ['userId' => 1,
                ]

                    ]);
                //------------------------------------------------------------------------

    }
}
