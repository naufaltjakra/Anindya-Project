@extends('template')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Kelola Profile<small>Text</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <!-- <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li> -->
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class='x_content'>
      <form method='POST'>
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <div class='form-group'>
          <textarea class='tinyMCE' name='profile'>{!! $profile->profile_teks !!}</textarea>
        </div>
        <div class='form-group'>
          <button type='submit' class='btn btn-primary'>Simpan</buttton>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
