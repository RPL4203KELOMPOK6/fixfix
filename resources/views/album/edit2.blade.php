@extends('dashboard')

@section('content')
<div class="card-header">
    <h3 class="card-title">Input Album</h3>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <form role="form" action="/admin/dataalbum/{{$album->id}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <div class="card-body">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 text-right control-label col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" name="nama" value="{{$album->nama}}" placeholder="Nama Album">
                        </div>
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group row">
                        <label for="penyanyi" class="col-sm-2 text-right control-label col-form-label">Penyanyi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="penyanyi" name="penyanyi" value="{{$album->penyanyi}}" placeholder="Nama Penyanyi">
                        </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 text-right control-label col-form-label">Harga</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" id="harga" name="harga" value="{{$album->harga}}" placeholder="..."  aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Rp</span>
                                </div>
                            </div>
                        </div>
                    @error('Harga')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group row">
                        <label for="gambar" class="col-sm-2 text-right control-label col-form-label">Gambar</label>
                        <div class="col-sm-9">
                            <input type="file" name="gambar">
                        </div>
                    @error('bio')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-2 text-right control-label col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="deskripsi" name="deskripsi" value="{{$album->deskripsi}}" placeholder="Deskripsi Album"></textarea>
                        </div>
                    @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <!-- /.card-body -->
            
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection       