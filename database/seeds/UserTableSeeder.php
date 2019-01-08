<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Comercio\User::create([
            'name' => 'Jose Tandavala',
            'password' => bcrypt('password'),
            'email' => 'jose.tandavala@gmail.com',
        ]);

        Comercio\Perfil::create([
            'user_id' => $user->id,
            'imagem' => 'Perfil/default.jpg',
        ]);
    }
}
