<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('/css/main.css')}}">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="/add/proses" enctype="multipart/form-data">
        {{ csrf_field() }}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="form-group">
            <label>Nama </label>
            <input type="text" class="form-control" name="Nama">
        </div>
        <!-- <div class="form-group">
                            <label>Sekolah</label>
                            <input type="text" class="form-control" name="Sekolah">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <div class="description">
                                <input type="text" name="Alamat" class="form-control">
                            </div>
                        </div> -->
        <div class="form-group">
            <label>Email</label>
            <div class="description">
                <input type="text" name="Email" class="form-control">
            </div>
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">FIle</span>
            </div>
            <div class="custom-file">
                <input type="file" id="inputGroupFile01" name="file_">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" id="login">Submit</button>
    </form>
</body>

</html>
