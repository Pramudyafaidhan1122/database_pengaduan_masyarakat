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


<br>
<br>

<div class="container">
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NIK</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Isi Laporan</th>
                
            </tr>
        </thead>
        <tbody>

     

            <tr>
                {{$laporan->isi_laporan}}
                {{$laporan->tgl_pengaduan}}
                {{$laporan->nik}}
               
            </tr>

   

        </tbody>
    </table>
   
</div>

<ul class="navbar-nav" style="margin-left: 58%;">
    <li class="nav-item">
        <a class="btn btn-primary" href="{{ url('') }}">Edit</a>
    </li>
</ul>

@endsection
   


</body>
</html>