<div class="card">
    @if (session()->has('message'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @include('livewire.donordarah.modaldatadonor')
    <div class="card-body overflow-auto">
        <h1 class="card-title text-center">DATA DONOR</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary text-center mb-2" data-bs-toggle="modal"
            data-bs-target="#createdatadonorModal">
            <i class='bx bx-plus-circle'></i> Tambah
        </button>
        <input type="search" class="form-control float-end mx-2" wire:model="search" placeholder="Search..."
            style="width: 230px">
        <!-- Bordered Table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center" scope="col">No</th>
                    <th class="text-center" scope="col">Nama Lengkap</th>
                    <th class="text-center" scope="col">Umur/Usia</th>
                    <th class="text-center" scope="col">Golongan Darah</th>
                    <th class="text-center" scope="col">Tensi</th>
                    <th class="text-center" scope="col">Berat Badan</th>
                    <th class="text-center" scope="col">Keterangan</th>
                    <th class="text-center" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @forelse ($datadonors as $no => $datadonor)
                        <th class="text-center">{{ $no + 1 }}</th>
                        <td class="text-center">{{ $datadonor->nama }}</td>
                        <td class="text-center">{{ $datadonor->umur }}</td>
                        <td class="text-center">{{ $datadonor->goldar }}</td>
                        <td class="text-center">{{ $datadonor->tensi }}</td>
                        <td class="text-center">{{ $datadonor->bb }}</td>
                        <td class="text-center">{{ $datadonor->kt }}</td>
                        <td class="text-center">
                            <!-- Button -->
                            <button type="button" wire:click="editdatadonor({{ $datadonor->id }})"
                                class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updatedatadonorModal">
                                <i class='bx bx-edit'></i>
                            </button>
                            <button type="button" wire:click="deletestokdarah({{ $datadonor->id }})"
                                class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletedatadonorModal">
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
            {{ $datadonors->links() }}
        </div>
    </div>
</div>
<!-- end table stok darah -->
