<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'tangila@gmail.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name = "tangila Akter";
            $user->email = "manirujjamanakash@gmail.com";
            $user->password = Hash::make('tangila@gmail.com');
            $user->save();
        }
    }
}
