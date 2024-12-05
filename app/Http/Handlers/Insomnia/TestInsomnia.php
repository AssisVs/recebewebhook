<?php

namespace App\Http\Handlers\Insomnia;

use Illuminate\Foundation\Bus\Dispatchable;

class TestInsomnia
{
    use Dispatchable;

    public function __construct(public string $event, public array $data)
    {
        ds('TESTINSOMNIA', $event, $data);
    }

    public function handle()
    {

    }
}
