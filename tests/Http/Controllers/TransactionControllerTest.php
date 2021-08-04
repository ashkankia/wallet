<?php

namespace Tests\Unit;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class TransactionControllerTest extends TestCase
{

    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testStore()
    {
        $user = User::factory()->create();
        $transaction = Transaction::factory()->createOne();
        $transaction->user_id = $user->id;
        $response = $this->post("/api/transactions", ['user_id' => $user->id, 'amount' => $transaction->amount]);
        $response->assertStatus(201);
    }

    public function testIndex()
    {
        Transaction::factory()->count(3)->create();
        $response = $this->get('/api/transactions');
        $response->assertJsonCount(3);
        $response->assertStatus(200);
        $this->assertDatabaseCount('transactions', 3);
    }
}
