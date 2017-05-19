@extends('template')

@section('content')

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Daftar Map Event <small> List </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <!-- <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li> -->
            </ul>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">

              <table class="table">
                <thead>
                  <tr>
                    <th>Kota</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                @foreach( $list_map as $map )
                <tbody>
                  <tr>
                    <td>{{ $map->map_kota }}</td>
                    <td>{{ $map->map_deskripsi }}</td>
                    <td><a href='{{ url("/admin/map_edit/".$map->map_id) }}'><i class="fa fa-pencil fa-lg"></i></a>
                    | <a href='#'><i class="fa fa-times fa-lg"></i></a></td>
                  </tr>
                </tbody>
                @endforeach
              </table>
          </div>
        </div>
      </div>
    </div>

@endsection
