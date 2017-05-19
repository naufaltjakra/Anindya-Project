@extends('template')

@section('content')

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Daftar Story <small> List </small></h2>
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
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Action</th>
                </tr>
              </thead>
              @foreach( $list_story as $story )
              <tbody>
                <tr>
                  <td>{{ $story->story_title }}</td>
                  <td>{{ $story->story_text }}</td>
                  <td><a href='{{ url("/admin/story_edit/".$story->story_id) }}'><i class="fa fa-pencil fa-lg"></i></a>
                  | <a href='{{ url("/admin/story_delete/".$story->story_id) }}' onclick='return confirm("Hapus gambar ini?")'><i class="fa fa-times fa-lg"></i></a></td>
                </tr>
              </tbody>
              @endforeach
            </table>

            <!-- <div class="row">
              @foreach( $list_story as $story )
              <div class="col-md-12">
                <table>
                  <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                  </tr><br>
                  <tr>
                    <td>{{ $story->story_title }}</td>
                    <td>{{ $story->story_text }}</td>
                    <td><a href='{{ url("/admin/story_edit/".$story->story_id) }}'><i class="fa fa-pencil"></i></a></td>
                    <td><a href='{{ url("/admin/story_delete/".$story->story_id) }}' onclick='return confirm("Hapus gambar ini?")'><i class="fa fa-times"></i></a></td>
                  </tr>
                </table>
                </div>
              @endforeach
            </div> -->

          </div>
        </div>
      </div>
    </div>

@endsection
