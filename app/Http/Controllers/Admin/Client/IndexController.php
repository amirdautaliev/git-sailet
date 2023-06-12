<?php

namespace App\Http\Controllers\Admin\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Revolution\Google\Sheets\Facades\Sheets;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
   public  function __invoke( )
   {

//       $id = auth::id();
//       $users= DB::table('clients')
//       ->select('*')
//       ->where('user_id',$id)
//       ->get()
//       ->first();
//   $url = $users->link_Google_table;

//    $urll= parse_url($url);
//    $urlll = $urll['path'];
//    $url = str_replace("/spreadsheets/d/", "", $urlll);
//    $result = rtrim($url, '/edit');
//    // dd($result);

// Sheets::spreadsheet($result)->addSheet('sailet');

// dd('sailet');

// $csv = file_get_contents('https://docs.google.com/spreadsheets/d/'.$id.'/export?format=csv&gid='.$gid.'');
// $csv = explode("r\n",$csv);
// $array = array_map('str_getcsv',$csv);



         $users= DB::table('clients')
      ->select('*')
      ->get();

        return view('admin.client.index',compact('users'));
   }
}
