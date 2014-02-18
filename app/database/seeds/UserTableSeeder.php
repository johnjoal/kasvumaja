<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'email' => 'aleksei.shupenja@gmail.com',
            'password' => Hash::make('321')
        ));
    }
}