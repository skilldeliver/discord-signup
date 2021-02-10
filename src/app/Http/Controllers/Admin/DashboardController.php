<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data = [
            'metaTitle' => 'Табло',
            'metaDescription' => '',
            'pageName' => 'dashboard',
            'templateName' => 'dashboard'
        ];

        return View::make($data['templateName'], compact('data'));
    }
}
