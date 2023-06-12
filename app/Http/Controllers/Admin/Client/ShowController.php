<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Sheets;
class ShowController extends Controller
{
    public  function __invoke(Client $client)
    {
         $url = $client->link_Google_table;
         $url_array = parse_url($url);
         $result=str_replace("/spreadsheets/d/", "", $url_array['path']);
         $result = trim($result, '/edit');

         $sh= Sheets::spreadsheet($result)->sheet('Demo')->get();
         $header = $sh->pull(0);
         $values = Sheets::collection($header,$sh);
         $values->toArray();
         return view('admin.client.show',compact('client','values'));
    }
}
