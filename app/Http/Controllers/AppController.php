<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactsRequest;
use App\Mail\Contacts;
use App\Mail\PlanFix;
use App\Models\Blog\Article;
use App\Models\Blog\ArticleCategory;
use GuzzleHttp\Client;
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
            ],
            [
                'email' => 'info@hypnopedia.site',
                'name' => 'Info',
            ]
        ];

        Mail::to($to)->send(new Contacts($request->all()));
    }

    public function phSubscribe(Request $request){

        $client = new Client(['base_uri' => 'https://foo.com/api/']);

        $response = $client->request('POST', 'https://api.producthunt.com/widgets/upcoming/v1/upcoming/hypnopedia/forms', [
            'form_params' => [
                'email' => $request->get('email')
            ]
        ]);

        return response()->json(['message'=>'subscribed'], $response->getStatusCode());
    }


    public function sitemap()
    {
        $data = [
            'articles' => Article::get(['slug','lang', 'updated_at']),
            'articles_categories' => ArticleCategory::get(['slug','lang', 'updated_at']),
        ];

        return response()->view('app.sitemap', $data)->header('Content-Type', 'text/xml');
    }
}
