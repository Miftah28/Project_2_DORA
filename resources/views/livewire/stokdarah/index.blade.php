<div class="card">
    @if (session()->has('message'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @include('livewire.stokdarah.modal')
    <div class="card-body">
        <h1 class="card-title text-center">STOK DARAH</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary text-center mb-2" data-bs-toggle="modal"
            data-bs-target="#createstokdarahModal">
            <i class='bx bx-plus-circle'></i> Tambah
        </button>
        <input type="search" class="form-control float-end mx-2" wire:model = "search" placeholder="Search..." style="width: 230px">
        <!-- Bordered Table -->
        <table class="table table-bordered">
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
                        <button type="button" wire:click="editstokdarah({{ $stokdarah->id }})" class="btn btn-success"
                            data-bs-toggle="modal" data-bs-target="#updatestokdarahModal">
                            <i class='bx bx-edit'></i>
                        </button>
                        <button type="button" wire:click ="deletestokdarah({{ $stokdarah ->id }})" class="btn btn-danger" data-bs-toggle="modal"
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
        <div>
            {{ $stokdarahs->links() }}
        </div>
    </div>
</div>
<!-- end table stok darah -->
