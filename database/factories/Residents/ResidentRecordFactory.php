<?php

namespace Database\Factories\Residents;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Residents\ResidentRecord;

use Str;
use Carbon\Carbon;

class ResidentRecordFactory extends Factory
{
    protected $model = ResidentRecord::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ref_code' => 'RSDNT-'.strtoupper(Str::random(10)),
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->lastName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->safeEmail,
            'mobile_number' => $this->faker->phoneNumber,
            'landline' => $this->faker->tollFreePhoneNumber,
            'gender' => $this->faker->randomElement(['Male', 'Female', 'Non-Binary']),
            'civil_status' => $this->faker->randomElement(['Single', 'Married', 'Widow/Widower', 'Separated/Annuled', 'Living with Partner']),
            'profession' => $this->faker->randomElement(['IT Specialist', 'Writer', 'Artist', 'Developer', 'Lawyer', 'Doctor', 'Nurse', 'Judge', 'Programmer', 'House Wife', 'Army', 'Sales', 'Guard']),
            'citizenship' => $this->faker->randomElement(['Filipino', 'American', 'German', 'Japanese']),
            'category_id' => $this->faker->randomElement(['Passport', 'NBI Clearance', 'Other valid government-issued IDs', 'School ID']),
            'category_id_no' => $this->faker->numerify('###-###-###-###'),
            'birthdate' => Carbon::now(),
            'region' => 'NCR',
            'city' => 'Makati',
            'barangay' => 'Pitogo',
            'address_line1' => $this->faker->streetAddress,
        ];
    }
}
