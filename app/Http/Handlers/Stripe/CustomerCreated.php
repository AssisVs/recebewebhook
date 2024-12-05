<?php

namespace App\Http\Handlers\Stripe;

use Illuminate\Foundation\Bus\Dispatchable;

class CustomerCreated
{
    use Dispatchable;

    public function __construct(public string $event, public array $data)
    {
    }

    public function handle()
    {
        // Your code here
        dd('handler CustomerCreated');
    }
}
