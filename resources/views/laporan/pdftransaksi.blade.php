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
            LAPORAN DATA TRANSAKSI
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center" scope="col">No</th>
                    <th class="text-center" scope="col">Nama Lengkap</th>
                    <th class="text-center" scope="col">NIK</th>
                    <th class="text-center" scope="col">No Telepon</th>
                    <th class="text-center" scope="col">Tanggal</th>
                    <th class="text-center" scope="col">Jumlah Katong Darah</th>
                    <th class="text-center" scope="col">Keterangan</th>
                    <th class="text-center" scope="col">Status</th>
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
                        <td class="text-center">{{ $transaksi->jumlah }}</td>
                        <td class="text-center">{{ $transaksi->keterangan }}</td>
                        <td class="text-center">{{ $transaksi->status }}</td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="10">No Record Found</td>
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
