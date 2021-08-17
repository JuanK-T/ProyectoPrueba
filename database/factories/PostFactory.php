<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();
        return [
            //
            'name' => $name,
            'slug' => Str::slug($name),
            'extract' => $this->faker->text(250),
            'contenido' => $this->faker->text(2000),
            'status' => $this->faker->randomElement([1, 2]),
            'idCategoryFK' => Category::all()->random()->id,
            'idUserFK' => User::all()->random()->id
        ];
    }
}
