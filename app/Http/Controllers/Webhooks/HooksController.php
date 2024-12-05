<?php

namespace App\Http\Controllers\Webhooks;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class HooksController extends Controller
{
    public function index(Request $request)
    {
        $dados = $request->all();
ds('INDEX HOOKCONTROLLER', $dados);
        return Redirect::route('hooksstore');
 //       return redirect()->back();
    }
}
