<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 9)->create();
        App\User::create(['first_name' => 'Default', 'last_name' => 'Tester', 'email' => 'admin@admin.com', 'password' => bcrypt('admin')]);
    }
}
