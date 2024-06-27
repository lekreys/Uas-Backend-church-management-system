@extends('layouts.app')
@section('content')

<div class="container">

<h1 class="title">Jemaat Gereja Pouk Bojong Indah</h1>
<hr  style="color:white;">


<div class="fitur" style="display:flex">


<a href="/umum/create"><button type="button" class="btn  btn-outline-success">Tambah Jemaat Umum</button></a>

<!-- Form Pencarian dan Filter di Pojok Kanan Atas -->
<div style="text-align: right; margin-left:28%; margin-bottom: 20px;">

    <form method="GET" action="{{ route('umum.search') }}" style="display: inline-block;">

        <input type="text" name="search" placeholder="Search by name" style="padding: 5px; width: 200px; margin-right:10px ; background-color:black ; color:white ; border:.5px solid white ; border-radius:7px">

        <select name="wilayah" style="padding: 5px; background-color:black ; color : white ;  margin-right:10px;  border-radius:7px">
            <option value="">Select Wilayah</option>
            <option value="1">Wilayah 1</option>
            <option value="2">Wilayah 2</option>
            <option value="3">Wilayah 3</option>
            <option value="4">Wilayah 4</option>
        </select>
        <select name="baptis" style="padding: 5px; background-color:black ; color : white ;  margin-right:10px;  border-radius:7px">
            <option value="">selcet baptis status</option>
            <option value="sudah"> sudah</option>
            <option value="belum"> belum</option>

        </select>
        <select name="jenis_kelamin" style="padding: 5px; background-color:black ; color : white ;  margin-right:10px;  border-radius:7px">
            <option value="">selcet Gender</option>
            <option value="Pria"> Pria</option>
            <option value="Perempuan"> Perempuan</option>

        </select>
        <button type="submit" class="btn btn-outline-primary" style="margin-bottom:2px">Search</button>
    </form>
</div>


</div>
<table class=" table-custom ">
    <tr style="border-top : 1px white solid; border-bottom :  1px white solid">
    
        <th>id</th>
        <th>name</th>
        <th>tanggal_lahir</th>
        <th>umur</th>
        <th>jenis kelamin</th>
        <th>wilayah</th>
        <th>tempat tinggal</th>
        <th>baptis</th>
        <th>AKSI</th>
        
    </tr>

    @foreach($umum as $u)

        <tr style="border-bottom :  1px white solid">

        
            <td>{{$u ->id}}</td>
            <td>{{$u->name}}</td>
            <td>{{$u->tanggal_lahir}}</td>
            <td>{{$u ->umur}}</td>
            <td>{{$u->jenis_kelamin}}</td>
            <td>{{$u->wilayah}}</td>
            <td>{{$u->tempat_tinggal}}</td>
            <td>{{$u->baptis}}</td>

            <td>
                <a href="/umum/{{$u->id}}/edit">edit</a>

                <form action="/umum/{{$u->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="delete">
                </form>
        
        
            </td>
            
            
            
        </tr>
    @endforeach
</table>


</div>
@endsection

