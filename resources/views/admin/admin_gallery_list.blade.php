@extends('template')

@section('content')

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Daftar Gallery <small> List </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <!-- <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li> -->
            </ul>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">

            <div class="row">
              @foreach( $list_gambar as $gambar )
              <div class="col-md-3">
                <div class="thumbnail">
                  <div class="image view view-first">
                    <img style="width: 100%; display: block;" src="{{ url('uploads/'.$gambar->gallery_lokasi) }}" alt="image" />
                    <div class="mask">
                      <p>{{ $gambar->gallery_judul }}</p>
                      <div class="tools tools-bottom">
                        <a href='{{ url("/admin/gallery_edit/".$gambar->gallery_id) }}'><i class="fa fa-pencil"></i></a>
                        <a href='{{ url("/admin/gallery_delete/".$gambar->gallery_id) }}' onclick='return confirm("Hapus gambar ini?")'><i class="fa fa-times"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
