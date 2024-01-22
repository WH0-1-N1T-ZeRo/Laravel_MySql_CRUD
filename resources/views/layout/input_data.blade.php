<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .layout {
        height: 100vh;
        /* overflow-y: hidden; */
    }

    .form-floating {
        margin: 20px 0;
    }

    .card {
        width: 25rem;
    }
</style>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center layout">
        <form action="@yield('Alget')" method="POST">
            @csrf
            <div class="card container pb-3">
                <h4 class="card-title my-3">@yield('title') Data Siswa</h4>
                <div class="card-body">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="Nama" id="nama" placeholder="Fulan" value="@yield('Nama')">
                        <label for="nama">Nama</label>
                    </div>
                    <div class="form-floating">
                        <input type="number" class="form-control" name="Nilai" id="nilai" placeholder="Nilai" value="@yield('Nilai')">
                        <label for="nilai">Nilai</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" name="IdKelas"
                            aria-label="Floating label select example">
                            <option selected>@yield('Kelas')</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect">Kelas</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/siswa" class="btn btn-danger">Canncel</a>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
