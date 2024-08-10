<?php

namespace Database\Factories;

use App\Model\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model= User::class;

    public function definition(): array
    {
        return [
            'username'=>$this->faker->userName(),
            'password'=>$this->faker->password(),
            'email'=>$this->faker->email(),
            'nm_lengkap'=>$this->faker->name(),
            'alamat'=>$this->faker->address(),
        ];
    }
}
