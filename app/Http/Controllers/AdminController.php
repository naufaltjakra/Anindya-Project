<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use Cookie;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
      return view('login');
    }

    public function do_login(Request $login)
    {
      $email    = $login['email'];
      $password = $login['password'];
      $admin  = DB::table('users')->where('email',$email)->first();

      if( !empty($admin) ){
        if(password_verify($password, $admin->password)){
          Cookie::queue('admin', $admin->email, 60);
          return redirect('/admin');
        }else{
          $login->session()->flash('status', notif('danger', 'Cek kembali email dan password'));
          return view('auth.login');
        }
      }else{
        $login->session()->flash('status', notif('danger', 'Cek kembali email dan password'));
        return view('auth.login');
      }
    }

    public function logout(Request $request){
      Cookie::forget('admin');
      return redirect('login');
    }

    public function map_add(){
      $this->cek_login();
      return view('admin/admin_map_add');
    }

    public function map_add_process(Request $request){
      $this->cek_login();
      $this->validate($request, [
        'map_kota'        => 'required',
        'map_latitude'    => 'required',
        'map_longitude'   => 'required',
        'map_judul'       => 'required',
        'gambar_file'     => 'required',
        'map_deskripsi'   => 'required|max:400'
      ]);

      $gambar_file        = $request->gambar_file;
      $map_kota           = $request->map_kota;
      $map_latitude       = $request->map_latitude;
      $map_longitude      = $request->map_longitude;
      $map_judul          = $request->map_judul;
      $map_deskripsi      = $request->map_deskripsi;
      $map_lokasi         = $request->map_lokasi;
      $gambar_url         = slug($map_lokasi);
      $gambar_nama        = sha1( date("YmdHis").rand(1,100).rand(1,100).rand(1,100).rand(1,100).rand(1,100) ).".".$gambar_file->getClientOriginalExtension();
      $destination        = base_path('public/uploads');

      $gambar_file->move($destination, $gambar_nama);

      DB::table('maps')->insert(
        [
          'map_kota'       => $map_kota,
          'map_asal'       => $gambar_url,
          'map_latitude'   => $map_latitude,
          'map_longitude'  => $map_longitude,
          'map_judul'      => $map_judul,
          'map_deskripsi'  => $map_deskripsi,
          'map_lokasi'     => $gambar_nama
        ]
      );

      $request->session()->flash('status', notif('success', 'Berhasil Menambahkan Event Map!'));

      return view('admin/admin_map_add');
    }

    public function map_list(){
      $this->cek_login();
      $list_map  = DB::table('maps')->select('*')->get();

      $data['list_map']  = $list_map;

      return view('admin/admin_map_list', $data);
    }

    public function map_edit($id){
      $this->cek_login();
      $data['map'] = DB::table('maps')->select('*')->where('map_id', $id)->first();

      return view('admin/admin_map_edit', $data);
    }

    public function map_edit_process(Request $request, $id){
      $this->cek_login();
      $this->validate($request, [
        'map_kota'        => 'required',
        'map_latitude'    => 'required',
        'map_longitude'   => 'required',
        'map_judul'       => 'required',
        'map_deskripsi'   => 'required|max:400'
      ]);

      if( !empty($request->gambar_file) ){
        $gambar_file    = $request->gambar_file;
        $destination    = base_path('public/uploads');
        $gambar_nama    = sha1( date("YmdHis").rand(1,100).rand(1,100).rand(1,100).rand(1,100).rand(1,100) ).".".$gambar_file->getClientOriginalExtension();
        $destination    = base_path('public/uploads');

        $gambar_file->move($destination, $gambar_nama);

        DB::table('maps')->where('map_id', $id)->update(['map_lokasi' => $gambar_nama]);
      }

      $map_kota = $request->map_kota;
      DB::table('maps')->where('map_id', $id)->update(['map_kota' => $map_kota]);
      $map_latitude = $request->map_latitude;
      DB::table('maps')->where('map_id', $id)->update(['map_latitude' => $map_latitude]);
      $map_longitude = $request->map_longitude;
      DB::table('maps')->where('map_id', $id)->update(['map_longitude' => $map_longitude]);
      $map_judul = $request->map_judul;
      DB::table('maps')->where('map_id', $id)->update(['map_judul' => $map_judul]);
      $map_deskripsi = $request->map_deskripsi;
      DB::table('maps')->where('map_id', $id)->update(['map_deskripsi' => $map_deskripsi]);

      $request->session()->flash('status', notif('success', 'Berhasil Mengedit Gallery'));

      return view('admin/admin_map_add');
    }

    public function story_add(){
      $this->cek_login();
      return view('admin/admin_story_add');
    }

    public function story_add_process(Request $request){
      $this->cek_login();
      $this->validate($request, [
        'story_title'   => 'required',
        'story_text'    => 'required|max:1000|min:20'
      ]);

      $story_title  = $request->story_title;
      $story_text   = $request->story_text;

      DB::table('story')->insert([
        'story_title' => $story_title,
        'story_text'  => $story_text
      ]);

      $request->session()->flash('status', notif('success', 'Berhasil Menambah Story'));

      return redirect('/admin/story_add');
    }

    public function story_list(){
      $this->cek_login();
      $list_story  = DB::table('story')->select('*')->get();

      $data['list_story']  = $list_story;

      return view('admin/admin_story_list', $data);
    }

    public function story_edit($id){
      $this->cek_login();
      $data['story'] = DB::table('story')->select('*')->where('story_id', $id)->first();

      return view('admin/admin_story_edit', $data);
    }

    public function story_edit_process(Request $request, $id){
      $this->cek_login();
      $this->validate($request,[
        'story_title'    => 'required',
        'story_text'     => 'required'
      ]);

      $story_title = $request->story_title;
      $story_text = $request->story_text;
      DB::table('story')->where('story_id', $id)->update(['story_title' => $story_title]);
      DB::table('story')->where('story_id', $id)->update(['story_text' => $story_text]);

      return redirect('/admin/story');
    }

    public function profile_add(){
      $this->cek_login();
      $profile  = DB::table('profile')->select('*')->orderby('profile_id', 'DESC')->first();
      $data['profile']  = $profile;

      return view('admin/admin_profile_add', $data);
    }

    public function profile_add_process(Request $request){
      $this->cek_login();
      $this->validate($request, [
        'profile'   => 'required'
      ]);

      $profile_text = $request->profile;

      DB::table('profile')->insert([
        'profile_teks'  => $profile_text
      ]);

      return redirect('admin/profile_add');
    }

    public function gallery_list(){
      $this->cek_login();
      $list_gambar  = DB::table('gallery')->select('*')->get();

      $data['list_gambar']  = $list_gambar;

      return view('admin/admin_gallery_list', $data);
    }

    public function gallery_edit($id){
      $this->cek_login();
      $data['gambar'] = DB::table('gallery')->select('*')->where('gallery_id', $id)->first();

      return view('admin/admin_gallery_edit', $data);
    }

    public function gallery_edit_process(Request $request, $id){
      $this->cek_login();
      $this->validate($request,[
        'gambar_title'    => 'required|max:50'
      ]);

      if( !empty($request->gambar_file) ){
        $gambar_file    = $request->gambar_file;
        $destination    = base_path('public/uploads');
        $gambar_nama    = sha1( date("YmdHis").rand(1,100).rand(1,100).rand(1,100).rand(1,100).rand(1,100) ).".".$gambar_file->getClientOriginalExtension();
        $destination    = base_path('public/uploads');

        $gambar_file->move($destination, $gambar_nama);

        DB::table('gallery')->where('gallery_id', $id)->update(['gallery_lokasi' => $gambar_nama]);
      }

      $gambar_judul = $request->gambar_title;
      DB::table('gallery')->where('gallery_id', $id)->update(['gallery_judul' => $gambar_judul]);

      return redirect('/admin/gallery');
    }

    public function gallery_add(){
      $this->cek_login();
      return view('admin/admin_gallery_add');
    }

    public function gallery_add_process(Request $request){
      $this->cek_login();
      $this->validate($request, [
        'gambar_title'    => 'required|max:50',
        'gambar_file'     => 'required'
      ]);

      $gambar_title   = $request->gambar_title;
      $gambar_file    = $request->gambar_file;
      $gambar_url     = slug($gambar_title);
      $gambar_nama    = sha1( date("YmdHis").rand(1,100).rand(1,100).rand(1,100).rand(1,100).rand(1,100) ).".".$gambar_file->getClientOriginalExtension();
      $destination    = base_path('public/uploads');

      $gambar_file->move($destination, $gambar_nama);

      DB::table('gallery')->insert(
        [
          'gallery_judul'  => $gambar_title,
          'gallery_lokasi' => $gambar_nama,
          'gallery_url'    => $gambar_url
        ]
      );

      $request->session()->flash('status', notif('success', 'Berhasil Menambahkan gallery'));

      return view('admin/admin_gallery_add');
    }

    public function cek_login(){
      $login  = Cookie::get('admin');
      if( empty($login) ){
        Redirect::to('login')->send();
      }
    }

    public function produk_edit($id){
      $this->cek_login();
      $data['produk'] = DB::table('produk')->select('*')->where('produk_id', $id)->first();

      return view('admin/admin_produk_edit', $data);
    }

}
