<?php

namespace Database\Factories;

use App\Models\ApiUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ApiUser>
 */
class ApiUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ApiUser::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
