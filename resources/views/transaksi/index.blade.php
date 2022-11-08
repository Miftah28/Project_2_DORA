@extends('dashboard.layout')

@section('content')
    <div>
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
                        <tr>
                            {{-- @forelse ($stokdarahs as $no => $stokdarah)
                                <th>{{ $no + 1 }}</th>
                                <td>{{ $stokdarah->goldar }}</td>
                                <td>{{ $stokdarah->stok }}</td>
                                <td>{{ $stokdarah->tglupdatestok }}</td>
                                <td>
                                    <form action="{{ route('stokdarah.destroy', $stokdarah->id) }}">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#readstokdarah">
                                            <i class="bi bi-eye-fill"></i>
                                        </button>
                                        <!-- Button trigger modal -->
                                        <button type="button" wire:click="updatestokdarah{{ $stokdarah->id }}"
                                            class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#updatestokdarah">
                                            <i class='bx bx-edit'></i>
                                        </button>
                                    </form>
                                </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No Record Found</td>
                        </tr>
                        @endforelse --}}
                    </tbody>
                </table>
                <!-- End Bordered Table -->
            </div>
        </div>
        <!-- end table stok darah -->
    </div>
@endsection
