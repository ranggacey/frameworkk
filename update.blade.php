<html>

<head>
    <title>Create Data Mahasiswa</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container nt-4">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                UPDATE Data Mahasiswa
            </div>
            <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('edit')}}">
                    @csrf
                    <div class="form-group">
                        NIM
                        <input type=" text" id="nim" name="nim" class="form-control" required="" value="{{$data->nim}}" readonly>
                    </div>
                        NAMA
                    <div class="form-group">
                        <input type="text" id="nama" name="nama" class="form-control" required="" value="{{$data->nama}}">
                    </div>
                    UMUR
                    <div class="form-group">
                        <input type="text" id="umur" name="umur" class="form-control" required="" value="{{$data->umur}}">
                    </div>
                    EMAIL
                    <div class="form-group">
                        <input type="text" id="email" name="email" class="form-control" required="" value="{{$data->email}}">
                    </div>
                    <div class="form-group">
                        ALAMAT
                        <textarea name="alamat" class="form-control" required=""> {{$data->alamat}} </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </d1v>
            </div>
        </div>
</body>

</html>