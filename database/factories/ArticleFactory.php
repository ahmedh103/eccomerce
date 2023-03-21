<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition():array
	{
		$faker_ar = \Faker\Factory::create('ar_JO');
		return [
			// add the title and description fields by two languages en and ar by spatie package translatable
			// how to fake sentence in arabic language
			'title'       => ['en' => $this->faker->sentence, 'ar' => $faker_ar->firstNameMale],
			'description' => ['en' => $this->faker->paragraph, 'ar' => $faker_ar->firstNameMale],
			'image'       => 'default.png',
			'user_id'     => 1,
			'status'      => $this->faker->numberBetween(0, 1),
		];
	}
}
