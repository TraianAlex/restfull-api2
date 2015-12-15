<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        //factory(App\Post::class, 10)->create();
        factory(\App\User::class)->create([
            'name' => 'alex',
            'email' => 'victor_traian@yahoo.com',
            'password' => bcrypt(111111),
            'remember_token' => str_random(10),
        ]);

        Model::reguard();
    }
}
