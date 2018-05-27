<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        User::truncate();

        // Let's create users by factory.
        factory(App\Models\User::class, 100)->create();

        // Show message.
        echo "100 users was created by factory.\n";
    }
}
