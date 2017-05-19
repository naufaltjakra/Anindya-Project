@extends('template')

@section('content')

  <div class='col-md-12 col-sm-12 col-xs-12'>
    <div class='x_panel'>
      <div class='x_title'>
        <h2>Edit Story <small> Edit </small></h2>
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
            <input value='{{ $story->story_title }}' class='form-control' name='story_title' required maxlength='50'/>
            <label>Deskripsi</label>
            <textarea class='form-control' name='story_text' required>{{ $story->story_text }}</textarea>
          </div>

          <button type='submit' class='btn btn-primary'>Simpan</button>

        </form>
      </div>
    </div>
  </div>

@endsection
