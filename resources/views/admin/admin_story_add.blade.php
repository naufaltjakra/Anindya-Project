@extends('template')

@section('content')

  <div class='col-md-12 col-sm-12 col-xs-12'>
    <div class='x_panel'>
      <div class='x_title'>
        <h2>Tambah Story <small>Add</small></h2>
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
            <label>Judul Story</label>
            <input class='form-control' name='story_title' required maxlength='50'/>
          </div>
          <label for="message">Deskripsi (20 chars min, 300 max) :</label>
          <textarea name='story_text' class='form-control' required></textarea>
            <br>
          <div class='form-group'>
            <button type='submit' class='btn btn-primary'>Tambah</buttton>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
