<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $firstName = $this->faker->firstName();
        $lastName = $this->faker->lastName();

        $fullName = $firstName . ' ' . $lastName;
        $username = strtolower($firstName . $lastName);
        $email = $username . '@dispostable.com';

        return [
            'name' => $fullName,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'username' => $username,
            'phone' => $this->faker->e164PhoneNumber(),
            'email' => $email,
            'email_verified_at' => now(),
            'password' => $this->faker->password(8),
            'remember_token' => Str::random(32),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return Factory
     */
    public function unverified(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
