<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactsRequest;
use App\Mail\Contacts;
use App\Mail\PlanFix;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{
    public function home()
    {
        return view('app.home');
    }

    public function contacts()
    {
        return view('app.contacts');
    }

    public function contactsEmail(ContactsRequest $request)
    {
        $to = [
            [
                'email' => 'yahor.punko@pyrat.media',
                'name' => 'Егор',
            ],
            [
                'email' => 'dnsxss@gmail.com',
                'name' => 'Андрей',
            ]
        ];

        Mail::to($to)->send(new Contacts($request->all()));
    }
}
