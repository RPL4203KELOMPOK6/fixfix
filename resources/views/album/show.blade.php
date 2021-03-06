@extends('index')

{{-- @section('title','Alboem | Home') --}}

@section('content')
{{-- <div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Show Album</strong>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th class="avatar">Nama Album</th>
                                    <th>Penyanyi</th>
                                    <th>Harga</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center"> {{ $album -> id }} </td>
                                    <td style="text-align: center"> {{ $album -> nama }} </td>
                                    <td style="text-align: center"> {{ $album  -> penyanyi }} </td>
                                    <td style="text-align: center"> {{ $album  -> harga }} </td>
                                    <td style="text-align: center"> <img class="card-img-top" src="/image/{{ $album -> gambar }}"></td>
                                    <td style="text-align: center"> {{ $album  -> deskripsi }} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- .animated -->
</div> --}}

<div class="col-md-12">
    <div class="feed-box text-center">
        <section class="card">
            <div class="card-body">
                <div class="corner-ribon blue-ribon">
                    <i class="fa fa-twitter"></i>
                </div>
                <a href="#">
                    <img class="card-img-top" src="/image/{{ $album -> gambar }}" style="width:200px;height:200px;"></a>
                <h2>{{ $album -> nama }}</h2>
                <h5>Album dari "{{ $album  -> penyanyi }}"</h5>
                <p></p>
                <p>
                    {{ $album  -> deskripsi }}
                </p>
            </div>
        </section>
    </div>
</div>
@endsection