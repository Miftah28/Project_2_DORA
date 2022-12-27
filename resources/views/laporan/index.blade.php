@extends('dashboard.layout')

@section('content')
    <div class="container">
        {{-- Data donor darah --}}
        <div class="row">
            <div class="card">
                <div class="card-body overflow-auto">
                    <h1 class="card-title text-center">DATA DONOR</h1>
                    <a href="{{ route('datadonor.pdf') }}"><button type="button" class="btn btn-info mb-2"><i
                                class='bx bxs-printer'></i>
                            Print</button>
                    </a>
                    <!-- Bordered Table -->
                    <table class="table table-bordered" id="myTable">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">No</th>
                                <th class="text-center" scope="col">Nama Lengkap</th>
                                <th class="text-center" scope="col">Umur/Usia</th>
                                <th class="text-center" scope="col">Golongan Darah</th>
                                <th class="text-center" scope="col">Tensi</th>
                                <th class="text-center" scope="col">Berat Badan</th>
                                <th class="text-center" scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @forelse ($data as $no => $datadonor)
                                    <th class="text-center">{{ $no + 1 }}</th>
                                    <td class="text-center">{{ $datadonor->nama }}</td>
                                    <td class="text-center">{{ $datadonor->umur }}</td>
                                    <td class="text-center">{{ $datadonor->goldar }}</td>
                                    <td class="text-center">{{ $datadonor->tensi }}</td>
                                    <td class="text-center">{{ $datadonor->bb }}</td>
                                    <td class="text-center">{{ $datadonor->kt }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="8">No Record Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- End Bordered Table -->
                </div>
            </div>
        </div>
        {{-- Data stok darah --}}
        <div class="row">
            <div class="card">
                <div class="card-body overflow-auto">
                    <h1 class="card-title text-center">STOK DARAH</h1>
                    <a href="{{ route('stokdarah.pdf') }}">
                        <button type="button" class="btn btn-info mb-2">
                            <i class='bx bxs-printer'></i>
                            Print
                        </button>
                    </a>
                    <table class="table table-bordered" id="myTable">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">No</th>
                                <th class="text-center" scope="col">Golongan Darah</th>
                                <th class="text-center" scope="col">Whole Blood</th>
                                <th class="text-center" scope="col">Package Red Cell</th>
                                <th class="text-center" scope="col">Trombocyte</th>
                                <th class="text-center" scope="col">Fresh Frozen Plasma</th>
                                <th class="text-center" scope="col">Tanggal update stok</th>
                                <th class="text-center" scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @forelse ($stokdarahs as $no => $stokdarah)
                                    <th class="text-center">{{ $no + 1 }}</th>
                                    <td class="text-center">{{ $stokdarah->goldar }}</td>
                                    <td class="text-center">{{ $stokdarah->wb }}</td>
                                    <td class="text-center">{{ $stokdarah->prc }}</td>
                                    <td class="text-center">{{ $stokdarah->t }}</td>
                                    <td class="text-center">{{ $stokdarah->ffp }}</td>
                                    <td class="text-center">{{ $stokdarah->tglupdatestok }}</td>
                                    <td class="text-center">
                                        <!-- Button -->
                                        <button type="button" wire:click="editstokdarah({{ $stokdarah->id }})"
                                            class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#updatestokdarahModal">
                                            <i class='bx bx-edit'></i>
                                        </button>
                                        <button type="button" wire:click="deletestokdarah({{ $stokdarah->id }})"
                                            class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deletestokdarahModal">
                                            <i class="bi bi-trash2"></i>
                                        </button>
                                    </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="8">No Record Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- End Bordered Table -->
                </div>
            </div>
        </div>
        {{-- Data Transaksi --}}
        <div class="row">
            <div class="card">
                <div class="card-body overflow-visible">
                    <h1 class="card-title text-center">TRANSAKSI</h1>
                    <a href="{{ route('transaksi.pdf') }}">
                        <button type="button" class="btn btn-info mb-2">
                            <i class='bx bxs-printer'></i>
                            Print
                        </button>
                    </a>
                    <!-- Bordered Table -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">No</th>
                                <th class="text-center" scope="col">Nama Lengkap</th>
                                <th class="text-center" scope="col">NIK</th>
                                <th class="text-center" scope="col">No Telepon</th>
                                <th class="text-center" scope="col">Tanggal</th>
                                <th class="text-center" scope="col">Jumlah Katong Darah</th>
                                <th class="text-center" scope="col">Keterangan</th>
                                <th class="text-center" scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($transaksis as $no => $transaksi)
                                <tr>
                                    <th class="text-center">{{ $no + 1 }}</th>
                                    <td class="text-center">{{ $transaksi->nama }}</td>
                                    <td class="text-center">{{ $transaksi->nik }}</td>
                                    <td class="text-center">{{ $transaksi->notelp }}</td>
                                    <td class="text-center">{{ $transaksi->tanggal }}</td>
                                    <td class="text-center">{{ $transaksi->jumlah }}</td>
                                    <td class="text-center">{{ $transaksi->keterangan }}</td>
                                    <td class="text-center">{{ $transaksi->status }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="10">No Record Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- End Bordered Table -->
                    <div>
                        {{ $transaksis->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
