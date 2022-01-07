@extends('layouts.app')

@section('content')

<section class="section">
    <div class="section-header">
        <h1>Menu Group and Menu Item</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Components</a></div>
            <div class="breadcrumb-item">Table</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Menu Item Management</h2>

        <div class="row">
            <div class="col-12">
                @include('layouts.alert')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Menu Item List</h4>
                        <div class="card-header-action">
                            <a class="btn btn-icon icon-left btn-primary"
                                href="{{ route('menu-item.create') }}">Create New
                                Menu Item</a>
                            {{-- <a class="btn btn-info btn-primary active import">
                                <i class="fa fa-download" aria-hidden="true"></i>
                                Import Menu Item</a>
                            <a class="btn btn-info btn-primary active" href="{{ route('menu-item.export') }}">
                                <i class="fa fa-upload" aria-hidden="true"></i>
                                Export Menu Item</a> --}}
                            <a class="btn btn-info btn-primary active search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                Search Menu Item</a>
                        </div>
                    </div>
                    <div class="card-body">
                        {{-- <div class="show-import" style="display: none">
                            <div class="custom-file">
                                <form action="{{ route('menu-item.import') }}" method="post"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <label class="custom-file-label" for="file-upload">Choose File</label>
                                    <input type="file" id="file-upload" class="custom-file-input" name="import_file">
                                    <br /> <br />
                                    <div class="footer text-right">
                                        <button class="btn btn-primary">Import File</button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        <div class="show-search mb-3" style="display: none">
                            <form id="search" method="GET" action="{{ route('menu-item.index') }}">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="role">Menu Item</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Menu Item Name">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                    <a class="btn btn-secondary" href="{{ route('menu-item.index') }}">Reset</a>
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tbody>
                                    <tr>
                                       
                                        <th>Parent</th>
                                        <th>Name</th>
                                        <th>Url</th>
                                        <th>Permission</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                    @foreach ($suratAktifKuliahs as $suratAktifKuliah)
                                        <tr>
                                            
                                            <td>{{ $suratAktifKuliah->user_name }}</td>
                                            <td>{{ $suratAktifKuliah->name }}</td>
                                            <td>{{ $suratAktifKuliah->route }}</td>
                                            <td>{{ $suratAktifKuliah->permission_name }}</td>
                                            <td class="text-right">
                                                <div class="d-flex justify-content-end">
                                                    <a href="{{ route('surat-aktif-kuliah.edit', $suratAktifKuliah->id) }}"
                                                        class="btn btn-sm btn-info btn-icon "><i
                                                            class="fas fa-edit"></i>
                                                        Edit</a>
                                                    <form action="{{ route('surat-aktif-kuliah.destroy', $suratAktifKuliah->id) }}"
                                                        method="POST" class="ml-2">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token"
                                                            value="{{ csrf_token() }}">
                                                        <button class="btn btn-sm btn-danger btn-icon "><i
                                                                class="fas fa-times"></i> Delete </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $suratAktifKuliahs->withQueryString()->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection