<?php

namespace Database\Factories;

use App\Models\MailBox;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MailBoxFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MailBox::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            'name' => $name,
            'correo' =>$this->faker->text(),
            'mensaje' =>$this->faker->textarea()
        ];
    }
}
