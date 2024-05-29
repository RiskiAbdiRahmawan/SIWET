@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data Mahasiswa Kos</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <form action="{{url('MahasiswaKos')}}" method="POST" class="form-horizontal">
            @csrf
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">NIK</label>
                <div class="col-10">
                    <input type="number" class="form-control" id="NIK" name="NIK" placeholder="Masukkan NIK" required>
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
                            <option value="{{ $RT->ID_RT }}"> RT {{ $RT->nomor_RT }}</option>
                        @endforeach
                    </select>
                    @error('id_RT')
                        <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Nama</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
                    @error('nama')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Tempat, Tanggal Lahir</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="tempat_Tanggal_Lahir" name="tempat_Tanggal_Lahir" placeholder="Masukkan Tempat dan Tanggal Lahir" required>
                    @error('tempat_Tanggal_Lahir')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Alamat Kos</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="alamatKos" name="alamatKos" placeholder="Masukkan Alamat Kos" required>
                    @error('alamatKos')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Jenis Kelamin</label>
                <div class="col-10">
                    <select class="form-control" id="jenis_Kelamin" name="jenis_Kelamin" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    @error('jenis_Kelamin')
                        <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Agama</label>
                <div class="col-10">
                    <select class="form-control" id="agama" name="agama" required>
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                        <!-- Jika ada agama lain yang ingin ditambahkan, tambahkan pilihan di sini -->
                    </select>
                    @error('agama')
                        <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Universitas</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="universitas" name="universitas" placeholder="Masukkan Universitas" required>
                    @error('universitas')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Jurusan</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan Jurusan" required>
                    @error('jurusan')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2"></div>
                <div class="col-10">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <a href="{{url('MahasiswaKos')}}" class="btn btn-sm btn-danger ml-1">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
