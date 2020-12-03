<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' = "administrator",
            'name' = "admin",
            'email' = "admin@admin.com",
            'roles' = json_encode(["ADMIN"]),
            'password' = \Hash::make("pussycats")
        ]);
    }
}