<?php
 
use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
 
        User::create(array(
            'name' => 'test',
            'email' => 'apifan@gmail.com',
            'password' => Hash::make('test')
        ));
    }
 
}
