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
            [
                'maintenance' => [
                    'percentage' => 50.00,
                    'name' => 'maintenance',
                    'description' => ''
                ],
                'friends' => [
                    'percentage' => 10.00,
                    'name' => 'friends',
                    'description' => ''
                ],
                'learn' => [
                    'percentage' => 23.00,
                    'name' => 'learn',
                    'description' => ''
                ],
                'invest' => [
                    'percentage' => 7.00,
                    'name' => 'invest',
                    'description' => ''
                ],
                'emergency' => [
                    'percentage' => 10.00,
                    'name' => 'emergency',
                    'description' => ''
                ],
            ]
        ];
        foreach ($accountsToRegister as $accounts => $account) {
            DB::table('accounts')->insert($account);
        }
    }
}
