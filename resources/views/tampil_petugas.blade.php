<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>


    
@extends('layout.app')

@section('content')

<br>
<br>
<br>
<br>

    
    <div class="container">
    
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Level</th>
                </tr>
            </thead>
            <tbody>

            @foreach($tampilpetugas as $petugas)

                <tr>
                    <td scope="col" > {{$petugas->id_petugas}} </td>
                    <td scope="col" > {{$petugas->nama_petugas}} </td>
                    <td scope="col" > {{$petugas->username}} </td>
                    <td scope="col" > {{$petugas->telp}} </td>
                    <td scope="col" > {{$petugas->level}} </td>
                    
                </tr>

            @endforeach

            </tbody>
        </table>



        
            <div class="container-fluid">
    
                        <ul class="navbar-nav" style="margin-left: 73%;">
                            <li class="nav-item">
                                <a class="btn btn-primary" href="{{ url('daftar') }}">+</a>
                            </li>
                        </ul>
                        
                    </div>
            </div>
        


        
   
</div>

@endsection
   


</body>
</html>