<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InvestorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $invest = ['Bonds', 'Stocks', 'Properties', 'Retirement funds','Mutual funds', 'Certificates of Deposit', 'Cryptocurrencies', 'Commodities'];
        return [
            'name'=>$this->faker->name(),
            'address'=>$this->faker->address(),
            'phone'=>$this->faker->phoneNumber(), 
            'investment'=>$this->faker->randomElement($invest,1)
        ];
    }
}
