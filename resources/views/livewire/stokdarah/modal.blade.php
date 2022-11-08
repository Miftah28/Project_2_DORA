<!-- Modal create stok darah -->
<div wire:ignore.self class="modal fade" id="createstokdarahModal" tabindex="-1" aria-labelledby="createstokdarahLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createstokdarahModalLabel">Modal Stok Darah</h1>
                <button type="button" class="btn-close" wire:click="closemodal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Modal Create Stok darah</h5>
                        <!-- No Labels Form -->
                        <form class="row g-3" wire:submit.prevent="savestokdarah">
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
                                <input type="number" wire:model="wb" class="form-control" placeholder="Whole Blood">
                                @error('wb')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="number" wire:model="prc" class="form-control"
                                    placeholder="Package Red Cell">
                                @error('prc')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="number" wire:model="t" class="form-control" placeholder="Trombocyte">
                                @error('t')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="number" wire:model="ffp" class="form-control"
                                    placeholder="Fresh Frozen Plasma">
                                @error('ffp')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="datetime-local" wire:model="tglupdatestok" class="form-control">
                                @error('tglupdatestok')
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
<div wire:ignore.self class="modal fade" id="updatestokdarahModal" tabindex="-1"
    aria-labelledby="updatestokdarahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updatestokdarahModalLabel">Modal Stok Darah</h1>
                <button type="button" class="btn-close" wire:click="closemodal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Modal Update Stok darah</h5>
                        <!-- No Labels Form -->
                        <form class="row g-3" wire:submit.prevent="updatestokdarah">
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
                                <input type="number" wire:model="wb" class="form-control" placeholder="Whole Blood">
                                @error('wb')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="number" wire:model="prc" class="form-control"
                                    placeholder="Package Red Cell">
                                @error('prc')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="number" wire:model="t" class="form-control" placeholder="Trombocyte">
                                @error('t')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="number" wire:model="ffp" class="form-control"
                                    placeholder="Fresh Frozen Plasma">
                                @error('ffp')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="datetime-local" wire:model="tglupdatestok" class="form-control">
                                @error('tglupdatestok')
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
<div wire:ignore.self class="modal fade" id="deletestokdarahModal" tabindex="-1"
    aria-labelledby="deletestokdarahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deletestokdarahModalLabel">Modal Stok Darah</h1>
                <button type="button" class="btn-close" wire:click="closemodal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Modal Update Stok darah</h5>
                        <!-- No Labels Form -->
                        <form class="row g-3" wire:submit.prevent="destroystokdarah">

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
