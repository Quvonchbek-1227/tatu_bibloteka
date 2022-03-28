<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AdminPassword;


class AdminPasswordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = AdminPassword::class;
    

    public function definition()
    {
        return [
            'kalit' => 'kalit',
            'qiymat' => 'qiymat',
        ];
    }
}
