<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $words = request('words') ?? DEFAULT_WORD_COUNT;
        $para = request('para') ?? DEFAULT_PARA_COUNT;

        $paraWords = [];
        for ($i = 1; $i <= $para; $i++) {

            if ($i === $para) {
                $paraWords[$i] = $this->faker->words($words, true);
                break;
            }

            $paraWords[$i] = rand(1, $words);
            $words = $words - $paraWords[$i];

            $paraWords[$i] = $this->faker->words($paraWords[$i], true);
        }


        return [
            'content' => $paraWords
        ];
    }
}
