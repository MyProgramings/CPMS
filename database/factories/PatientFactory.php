<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $array = ['bg-red-500 text-white', 'bg-green-500 text-white', 'bg-blue-500 text-white', 'bg-yellow-500 text-white', 'bg-violet-500 text-white', 'bg-orange-500 text-white', 'bg-white text-black', 'bg-pink-500 text-white'];
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(1, 100),
            'place_of_birth' => $this->faker->city(),
            'Birthday' => $this->faker->date(),
            'gender' => 'male',
            'social_status' => 'poor',
            'profession' => 'Engineer',
            'nationality' => $this->faker->country(),
            'card_number' => '3452-rte-34',
            'permanent_address' => $this->faker->city(),
            'temporary_address' => $this->faker->city(),
            'near_mosque' => $this->faker->city(),
            'temporary_address' => $this->faker->city(),
            'phone_number' => $this->faker->phoneNumber(),
            'file_colors' => Arr::random($array),
            'incident_date' => $this->faker->date(),
        ];
    }
}
