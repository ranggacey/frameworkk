<!DOCTYPE html>
<html>
<head>
    <title>Hasil Input</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Data Dosen</h2>
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td class="font-weight-bold">NIM</td>
                                <td>{{ $data['nim'] }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">NAMA</td>
                                <td>{{ $data['nama'] }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">ALAMAT</td>
                                <td>{{ $data['alamat'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
