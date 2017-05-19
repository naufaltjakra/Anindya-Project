@extends('template')

@section('content')

  <div class='col-md-12 col-sm-12 col-xs-12'>
    <div class='x_panel'>
      <div class='x_title'>
        <h2>Tambah Map Event <small> Add </small> </h2>
        <div class='clearfix'></div>
      </div>
      <div class='x_content'>

        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
        @endif

        @if (Session::has('status'))
          {!! Session::get('status') !!}
        @endif

        <form method='POST' enctype="multipart/form-data">
          <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
          <div class='form-group'>
            <label>Kota</label>
            <input class='form-control' name='map_kota' requireds maxlength='50'/>
            <label>Latitude</label>
            <input class='form-control' name='map_latitude' requireds maxlength='50'/>
            <label>Longitude</label>
            <input class='form-control' name='map_longitude' requireds maxlength='50'/>
            <label>Judul</label>
            <input class='form-control' name='map_judul' requireds maxlength='50'/>
            <label>Deskripsi</label>
            <textarea class='form-control' name='map_deskripsi' required></textarea>
            <br>
            <input type='file' name='gambar_file' required/>
          </div>
          <button type='submit' class='btn btn-primary'>Tambah</button>
        </form>
      </div>
    </div>
  </div>

@endsection
