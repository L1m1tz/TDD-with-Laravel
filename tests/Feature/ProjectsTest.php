<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectsTest extends TestCase
{
    use WithFaker, RefreshDatabase;
    /**
     * A basic feature test.
     *
     * @return void
     */
    public function a_user_can_create_a_project()
    {
        $attributes = [
            'titile' => $this->faker->sentence,
            'descripton' => $this->faker->paragraph
        ];


        $this->post('/project', $attributes);
        $this->assertDatabaseHas('/project', $attributes);
    }
}
