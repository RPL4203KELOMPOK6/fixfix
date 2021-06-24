@extends('index')

{{-- @section('title','Alboem | Home') --}}

@section('content')
<div class="col-lg">
    <div class="card">
        <div class="card-header">Input Album</div>
        <div class="card-body card-block">
            <form role="form" action="/admin/dataalbum/{{$album->id}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Nama Album</div>
                        <input type="text" id="nama" name="nama" class="form-control" value="{{$album->nama}}">
                        <div class="input-group-addon"><i class="fa fa-book"></i></div>
                    </div>
                {{-- @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror --}}
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Penyanyi</div>
                        <input type="text" id="penyanyi" name="penyanyi" class="form-control" value="{{$album->penyanyi}}">
                        <div class="input-group-addon"><i class="fa fa-users"></i></div>
                    </div>
                {{-- @error('penyanyi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror --}}
                </div>
                <div class="form-group">
                    <img src="/image/{{ $album -> gambar }}" alt="">
                </div>
                <div class="row form-group">
                    <div class="col col-md-2"><label for="gambar" class="form-control-label">Gambar</label></div>
                    <div class="col-sm-10">
                        <input type="file" name="gambar">
                    </div>
                @error('bio')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group row">
                    <div class="col col-md-2"><label for="deskripsi" class=" form-control-label">Deskripsi</label></div>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="deskripsi" name="deskripsi" value="{{$album->deskripsi}}"></textarea>
                    </div>
                @error('deskripsi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <!-- /.card-body -->
            
                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection       
