<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center md-4 fw-bold">Data Siswa</h1>
    <a href="/TDataSiswa" class="btn btn-success m-3">Create <i class="bi bi-plus"></i></a>
    @if ($message=Session::get('success'))
    <div class="alert alert-success d-flex justify-content-between" role="alert">
        <div>{{ $message }}</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nilai</th>
                <th scope="col">Kelas</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @php
                $nomor=1;
            @endphp
            @foreach ($data as $row)
                <tr>
                    <th scope="row">{{ $nomor++ }}</th>
                    <td>{{ $row->Nama }}</td>
                    <td>{{ $row->Nilai }}</td>
                    <td>{{ $row->IdKelas }}</td>
                    <td>
                        <a href="/BackData/{{ $row->id }}" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                        <a href="/Delete/{{ $row->id }}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
