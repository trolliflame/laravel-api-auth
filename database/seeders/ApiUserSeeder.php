<?php

namespace Database\Seeders;

use App\Models\ApiUser;
use Illuminate\Database\Seeder;

class ApiUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        ApiUser::updateOrCreate(['id' => 1], [
            'name'      => 'api test user',
            'api_token' => hash('sha256', 'Test123'),
        ]);
    }
}
