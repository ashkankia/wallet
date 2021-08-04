<?php

namespace App\Console\Commands;

use App\Models\Transaction;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CalculateTransaction extends Command
{
    protected $signature = 'calculate:transaction';

    protected $description = 'calculate total amount transactions';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->line("<info>Task Started</info>");
        Log::debug("Task Started");
        $negativeResult = Transaction::where("amount", "<", 0)->sum('amount');
        $positiveResult = Transaction::where("amount", ">", 0)->sum('amount');
        $result = $positiveResult - $negativeResult;
        $this->line("<info>Total Amount of Transactions: </info> {$result}");
        Log::debug("Total Amount of Transactions: " . $result);
    }
}

