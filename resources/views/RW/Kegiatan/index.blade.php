@extends('layouts.template')
@section('title', 'Kegiatan RW')

@section('content_header')
<h1>Pengelolaan Kegiatan RW</h1>
@endsection
@section('content')
<head>
<H3>Pengelolaan Kegiatan RW</H3>
</head>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title mb-0">Pengelolaan Kegiatan RW</h3>
                    <a href="{{ url('/kegiatanRW/create') }}" class="btn btn-primary btn-sm ml-auto">Add Kegiatan</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal Kegiatan</th>
                                <th>Penanggung Jawab</th>
                                <th>Tempat Kegiatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kerja Bakti</td>
                                <td>17-04-2024</td>
                                <td>Iwan</td>
                                <td>Lapangan Rampal</td>
                                <td class="action-buttons">
                                    <a href="{{ url('/kegiatanRW/edit') }}" class="btn btn-primary btn-sm edit-button"><i class="fas fa-edit"></i> Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm delete-button"><i class="fas fa-trash" data-toggle="modal" data-target="#deleteConfirmationModal"></i> Delete</a>
                                    <a href="{{ url('/kegiatanRW/show') }}" class="btn btn-success btn-sm detail-button"><i class="fas fa-info-circle"></i> Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Senam Pagi</td>
                                <td>18-04-2024</td>
                                <td>Sugit</td>
                                <td>Balai Kota Malang</td>
                                <td class="action-buttons">
                                    <a href="{{ url('/kegiatanRW/edit') }}" class="btn btn-primary btn-sm edit-button"><i class="fas fa-edit"></i> Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm delete-button"><i class="fas fa-trash" data-toggle="modal" data-target="#deleteConfirmationModal"></i> Delete</a>
                                    <a href="{{ url('/kegiatanRW/show') }}" class="btn btn-success btn-sm detail-button"><i class="fas fa-info-circle"></i> Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jalan Sehat</td>
                                <td>19-04-2024</td>
                                <td>Elsa</td>
                                <td>Jln Ijen</td>
                                <td class="action-buttons">
                                    <a href="{{ url('/kegiatanRW/edit') }}" class="btn btn-primary btn-sm edit-button"><i class="fas fa-edit"></i> Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm delete-button"><i class="fas fa-trash" data-toggle="modal" data-target="#deleteConfirmationModal"></i> Delete</a>
                                    <a href="{{ url('/kegiatanRW/show') }}" class="btn btn-success btn-sm detail-button"><i class="fas fa-info-circle"></i> Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Healing</td>
                                <td>20-04-2024</td>
                                <td>Nanda</td>
                                <td>Waduk Selorejo</td>
                                <td class="action-buttons">
                                    <a href="{{ url('/kegiatanRW/edit') }}" class="btn btn-primary btn-sm edit-button"><i class="fas fa-edit"></i> Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm delete-button"><i class="fas fa-trash" data-toggle="modal" data-target="#deleteConfirmationModal"></i> Delete</a>
                                    <a href="{{ url('/kegiatanRW/show') }}" class="btn btn-success btn-sm detail-button"><i class="fas fa-info-circle"></i> Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanam Pohon</td>
                                <td>21-04-2024</td>
                                <td>Syahrul</td>
                                <td>Kebun Raya Purwodadi</td>
                                <td class="action-buttons">
                                    <a href="{{ url('/kegiatanRW/edit') }}" class="btn btn-primary btn-sm edit-button"><i class="fas fa-edit"></i> Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm delete-button"><i class="fas fa-trash" data-toggle="modal" data-target="#deleteConfirmationModal"></i> Delete</a>
                                    <a href="{{ url('/kegiatanRW/show') }}" class="btn btn-success btn-sm detail-button"><i class="fas fa-info-circle"></i> Detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Konfirmasi Hapus Transaksi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus transaksi ini?</p>
                    <p id="transactionDetails"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" id="deleteButton">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    
@endsection