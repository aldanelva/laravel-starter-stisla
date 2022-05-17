@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Buku</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Kode Buku</label>
                              <input type="text" name="kode_buku" class="form-control" id="exampleInputEmail1"
                              aria-describedby="emailHelp" value="{{ $data->kode_buku }}">

                            </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                                <input type="text" name="judul_buku" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->judul_buku }}">

                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Pengarang</label>
                                <input type="text" name="pengarang" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->pengarang }}">

                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Penerbit</label>
                                <input type="text" name="penerbit" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->penerbit }}">

                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
                                <input type="text" name="tahun_terbit" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->tahun_terbit }}">

                              </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
                </div>
            </div>

        </div>
    </section>
@endsection
