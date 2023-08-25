<?php

namespace Database\Factories;

use App\Enums\InvoiceEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(InvoiceEnum::cases());
        return [
            'customer_id' => $this->faker->randomNumber(
                nbDigits: 9,
                strict: true
            ),
            'amount' => $this->faker->numberBetween(1, 20_000),
            'paid_date' => $status == InvoiceEnum::Paid ? $this->faker->dateTimeThisDecade : NULL,
            'billed_date' => $this->faker->dateTimeThisDecade(),
        ];
    }

}