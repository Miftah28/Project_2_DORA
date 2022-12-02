<!-- Modal create trsansaksi -->
<div wire:ignore.self class="modal fade" id="createtransaksiModal" tabindex="-1" aria-labelledby="createtransaksiLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createtransaksiModalLabel">Modal Transaksi</h1>
                <button type="button" class="btn-close" wire:click="closemodal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Modal Create Transaksi</h5>
                        <!-- No Labels Form -->
                        <form class="row g-3" wire:submit.prevent="savetransaksi">
                            <div class="col-md-12">
                                <input type="text" wire:model="nama" class="form-control" placeholder="Nama Lengkap">
                                @error('nama')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="number" wire:model="nik" class="form-control" placeholder="NIK">
                                @error('nik')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="number" wire:model="notelp" class="form-control"
                                    placeholder="08xxxxxxxxxx">
                                @error('notelp')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="datetime-local" wire:model="tanggal" class="form-control">
                                @error('tanggal')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="file" wire:model="sk" class="form-control" placeholder="sk">
                                @error('sk')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="number" wire:model="jumlah" class="form-control" placeholder="Jumlah">
                                @error('jumlah')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input type="keterangan" wire:model="keterangan" class="form-control"
                                    placeholder="Keterangan">
                                @error('keterangan')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <select class="form-select form-select-sm" wire:model="status"
                                    aria-label=".form-select-sm example">
                                    <option selected>Proses</option>
                                    <option value="Proses">Proses</option>
                                    <option value="Konfirmasi">Konfirmasi</option>
                                    <option value="Tolak">Tolak</option>
                                </select>
                                @error('status')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" wire:click="closemodal"
                    data-bs-dismiss="modal">Close</button>
                <button type="reset" class="btn btn-warning">Reset</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form><!-- End No Labels Form -->
        </div>
    </div>
</div>
<!-- End Modal create trsansaksi -->

<!-- Modal update trsansaksi -->
<div wire:ignore.self class="modal fade" id="updatetransaksiModal" tabindex="-1"
    aria-labelledby="updatetransaksiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updatetransaksiModalLabel">Modal Trsansaksi</h1>
                <button type="button" class="btn-close" wire:click="closemodal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Modal Update Trsansaksi</h5>
                        <!-- No Labels Form -->
                        <form class="row g-3" wire:submit.prevent="updatetransaksi">
                            <div class="col-md-12">
                                <input type="text" wire:model="name" class="form-control" placeholder="Nama Lengkap">
                                @error('name')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="number" wire:model="nik" class="form-control" placeholder="NIK">
                                @error('nik')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="number" wire:model="notelp" class="form-control"
                                    placeholder="08xxxxxxxxxx">
                                @error('notelp')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="datetime-local" wire:model="tanggal" class="form-control">
                                @error('tanggal')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="file" wire:model="sk" class="form-control" placeholder="sk">
                                @error('sk')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="number" wire:model="jumlah" class="form-control" placeholder="Jumlah">
                                @error('jumlah')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input type="keterangan" wire:model="keterangan" class="form-control"
                                    placeholder="Keterangan">
                                @error('keterangan')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <select class="form-select form-select-sm" wire:model="status"
                                    aria-label=".form-select-sm example">
                                    <option selected>Proses</option>
                                    <option value="Proses">Proses</option>
                                    <option value="Konfirmasi">Konfirmasi</option>
                                    <option value="Tolak">Tolak</option>
                                </select>
                                @error('status')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" wire:click="closemodal"
                    data-bs-dismiss="modal">Close</button>
                <button type="reset" class="btn btn-warning">Reset</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form><!-- End No Labels Form -->
        </div>
    </div>
</div>
<!-- End Modal update trsansaksi -->

<!-- Modal delete trsansaksi -->
<div wire:ignore.self class="modal fade" id="deletetransaksiModal" tabindex="-1"
    aria-labelledby="deletetransaksiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deletetransaksiModalLabel">Modal Trsansaksi</h1>
                <button type="button" class="btn-close" wire:click="closemodal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Modal Delete trsansaksi</h5>
                        <!-- No Labels Form -->
                        <form class="row g-3" wire:submit.prevent="destroytransaksi">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" wire:click="closemodal"
                    data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Delete</button>
            </div>
            </form><!-- End No Labels Form -->
        </div>
    </div>
</div>
<!-- End Modal Delete trsansaksi -->
