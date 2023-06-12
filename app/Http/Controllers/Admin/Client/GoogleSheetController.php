<?php

namespace App\Http\Controllers\Admin\Client;



use Sheets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GoogleSheetController extends Controller
{
  public function __invoke()
  {
//     $id = Auth::id();
//     $users= DB::table('clients')
//     ->select('*')
//     ->where('user_id',$id)
//     ->get()
//     ->first();


// $url = $users->link_Google_table;
// $url_array = parse_url($url);
// $result=str_replace("/spreadsheets/d/", "", $url_array['path']);
// $result = trim($result, '/edit');

// $sh= Sheets::spreadsheet($result)->sheet('Demo')->get();
// $header = $sh->pull(0);
// $values = Sheets::collection($header,$sh);
// $values->toArray();

  }
}
