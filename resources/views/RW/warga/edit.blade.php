@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Data Warga</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <form action="{{url('Warga/' . $Warga->NIK)}}" method="POST" class="form-horizontal">
            @csrf
            {!! method_field('PUT') !!}
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">NIK</label>
                <div class="col-10">
                    <input type="number" class="form-control" id="NIK" name="NIK" value="{{old('NIK',$Warga->NIK)}}" required>
                    @error('NIK')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label" for="ID_RT">ID_RT</label>
                <div class="col-10">
                    <select class="form-control" id="ID_RT" name="ID_RT" required>
                        <option value="">Pilih ID_RT</option>
                        @foreach($RT as $RT)
                            <option value="{{ $RT->ID_RT }}" @if(old('ID_RT', $Warga->ID_RT) == $RT->ID_RT) selected @endif> RT {{ $RT->nomor_RT }}</option>
                        @endforeach
                    </select>
                    @error('ID_RT')
                        <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">No KK</label>
                <div class="col-10">
                    <input type="number" class="form-control" id="nomor_KK" name="nomor_KK" value="{{old('nomor_KK',$Warga->nomor_KK)}}" required>
                    @error('nomor_KK')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Nama</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama',$Warga->nama)}}" required>
                    @error('nama')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Tempat, Tanggal Lahir</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="tempat_Tanggal_Lahir" name="tempat_Tanggal_Lahir" value="{{old('tempat_Tanggal_Lahir',$Warga->tempat_Tanggal_Lahir)}}" required>
                    @error('tempat_Tanggal_Lahir')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Jenis Kelamin</label>
                <div class="col-10">
                    <select class="form-control" id="jenis_Kelamin" name="jenis_Kelamin" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki" @if(old('jenis_Kelamin', $Warga->jenis_Kelamin) == 'Laki-laki') selected @endif>Laki-laki</option>
                        <option value="Perempuan" @if(old('jenis_Kelamin', $Warga->jenis_Kelamin) == 'Perempuan') selected @endif>Perempuan</option>
                    </select>
                    @error('jenis_Kelamin')
                        <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Alamat</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{old('alamat',$Warga->alamat)}}" required>
                    @error('alamat')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Pekerjaan</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="{{old('pekerjaan',$Warga->pekerjaan)}}" required>
                    @error('pekerjaan')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Agama</label>
                <div class="col-10">
                    <select class="form-control" id="agama" name="agama" required>
                        <option value="">Pilih Agama</option>
                        <option value="Islam" @if(old('agama', $Warga->agama) == 'Islam') selected @endif>Islam</option>
                        <option value="Kristen Protestan" @if(old('agama', $Warga->agama) == 'Kristen Protestan') selected @endif>Kristen Protestan</option>
                        <option value="Katolik" @if(old('agama', $Warga->agama) == 'Katolik') selected @endif>Katolik</option>
                        <option value="Hindu" @if(old('agama', $Warga->agama) == 'Hindu') selected @endif>Hindu</option>
                        <option value="Buddha" @if(old('agama', $Warga->agama) == 'Buddha') selected @endif>Buddha</option>
                        <option value="Konghucu" @if(old('agama', $Warga->agama) == 'Konghucu') selected @endif>Konghucu</option>
                        <!-- Jika ada agama lain yang ingin ditambahkan, tambahkan pilihan di sini -->
                    </select>
                    @error('agama')
                        <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Jenis Penduduk</label>
                <div class="col-10">
                    <select class="form-control" id="jenis_Penduduk" name="jenis_Penduduk" required>
                        <option value="">Pilih Jenis Penduduk</option>
                        <option value="Penduduk Tetap" @if(old('jenis_Penduduk', $Warga->jenis_Penduduk) == 'Penduduk Tetap') selected @endif>Penduduk Tetap</option>
                        <option value="Penduduk Kontrak" @if(old('jenis_Penduduk', $Warga->jenis_Penduduk) == 'Penduduk Kontrak') selected @endif>Penduduk Kontrak</option>
                    </select>
                    @error('jenis_Penduduk')
                        <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label class="col-2 control-label col-form-label"></label>
                <div class="col-10">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <a href="{{url('Warga')}}" class="btn btn-sm btn-danger ml-1">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
