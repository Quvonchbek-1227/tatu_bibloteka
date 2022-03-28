<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminPassword;

class AdminPasswordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminPassword::factory(1)->create();
    }
}
