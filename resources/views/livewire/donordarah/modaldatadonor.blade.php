<!-- Modal create data donor -->
<div wire:ignore.self class="modal fade" id="createdatadonorModal" tabindex="-1" aria-labelledby="createdatadonorLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createdatadonorModalLabel">Modal kegiatan</h1>
                <button type="button" class="btn-close" wire:click="closemodal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Modal Create kegiatan</h5>
                        <!-- No Labels Form -->
                        <form class="row g-3" wire:submit.prevent="savedatadonor">
                            <div class="col-md-12">
                                <input type="text" wire:model="nama" class="form-control" placeholder="Nama lengkap">
                                @error('nama')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input type="number" wire:model="umur" class="form-control" placeholder="Umur">
                                @error('umur')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <select class="form-select form-select-sm" wire:model="goldar"
                                    aria-label=".form-select-sm example">
                                    <option selected>Golongan Darah</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                                @error('goldar')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" wire:model="tensi" class="form-control" placeholder="Tensi">
                                @error('tensi')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="number" wire:model="bb" class="form-control" placeholder="Berat Badan">
                                @error('bb')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <select class="form-select form-select-sm" wire:model="kt"
                                    aria-label=".form-select-sm example">
                                    <option selected>Daftar</option>
                                    <option value="Daftar">Daftar</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Kondisi tubuh tidak sehat">Kondisi tubuh tidak sehat</option>
                                </select>
                                @error('kt')
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
<!-- End Modal create data donor -->

<!-- Modal update data donor -->
<div wire:ignore.self class="modal fade" id="updatedatadonorModal" tabindex="-1"
    aria-labelledby="updatedatadonorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updatedatadonorModalLabel">Modal kegiatan</h1>
                <button type="button" class="btn-close" wire:click="closemodal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Modal Update data donor</h5>
                        <!-- No Labels Form -->
                        <form class="row g-3" wire:submit.prevent="update">
                            <div class="col-md-12">
                                <input type="text" wire:model="nama" class="form-control" placeholder="Nama lengkap">
                                @error('nama')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input type="number" wire:model="umur" class="form-control" placeholder="Umur">
                                @error('umur')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <select class="form-select form-select-sm" wire:model="goldar"
                                    aria-label=".form-select-sm example">
                                    <option selected>Golongan Darah</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                                @error('goldar')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" wire:model="tensi" class="form-control" placeholder="Tensi">
                                @error('tensi')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="number" wire:model="bb" class="form-control"
                                    placeholder="Berat Badan">
                                @error('bb')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <select class="form-select form-select-sm" wire:model="kt"
                                    aria-label=".form-select-sm example">
                                    <option selected>Daftar</option>
                                    <option value="Daftar">Daftar</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Kondisi tubuh tidak sehat">Kondisi tubuh tidak sehat</option>
                                </select>
                                @error('kt')
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
<!-- End Modal update data donor -->
