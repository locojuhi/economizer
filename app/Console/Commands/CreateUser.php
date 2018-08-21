<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create 
        {name : The user full name.}
        {email : The user email to sign in.}
        {password : The user password.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Allow you to create a new user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     *
     */
    public function handle()
    {
        $name = $this->argument('name');
        $email = $this->argument('email');
        $password = $this->argument('password');

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password)
        ]);
    }
}
