<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class CategoryTest extends TestCase
{
//    use RefreshDatabase;
    private $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::create([
            'first_name'              => fake()->name(),
            'last_name'              => fake()->name(),
            'phone'              => fake()->phoneNumber(),
            'email'             => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('123456')
        ]);
    }

    public function test_category_index()
    {
        $response = $this->actingAs($this->user)->get('admin/categories/index');
        $response->assertRedirect('admin/login');
        $response->assertStatus(302);
        //$this->assertDatabaseCount('categories', 5002);
    }

    public function test_create_category()
    {
        $user = User::first();
        $response = $this->actingAs($user)->get('admin/categories/create');

        $response->assertStatus(302);
    }

    public function test_store_category()
    {
        $response = Category::create([
           'name' => ['en' => 'Ahmed', 'ar' => 'أحمد'],
           'image' => 'image.png',
           'department_id' => 1
        ]);
        $this->assertDatabaseHas('categories',['slug' => 'Ahmed']);

    }

    public function test_edit_category()
    {
        $category = Category::first();
        $response = $this->actingAs($this->user)->get('admin/categories/edit/'. $category->slug);
        $response->assertViewHas();
        $response->assertStatus(302);
    }
}
