


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<body>
  


    <!-- <a href="{{ url('home.com') }}">Home</a>
    <a href="{{ url('about.com') }}">About</a>
    <a href="{{ url('login.com') }}">Login</a> -->


<!-- navbar -->
  


@extends('layout.app')

@section('content')


<br>
<br>
<br>
<br>
<h1 style="text-align: center;"> {{$text_judul}} </h1>

<br>
<br>

<div class="container">
    
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Isi Laporan</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>

            @foreach($tampil_pengaduan as $pengaduan)

                <tr>
                    <td scope="col" > {{$pengaduan->id_pengaduan}} </td>
                    <td scope="col" > {{$pengaduan->nik}} </td>
                    <td scope="col" > {{$pengaduan->isi_laporan}} </td>
                    <td scope="col" ><img src="{{$pengaduan->foto}}"></td>
                    <td scope="col" > {{$pengaduan->tgl_pengaduan}} </td>
                    <td scope="col" > {{$pengaduan->status}} </td>
                    
                        <td> <a class="btn btn-danger" href="delet/{{$pengaduan->id_pengaduan}}">Delete</a></td>
                        <td> <a class="btn btn-primary" href="detail/{{$pengaduan->id_pengaduan}}">Detail</a></td>
                </tr>

            @endforeach

            </tbody>
        </table>
   
</div>

@endsection
   


</body>
</html>