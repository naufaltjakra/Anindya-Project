@extends('template')

@section('content')

  <div class='col-md-12 col-sm-12 col-xs-12'>
    <div class='x_panel'>
      <div class='x_title'>
        <h2>Edit Map Event <small> Edit </small> </h2>
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
            <input value='{{ $map->map_kota }}' class='form-control' name='map_kota' requireds maxlength='50'/>
            <label>Latitude</label>
            <input value='{{ $map->map_latitude }}' class='form-control' name='map_latitude' requireds maxlength='50'/>
            <label>Longitude</label>
            <input value='{{ $map->map_longitude }}' class='form-control' name='map_longitude' requireds maxlength='50'/>
            <label>Judul</label>
            <input value='{{ $map->map_judul }}' class='form-control' name='map_judul' requireds maxlength='50'/>
            <label>Deskripsi</label>
            <input value='{{ $map->map_deskripsi }}' class='form-control' name='map_deskripsi' required />
            <br>
            <div class='form-group'>
              <!-- <div class='form-control'> -->
                <img src="{{ url('uploads/').'/'.$map->map_lokasi }}" width='200'/>
              <!-- </div> -->
            </div>
            <input type='file' name='gambar_file' required/>
          </div>
          <button type='submit' class='btn btn-primary'>Update</button>
        </form>
      </div>
    </div>
  </div>

@endsection
