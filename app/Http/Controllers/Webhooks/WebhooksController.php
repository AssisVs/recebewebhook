<?php

namespace App\Http\Controllers\Webhooks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Receiver\Facades\Receiver;
use Receiver\Providers\Webhook;

class WebhooksController extends Controller
{
    public function store(Request $request)
    {
        $driver = 'slack';
        dd('STORE WEBHOOKSCONTROLLER', $request);
        return Receiver::driver($driver)
           ->receive($request)
           ->fallback(function (Webhook $webhook) {
            // Do whatever you like here...
            ds('APOS RECEIVE', $request);
           })
        ->ok();

        return view('hooks');
    }
}
