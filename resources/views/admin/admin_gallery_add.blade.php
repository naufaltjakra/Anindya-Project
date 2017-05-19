@extends('template')

@section('content')

  <div class='col-md-12 col-sm-12 col-xs-12'>
    <div class='x_panel'>
      <div class='x_title'>
        <h2>Tambah Gallery <small> Add </small> </h2>
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
            <input class='form-control' name='gambar_title' requireds maxlength='50'/>
            <small>Ukuran Gambar 330x330 pixel</small>
          </div>

          <div class='form-group'>
            <input type='file' name='gambar_file' requireds/>
          </div>

          <button type='submit' class='btn btn-primary'>Upload</button>

        </form>
      </div>
    </div>
  </div>

@endsection
