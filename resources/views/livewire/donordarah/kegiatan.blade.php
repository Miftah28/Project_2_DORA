<div class="card">
    @if (session()->has('message'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @include('livewire.donordarah.modalKegiatan')
    <div class="card-body overflow-auto">
        <h1 class="card-title text-center">KEGIATAN</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary text-center mb-2" data-bs-toggle="modal"
            data-bs-target="#createkegiatanModal">
            <i class='bx bx-plus-circle'></i> Tambah
        </button>
        <input type="search" class="form-control float-end mx-2" wire:model="search" placeholder="Search..."
            style="width: 230px">
        <!-- Bordered Table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center" scope="col">No</th>
                    <th class="text-center" scope="col">Tempat</th>
                    <th class="text-center" scope="col">Target</th>
                    <th class="text-center" scope="col">Tanggal Kegiatan</th>
                    <th class="text-center" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @forelse ($kegiatans as $no => $kegiatan)
                        <th class="text-center">{{ $no + 1 }}</th>
                        <td class="text-center">{{ $kegiatan->tempat }}</td>
                        <td class="text-center">{{ $kegiatan->target }}</td>
                        <td class="text-center">{{ $kegiatan->tglkegiatan }}</td>
                        <td class="text-center">
                            <!-- Button -->
                            <button type="button" wire:click="editkegiatan({{ $kegiatan->id }})"
                                class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updatekegiatanModal">
                                <i class='bx bx-edit'></i>
                            </button>
                            <button type="button" wire:click="deletekegiatan({{ $kegiatan->id }})"
                                class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletekegiatanModal">
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
            {{ $kegiatans->links() }}
        </div>
    </div>
</div>
<!-- end table stok darah -->
