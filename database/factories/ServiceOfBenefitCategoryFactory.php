<?php

namespace Database\Factories;

use App\Models\ServiceOfBenefitCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceOfBenefitCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceOfBenefitCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'benefit_category_id' => $this->faker->word,
        'name' => $this->faker->word,
        'display_price' => $this->faker->word,
        'real_price' => $this->faker->word,
        'price' => $this->faker->word,
        'description' => $this->faker->text,
        'image' => $this->faker->word,
        'publisher_id' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
