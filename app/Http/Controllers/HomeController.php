<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['galleries']= DB::table('gallery')->select('*')->get();
      $data['maps']     = DB::table('maps')->get();
      $data['profile']  = DB::table('profile')->select('*')->orderby('profile_id', 'DESC')->first();
      $data['stories']  = DB::table('story')->select('*')->get();
      $data['covers']   = DB::table('cover')->select('*')->get();
      $data['products']   = DB::table('produk')->select('*')->get();
      return view('welcome', $data);
    }

}
