<?php

namespace Database\Factories;

use App\Models\ServiceRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceRequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceRequest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->word,
        'worker_id' => $this->faker->word,
        'benefit_category_id' => $this->faker->word,
        'service_of_benefit_category_id' => $this->faker->word,
        'adress' => $this->faker->word,
        'adress_sup' => $this->faker->word,
        'code_postal' => $this->faker->word,
        'city' => $this->faker->word,
        'town' => $this->faker->word,
        'date' => $this->faker->word,
        'task_description' => $this->faker->text,
        'price_by_hour' => $this->faker->word,
        'status_id' => $this->faker->word,
        'fix_price' => $this->faker->word,
        'price_after_nego' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
