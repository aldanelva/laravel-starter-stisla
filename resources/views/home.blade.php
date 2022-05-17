@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Table</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Title</h4>
                    </div>
                    <div class="card-body"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body"></div>
                </div>
            </div>
        </div> --}}
        <div class="section-body">
            <a href="/tambahBook" class="btn btn-success mb-3">Tambah Buku</a>
            <div class="row">
                <div class="col-12">
                    @include('layouts.alert')
                </div>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Kode Buku</th>
                <th class="text-center">Judul Buku</th>
                <th class="text-center">Pengarang</th>
                <th class="text-center">Penerbit</th>
                <th class="text-center">Tahun Terbit</th>
            </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $row )
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row->kodebuku}}</td>
                    <td>{{ $row->judulbuku}}</td>
                    <td>{{ $row->pengarang}}</td>
                    <td>{{ $row->penerbit}}</td>
                    <td>{{ $row->tahunterbit}}</td>
                    <td class="text-center">
                        <a href="/tampilBook/{{ $row->id }}" class="btn btn-primary d-flex justify-content-center">Edit</a>
                        <a href="/deletedata/{{ $row->id }}" class="btn btn-danger d-flex justify-content-center">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </section>
@endsection
