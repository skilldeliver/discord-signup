<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'metaTitle' => 'Начално',
            'pageName' => 'homepage',
            'templateName' => 'homepage',
        ];

        $result = $request->filled('result');

        return View::make($data['templateName'], compact('data', 'result'));
    }
}
