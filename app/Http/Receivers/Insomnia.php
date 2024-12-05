<?php

namespace App\Http\Receivers;

use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;
use Receiver\Providers\AbstractProvider;

class Insomnia extends AbstractProvider
{
    use Dispatchable;

    /**
     * @param Request $request
     * @return string
     */
    public function getEvent(Request $request): string
    {
        //
    }

    /**
     * @param Request $request
     * @return array
     */
    public function getData(Request $request): array
    {
        //
    }
}