@extends('template')

@section('content')

  <div class='col-md-12 col-sm-12 col-xs-12'>
    <div class='x_panel'>
      <div class='x_title'>
        <h2>Edit Data Produk <small> Edit </small> </h2>
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
            <label>Nama Produk</label>
            <input class='form-control' name='produk_nama' requireds maxlength='50'/>
            <label>Deskripsi</label>
            <input class='form-control' name='produk_deskripsi' requireds maxlength='50'/>
            <label>Harga</label>
            <input class='form-control' name='produk_harga' requireds maxlength='50'/>
            <br>
            <input type='file' name='gambar_file' required/>
          </div>
          <button type='submit' class='btn btn-primary'>Update</button>
        </form>
      </div>
    </div>
  </div>

@endsection
