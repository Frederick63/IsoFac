<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Frederick',
            'cod_client'=>'43000090921',
            'email'=>'frederickcamtest@gmail.com',
            'password'=>bcrypt('frederick63')
        ])->assignRole('Admin');;
        
        User::factory(99)->create();

    }
}
