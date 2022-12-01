<!-- Modal create stok darah -->
<div wire:ignore.self class="modal fade" id="createmasyarakatModal" tabindex="-1" aria-labelledby="createmasyarakatLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createmasyarakatModalLabel">Modal MASYARAKAT</h1>
                <button type="button" class="btn-close" wire:click="closemodal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Modal Create Masyarakat</h5>
                        <!-- No Labels Form -->
                        <form class="row g-3" wire:submit.prevent="savemasyarakat">
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
                            <div class="col-md-12">
                                <input type="text" wire:model="alamat" class="form-control" placeholder="alamat">
                                @error('alamat')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input type="email" wire:model="email" class="form-control"
                                    placeholder="asda@asda.com">
                                @error('email')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input type="password" wire:model="password" class="form-control" placeholder="{{ __('Password') }}">
                                @error('password')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input type="text" wire:model="role" class="form-control"
                                    placeholder="0 or 1">
                                @error('role')
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
<!-- End Modal create stok darah -->

<!-- Modal update stok darah -->
<div wire:ignore.self class="modal fade" id="updatemasyarakatModal" tabindex="-1"
    aria-labelledby="updatemasyarakatModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updatemasyarakatModalLabel">Modal Stok Darah</h1>
                <button type="button" class="btn-close" wire:click="closemodal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Modal Update Stok darah</h5>
                        <!-- No Labels Form -->
                        <form class="row g-3" wire:submit.prevent="updatemasyarakat">
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
                            <div class="col-md-12">
                                <input type="text" wire:model="alamat" class="form-control" placeholder="alamat">
                                @error('alamat')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input type="email" wire:model="email" class="form-control"
                                    placeholder="asda@asda.com">
                                @error('email')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input type="password" wire:model="password" class="form-control" placeholder="{{ __('Password') }}">
                                @error('password')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input type="text" wire:model="role" class="form-control"
                                    placeholder="0 or 1">
                                @error('role')
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
<!-- End Modal update stok darah -->

<!-- Modal delete stok darah -->
<div wire:ignore.self class="modal fade" id="deletemasyarakatModal" tabindex="-1"
    aria-labelledby="deletemasyarakatModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deletemasyarakatModalLabel">Modal Stok Darah</h1>
                <button type="button" class="btn-close" wire:click="closemodal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Modal Update Stok darah</h5>
                        <!-- No Labels Form -->
                        <form class="row g-3" wire:submit.prevent="destroymasyarakat">

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
<!-- End Modal Delete stok darah -->
