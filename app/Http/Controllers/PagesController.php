<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
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

    public function form(Request $request)
    {
        $userDiscordId = Auth::user()->discord_user_id;

        $validator = Validator::make($request->all(), [
            'email' => [
                'required',
                'max:255',
                'email',
                Rule::unique('users')->ignore($userDiscordId, 'discord_user_id'),
            ],
        ], [
            'email.required' => 'Полето за имейл е задължително.',
            'email.max' => 'Въведеният имейл е твърде дълъг.',
            'email.email' => 'Въведеният имейл не е валиден.',
            'email.unique' => 'Въведеният имейл вече се използва от друг потребител.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('homepage')->withErrors($validator)->withInput();
        }

        $user = User::where('discord_user_id', $userDiscordId)->first();
        $user->update([
            'email' => $request['email'],
        ]);

        $request->session()->flash('type', 'success');
        $request->session()->flash('message', 'Обновихте успешно своя имейл!');

        return redirect()->route('homepage');
    }
}
