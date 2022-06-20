<?php

namespace Database\Factories;

use App\Models\ServiceProposal;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceProposalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceProposal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_request_id' => $this->faker->word,
        'price_of_proposal' => $this->faker->word,
        'status_id' => $this->faker->word,
        'quotation' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
