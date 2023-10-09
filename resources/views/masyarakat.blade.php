@include('layout.navbar')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table class="center" border="1">
    <tr>
        <th>nik</th>
        <th>nama</th>
        <th>username</th>
        <th>password</th>
        <th>telp</th>
    </tr>


@foreach ($masyarakat as $masyarakat)
 <tr>
    <td>{{$masyarakat->nik}}</td>
    <td>{{$masyarakat->nama}}</td>
    <td>{{$masyarakat->username}}</td>
    <td>{{$masyarakat->password}}</td>
    <td>{{$masyarakat->telp}}</td>
 </tr>
@endforeach
</body>
</html>
    