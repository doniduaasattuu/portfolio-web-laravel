<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    public function testHome()
    {
        $this->get("/")
            ->assertSeeText("Doni Darmawan")
            ->assertHeader("Author", "Doni Darmawan");
    }
}
