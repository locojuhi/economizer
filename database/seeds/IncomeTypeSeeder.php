<?php

use Illuminate\Database\Seeder;

class IncomeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $incomeTypesToRegister = [
            [
                'salary' => [
                    'name' => 'salary',
                    'description' => ''
                ],
                'bonus' => [
                    'name' => 'bonus',
                    'description' => ''
                ],
                'loan' => [
                    'name' => 'loan',
                    'description' => ''
                ]
            ]
        ];
        foreach ($incomeTypesToRegister as $incomeTypes => $incomeType) {
            DB::table('income_types')->insert($incomeType);
        }
    }
}
