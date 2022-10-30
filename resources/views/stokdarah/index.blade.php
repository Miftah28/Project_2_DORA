@extends('dashboard.layout')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Stok Darah</h5>
            <input class="btn btn-primary mb-2 mr-5" type="button" value="Tambah">
            <!-- Bordered Table -->
            <table class="table table-bordered" id="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Golongan Darah</th>
                        <th scope="col">Jumlah Stok</th>
                        <th scope="col">Tgl update stok</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stokdarah as $no => $stokdarah)
                    <tr>
                        <th scope="row">{{$no+1}}</th>
                        <td>{{$stokdarah->goldar}}</td>
                        <td>{{$stokdarah->stok}}</td>
                        <td>{{$stokdarah->tglupdatestok}}</td>
                        <th>
                            <a href="" class="btn btn-info btn-sm"><i class="bi bi-eye-fill"></i></a>
                            <a href="" class="btn btn-success btn-sm"><i class='bx bx-edit'></i></a>
                            {{-- <a href="" class="btn btn-danger btn-sm"><i class="bi bi-trash2"></i></a> --}}
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Bordered Table -->
        </div>
    </div>
@endsection
