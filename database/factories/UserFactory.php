<?php

namespace Database\Factories;

use Faker\Provider\ar_SA\Person;
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
        $gender = ['male', 'female'][rand(0, 1)];

        $firstName = $gender === 'male' ? $this->faker->firstNameMale() : $this->faker->firstNameFemale();
        $lastName = $this->faker->lastName();

        $fullName = $firstName . ' ' . $lastName;
        $username = strtolower($firstName . $lastName);
        $email = $username . '@dispostable.com';

        return [
            'gender' => $gender,
            'name' => $fullName,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'username' => $username,
            'phone' => substr($this->faker->e164PhoneNumber(), 2),
            'email' => $email,
            'address' => $this->faker->address(),
            'about' => $this->faker->realText(),
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
