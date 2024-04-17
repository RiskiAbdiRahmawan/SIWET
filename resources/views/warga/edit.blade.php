@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Data Warga</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <form action="{{url('warga/edit')}}" method="POST" class="form-horizontal">
            @csrf
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Nik</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="no_kk" name="no_kk" value="{{old('no_kk')}}" required>
                    @error('no_kk')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">No KK</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="no_kk" name="no_kk" value="{{old('no_kk')}}" required>
                    @error('no_kk')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Nama</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama')}}" required>
                    @error('nama')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Tanggal Lahir</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{old('tanggal_lahir')}}" required>
                    @error('tanggal_lahir')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Jenis Kelamin</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{old('jenis_kelamin')}}" required>
                    @error('jenis_kelamin')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Alamat</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{old('alamat')}}" required>
                    @error('alamat')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Agama</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="agama" name="agama" value="{{old('agama')}}" required>
                    @error('agama')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Jenis Penduduk</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="jenis_penduduk" name="jenis_penduduk" value="{{old('jenis_penduduk')}}" required>
                    @error('jenis_penduduk')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label"></label>
                <div class="col-10">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <a href="{{url('warga')}}" class="btn btn-sm btn-danger ml-1">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
