<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 開発用ユーザー

        // App\User::create([
        //     'name' => 'develop_user',
        //     'email' => 'my_email@gmail.com',
        //     'password' => Hash::make('my_secure_password'), // この場合、「my_secure_password」でログインできる
        //     'remember_token' => Str::random(10),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        factory(App\User::class,20)->create();
        

    }
}
