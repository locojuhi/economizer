<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accountsToRegister = [
            'maintenance' => [
                'percentage' => 50.00,
                'name' => 'maintenance',
                'description' => '',
                'debt_from' => [
                    'food',
                    'rent',
                    'electricity',
                    'gas',
                    'water',
                    'internet',
                    'transport',
                    'hygiene'
                ]
            ],
            'friends' => [
                'percentage' => 10.00,
                'name' => 'friends',
                'description' => '',
                'debt_from' => [
                    'invite food',
                    'invite transport',
                    'gift'
                ]
            ],
            'learn' => [
                'percentage' => 23.00,
                'name' => 'learn',
                'description' => '',
                'debt_from' => [
                    'learning'
                ]
            ],
            'invest' => [
                'percentage' => 7.00,
                'name' => 'invest',
                'description' => '',
                'debt_from' => [

                ]
            ],
            'emergency' => [
                'percentage' => 10.00,
                'name' => 'emergency',
                'description' => '',
                'debt_from' => [
                    'health'
                ]
            ],
        ];
        foreach ($accountsToRegister as $account) {
            $account['debt_from'] = json_encode($account['debt_from']);
            DB::table('accounts')->insert($account);
        }
    }
}
