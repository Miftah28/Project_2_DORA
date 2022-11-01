@extends('dashboard.layout')

@section('content')
    <!-- Table stok darah -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Stok Darah</h5>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#createstokdarah">
                Tambah
            </button>
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
                            <th scope="row">{{ $no + 1 }}</th>
                            <td>{{ $stokdarah->goldar }}</td>
                            <td>{{ $stokdarah->stok }}</td>
                            <td>{{ $stokdarah->tglupdatestok }}</td>
                            <th>
                                <form action="">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#readstokdarah">
                                        <i class="bi bi-eye-fill"></i>
                                    </button>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#updatestokdarah">
                                        <i class='bx bx-edit'></i>
                                    </button>
                                    {{-- <a href="" class="btn btn-danger btn-sm"><i class="bi bi-trash2"></i></a> --}}
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Bordered Table -->
        </div>
    </div>
    <!-- end table stok darah -->
    <!-- Modal create stok darah -->
    <div class="modal fade" id="createstokdarah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal Stok Darah</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Create Stok Darah</h5>
                            <!-- No Labels Form -->
                            <form class="row g-3" action="{{ route('stokdarah.store') }}" method="POST">
                                @csrf
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="goldar" id="goldar"
                                        placeholder="Golongan Darah">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="stok" id="stok"
                                        placeholder="Stok">
                                </div>
                                <div class="col-md-6">
                                    <input type="date" name="tglupdatestok" id="tglupdatestok" class="form-control">
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form><!-- End No Labels Form -->
            </div>
        </div>
    </div>
    <!-- End modal create stok darah -->
    <!-- Modal update stok darah -->
    <div class="modal fade" id="updatestokdarah" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal Stok Darah</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Update Stok Darah</h5>
                            <!-- No Labels Form -->
                            <form class="row g-3" action="{{ route('stokdarah.update', $stokdarah->id) }}" method="POST">
                                @csrf
                                @method('patch')
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="goldar"
                                        value="{{ $stokdarah->goldar }}" id="goldar" placeholder="Golongan Darah">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="stok"
                                        value="{{ $stokdarah->stok }}" id="stok" placeholder="Stok">
                                </div>
                                <div class="col-md-6">
                                    <input type="date" name="tglupdatestok" value="{{ $stokdarah->tglupdatestok }}"
                                        id="tglupdatestok" class="form-control">
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form><!-- End No Labels Form -->
            </div>
        </div>
    </div>
    <!-- End modal create stok darah -->
@endsection
