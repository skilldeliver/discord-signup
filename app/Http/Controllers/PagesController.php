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

        $isAdmin = '';

        if (!is_null(Auth::user())) {
            $userRoles = json_decode(Auth::user()->roles);

            $allowedRoles = [
                'Discord Server Management',
                'Administrator',
                'Leads',
            ];

            if (count(array_intersect($allowedRoles, $userRoles)) > 0) {
                $isAdmin = true;
            }
        }

        return View::make($data['templateName'], compact('data', 'result', 'isAdmin'));
    }
}
