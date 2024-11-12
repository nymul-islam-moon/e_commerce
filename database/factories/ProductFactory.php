<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{


    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->words(3, true);  // Generate a 3-word product name

        return [
            'category_id' => Category::inRandomOrder()->value('id'),  // Select random existing category_id
            'name' => $name,
            'slug' => Str::slug($name) . '-' . Str::random(5),  // Ensure unique slug
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 10, 500),  // Price between 10 and 500
            'discount_price' => $this->faker->optional()->randomFloat(2, 5, 300),  // Optional discount
            'stock' => $this->faker->numberBetween(0, 100),  // Random stock value
            'sku' => strtoupper(Str::random(8)),  // Unique SKU with 8 characters
            'image' => $this->faker->imageUrl(640, 480, 'product', true),  // Placeholder image URL
        ];
    }
}
