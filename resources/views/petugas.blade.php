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
        <th>id petugas</th>
        <th>nama</th>
        <th>username</th>
        <th>password</th>
        <th>telp</th>
        <th>level</th>
    </tr>


@foreach ($petugas as $petugas)
 <tr>
    <td>{{$petugas->id_petugas}}</td>
    <td>{{$petugas->nama_petugas}}</td>
    <td>{{$petugas->username}}</td>
    <td>{{$petugas->password}}</td>
    <td>{{$petugas->telp}}</td>
 </tr>
@endforeach
</body>
</html>