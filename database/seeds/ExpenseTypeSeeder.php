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
                'services' => [
                    'name' => 'services',
                    'description' => ''
                ],
                'medicine' => [
                    'name' => 'medicine',
                    'description' => ''
                ],
                'hygiene' => [
                    'name' => 'hygiene',
                    'description' => ''
                ],
                'learning' => [
                    'name' => 'learning',
                    'description' => ''
                ],
                'transport' => [
                    'name' => 'transport',
                    'description' => ''
                ]
            ]
        ];
        foreach ($expenseTypesToRegister as $expenseTypes => $expenseType) {
            DB::table('expense_types')->insert($expenseType);
        }
    }
}
