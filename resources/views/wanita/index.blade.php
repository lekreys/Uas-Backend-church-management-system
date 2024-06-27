@extends('layouts.app')
@section('content')

<div class="container">

<h1 class="title">Anggota Komisi Wanita Gereja Pouk Bojong Indah</h1>
<hr  style="color:white;">


<div class="fitur" style="display:flex">

<a href="/wanita/create"><button type="button" class="btn btn-outline-success">Tambah Anggota Komisi Wanita</button></a>

    <!-- Form Pencarian dan Filter di Pojok Kanan Atas -->
    <div style="text-align: right; margin-left:35%; margin-bottom: 20px;">
        <form method="GET" action="{{ route('wanita.search') }}" style="display: inline-block;">
            <input type="text" name="search" placeholder="Search by name" style="padding: 5px; width: 200px; margin-right:10px ; background-color:black ; color:white ; border:.5px solid white ; border-radius:7px">
            <select name="wilayah" style="padding: 5px; background-color:black ; color : white ;  margin-right:10px;  border-radius:7px">
                <option value="">Select Wilayah</option>
                <option value="1">Wilayah 1</option>
                <option value="2">Wilayah 2</option>
                <option value="3">Wilayah 3</option>
                <option value="4">Wilayah 4</option>
            </select>
            <select name="jenis_suara" style="padding: 5px; background-color:black ; color : white ;  margin-right:10px;  border-radius:7px">
                <option value="">Select seara type</option>
                <option value="suara 1">suara 1</option>
                <option value="suara 2">suara 2</option>
                <option value="suara 3">suara 3</option>
            </select>
            <button type="submit" class="btn btn-outline-primary" style="margin-bottom:2px">Search</button>
        </form>
    </div>


</div>

<table class="table-custom">
    <tr style="border-top : 1px white solid; border-bottom :  1px white solid">
    
        <th>id</th>
        <th>name</th>
        <th>tanggal_lahir</th>
        <th>umur</th>
        <th>wilayah</th>
        <th>jenis suara</th>
        <th>Nama Suami</th>
        <th>AKSI</th>
        
    </tr>

    @foreach($wanita as $u)

        <tr style="border-bottom :  1px white solid">

        
            <td>{{$u ->id}}</td>
            <td>{{$u->name}}</td>
            <td>{{$u->tanggal_lahir}}</td>
            <td>{{$u ->umur}}</td>
            <td>{{$u->wilayah}}</td>
            <td>{{$u->jenis_suara}}</td>
            <td>{{$u->nama_suami}}</td>

            <td>
                <a href="/wanita/{{$u->id}}/edit">edit</a>

                <form action="/wanita/{{$u->id}}" method="POST">
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
