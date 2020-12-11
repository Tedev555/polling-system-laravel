<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'username' => 'ted555',
        'password' => Hash::make('123456'),
    ));
}

}