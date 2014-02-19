<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'email' => 'info@kasvumaja.ee',
            'password' => Hash::make('321')
        ));
    }
}