

<div class="card">
    @if (session()->has('message'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @include('livewire.transaksi.modal')
    <div class="card-body overflow-auto" >
        <h1 class="card-title text-center">TRANSAKSI</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary text-center mb-2" data-bs-toggle="modal"
            data-bs-target="#createtransaksiModal">
            <i class='bx bx-plus-circle'></i> Tambah
        </button>
        <input type="search" class="form-control float-end mx-2" wire:model="search" placeholder="Search..."
            style="width: 230px">
        <!-- Bordered Table -->
        <table class="table table-bordered" >
            <thead>
                <tr>
                    <th class="text-center" scope="col">No</th>
                    <th class="text-center" scope="col">Nama Lengkap</th>
                    <th class="text-center" scope="col">NIK</th>
                    <th class="text-center" scope="col">No Telepon</th>
                    <th class="text-center" scope="col">Tanggal</th>
                    <th class="text-center" scope="col">Surat keterangan</th>
                    <th class="text-center" scope="col">Jumlah Katong Darah</th>
                    <th class="text-center" scope="col">Keterangan</th>
                    <th class="text-center" scope="col">Status</th>
                    <th class="text-center" scope="col">Aksi</th>
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
                        <td class="text-center">{{ $transaksi->sk }}</td>
                        <td class="text-center">{{ $transaksi->jumlah }}</td>
                        <td class="text-center">{{ $transaksi->keterangan }}</td>
                        <td class="text-center">{{ $transaksi->status }}</td>
                        <td class="text-center">
                            <!-- Button -->
                            <button type="button" wire:click="edittransaksi({{ $transaksi->id }})"
                                class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updatetransaksiModal">
                                <i class='bx bx-edit'></i>
                            </button>
                            <button type="button" wire:click="deletetransaksi({{ $transaksi->id }})"
                                class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletetransaksiModal">
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
        <div>
            {{ $transaksis->links() }}
        </div>
    </div>
</div>
<!-- end table stok darah -->
