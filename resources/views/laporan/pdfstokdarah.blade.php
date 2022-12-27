<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <div class="h1 pb-2 mb-4 border-bottom border-dark text-center">
            LAPORAN DATA STOK DARAH
        </div>
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
                                class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updatestokdarahModal">
                                <i class='bx bx-edit'></i>
                            </button>
                            <button type="button" wire:click="deletestokdarah({{ $stokdarah->id }})"
                                class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletestokdarahModal">
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
