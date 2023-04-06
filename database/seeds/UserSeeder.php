<?php

use App\Models\Role;
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
        $role = Role::pluck('id', 'name');

        $data = [
            [
                'name' => 'PT. Vascomm Solusi Teknologi',
                'username' => 'vascomm',
                'email' => 'recruitment@vascomm.co.id',
                'password' => bcrypt('12345678'),
                'is_approved' => true,
                'role_id' => $role['Administrator'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Muhamad Ramadhan',
                'username' => 'ramadhan',
                'email' => 'muhamadramadhan57@gmail.com',
                'password' => bcrypt('12345678'),
                'is_approved' => false,
                'role_id' => $role['Customer'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];


        User::insert($data);
    }
}
