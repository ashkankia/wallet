<?php

namespace Tests\Http\Controllers;

use App\Models\Balance;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;


class BalanceControllerTest extends TestCase
{

    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testShow()
    {
        $balance = Balance::factory()->create();
        $response = $this->get("/api/balances/{$balance->id}");
        $response->assertStatus(200);

    }
}
