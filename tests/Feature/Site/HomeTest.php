<?php

namespace Tests\Feature\Site;

use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_home_success(): void
    {
        $response = $this->get('/api/site');
        echo $response->getContent();
        $response->assertStatus(200);
    }
}
