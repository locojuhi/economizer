<?php

use Illuminate\Database\Seeder;

class ExpenseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $expenseTypesToRegister = [
            [
                'food' => [
                    'name' => 'food',
                    'description' => ''
                ],
                'rent' => [
                    'name' => 'rent',
                    'description' => ''
                ],
                'electricity' => [
                    'name' => 'electricity',
                    'description' => ''
                ],
                'gas' => [
                    'name' => 'gas',
                    'description' => ''
                ],
                'water' => [
                    'name' => 'water',
                    'description' => ''
                ],
                'internet' => [
                    'name' => 'internet',
                    'description' => ''
                ],
                'learning' => [
                    'name' => 'learning',
                    'description' => ''
                ],
                'hygiene' => [
                    'name' => 'hygiene',
                    'description' => ''
                ],
                'transport' => [
                    'name' => 'transport',
                    'description' => ''
                ],
                'clothing' => [
                    'name' => 'clothing',
                    'description' => ''
                ],
                'health' => [
                    'name' => 'health',
                    'description' => ''
                ],
                'inviteTransport' => [
                    'name' => 'invite transport',
                    'description' => ''
                ],
                'inviteFood' => [
                    'name' => 'invite food',
                    'description' => ''
                ],
                'gift' => [
                    'name' => 'gift',
                    'description' => ''
                ],

            ]
        ];
        foreach ($expenseTypesToRegister as $expenseTypes => $expenseType) {
            DB::table('expense_types')->insert($expenseType);
        }
    }
}
