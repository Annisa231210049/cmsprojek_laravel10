@extends('layout.app')
@section('title','Peserta')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Peserta </h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Peserta</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Program</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php $no = 1; ?>

                    @foreach($allPeserta as $row)  <!-- Ganti $peserta menjadi $allPeserta -->
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->program }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>{{ $row->gender }}</td>
                        <td>{{ $row->address }}</td>
                        <td>
                            <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
