@include('layout.navbar')

@section('content')

@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css>
    <title>Document</title>
</head>
<body>

    <form action="isi" method="POST" enctype="multipart/from-data">
      @method("POST")
      @csrf
    <div class="container">
    <div class="mb-3">
    <label for="fromfile" class="from-label"> bukti foto</label>
    <input type="file" class="form-control" id="formFile" name="foto">
    </div>

    <div class="mb-3">
    <label for="exampleformcontrolTextarea1" class="form-label"> isi laporan</label>
    <textarea class="form-control" id="exampleformcontroltextarea1" nama="isi_laporan" rows="3" required></textarea>
    @error('isi_laporan')
        <div>{{$message}}</div>
    @enderror
    </div>
    <input class="btn btn-primary" type="submit" value="kirim">
    </form>
  </div>


</body>
</html>