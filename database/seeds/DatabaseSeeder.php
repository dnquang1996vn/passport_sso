<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        /** @var User $user */
        $user = factory(\App\User::class)->create([
            'name' => 'admin',
            'email' => 'ssoAdminManager@admin.com',
            'password' => bcrypt('password'),
        ]);
    }
}
