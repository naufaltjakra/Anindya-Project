@extends('template')

@section('content')

  <div class='col-md-12 col-sm-12 col-xs-12'>
    <div class='x_panel'>
      <div class='x_title'>
        <h2>Edit Gallery <small> Edit </small></h2>
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
            <label>Nama Gambar</label>
            <input value='{{ $gambar->gallery_judul }}' class='form-control' name='gambar_title' required maxlength='50'/>
          </div>

          <div class='form-group'>
            <!-- <div class='form-control'> -->
              <img src="{{ url('uploads/').'/'.$gambar->gallery_lokasi }}" width='200'/>
            <!-- </div> -->
          </div>

          <div class='form-group'>
            <input type='file' name='gambar_file'/>
          </div>

          <button type='submit' class='btn btn-primary'>Update</button>

        </form>
      </div>
    </div>
  </div>

@endsection
