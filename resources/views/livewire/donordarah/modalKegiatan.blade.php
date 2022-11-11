<!-- Modal create kegiatan -->
<div wire:ignore.self class="modal fade" id="createkegiatanModal" tabindex="-1" aria-labelledby="createkegiatanLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createkegiatanModalLabel">Modal kegiatan</h1>
                <button type="button" class="btn-close" wire:click="closemodal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Modal Create kegiatan</h5>
                        <!-- No Labels Form -->
                        <form class="row g-3" wire:submit.prevent="savekegiatan">
                            <div class="col-md-12">
                                <input type="text" wire:model="tempat" class="form-control"
                                    placeholder="Tempat Kegiatan">
                                @error('tempat')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="number" wire:model="target" class="form-control" placeholder="Target">
                                @error('target')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="datetime-local" wire:model="tglkegiatan" class="form-control">
                                @error('tglkegiatan')
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
<!-- End Modal create kegiatan -->

<!-- Modal update kegiatan -->
<div wire:ignore.self class="modal fade" id="updatekegiatanModal" tabindex="-1"
    aria-labelledby="updatekegiatanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updatekegiatanModalLabel">Modal kegiatan</h1>
                <button type="button" class="btn-close" wire:click="closemodal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Modal Update kegiatan</h5>
                        <!-- No Labels Form -->
                        <form class="row g-3" wire:submit.prevent="updatekegiatan">
                            <div class="col-md-12">
                                <input type="text" wire:model="tempat" class="form-control"
                                    placeholder="Tempat Kegiatan">
                                @error('tempat')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="number" wire:model="target" class="form-control"
                                    placeholder="Whole Blood">
                                @error('target')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="datetime-local" wire:model="tglkegiatan" class="form-control">
                                @error('tglkegiatan')
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
<!-- End Modal update kegiatan -->

<!-- Modal delete kegiatan -->
<div wire:ignore.self class="modal fade" id="deletekegiatanModal" tabindex="-1"
    aria-labelledby="deletekegiatanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deletekegiatanModalLabel">Modal kegiatan</h1>
                <button type="button" class="btn-close" wire:click="closemodal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Modal Update kegiatan</h5>
                        <!-- No Labels Form -->
                        <form class="row g-3" wire:submit.prevent="destroykegiatan">

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
<!-- End Modal Delete kegiatan -->
