@extends('layouts.app')
@section('content')

<div class="container">


<h1 class="title">Anggota Komisi Sekolah Minggu Pouk Bojong Indah</h1>
<hr  style="color:white;">


<div class="fitur" style="display:flex">


<a href="/anak/create"><button type="button" class="btn btn-outline-success">Tambah Anggota Sekolah Minggu</button></a>

<!-- Form Pencarian dan Filter di Pojok Kanan Atas -->
<div style="text-align: right; margin-left:50%; margin-bottom: 20px;">
    <form method="GET" action="{{ route('anak.search') }}" style="display: inline-block;">
        <input type="text" name="search" placeholder="Search by name" style="padding: 5px; width: 200px; margin-right:10px ; background-color:black ; color:white ; border:.5px solid white ; border-radius:7px">
        <select name="wilayah" style="padding: 5px; background-color:black ; color : white ;  margin-right:10px;  border-radius:7px">
            <option value="">all</option>
            <option value="AS">AS</option>
            <option value="ASM">ASM</option>
            <option value="GSM">GSM</option>
        </select>
        <button type="submit" class="btn btn-outline-primary" style="margin-bottom:2px">Search</button>
    </form>
</div>


</div>

<table class="table-custom">
    <tr  style="border-top : 1px white solid; border-bottom :  1px white solid">
    
        <th>id</th>
        <th>name</th>
        <th>Jabatan</th>
        <th>tanggal_lahir</th>
        <th>umur</th>
        <th>wilayah</th>
        <th>nama ibu</th>
        <th>Alamat</th>
        <th>AKSI</th>
        
    </tr>

    @foreach($anak as $u)

        <tr style="border-bottom :  1px white solid">

        
            <td>{{$u ->id}}</td>
            <td>{{$u->name}}</td>
            <td>{{$u->jabatan}}</td>
            <td>{{$u->tanggal_lahir}}</td>
            <td>{{$u ->umur}}</td>
            <td>{{$u->wilayah}}</td>
            <td>{{$u->nama_ibu}}</td>
            <td>{{$u->alamat}}</td>

            <td>
                <a href="/anak/{{$u->id}}/edit">edit</a>

                <form action="/anak/{{$u->id}}" method="POST">
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
