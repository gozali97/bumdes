<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(20),
            'category_document_id' => $this->faker->numberBetween(1,2),
            'path' => '/assets/admin/arsip/test.text',
            'created_at' => $this->faker->dateTime('now', 'Asia/Jakarta'),
            'updated_at' => $this->faker->dateTime('now', 'Asia/Jakarta')
        ];
    }
}
