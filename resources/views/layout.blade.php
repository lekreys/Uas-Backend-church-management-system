@extends('layouts.app')

@section('content')

<h1 style="color:white ; margin-left:5%">Dashboard</h1>
<hr style="color:white;">

<div class="about" style="background-color:black; display:flex ; width:100%">

    <div class="image" style="background-color:pink ; margin-left:5% ; margin-top:4%; width:90%" >
        <img src="{{ asset('images/logo.jpeg') }}" alt="" style=" width:100%; height:100%;">
    </div>

    <div class="penjelasan" style="background-color:black;  margin-left:3%; margin-top:5%">
        <div class="title">
            <h1  style="border-bottom : 1px white solid; width:80%">GEREJA POUK BOJONG INDAH</h1>
        </div>

        <div class="title" style="margin-top:5% ; width:80%">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas expedita quia vitae sunt veritatis, corrupti dolor alias? Id maiores, aspernatur nam, perspiciatis perferendis, quasi voluptate ullam ex omnis commodi praesentium!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit odit dolores laboriosam nemo nostrum cumque, labore in adipisci perferendis excepturi. Accusamus, architecto dolorem molestias necessitatibus earum officiis illum nulla culpa.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente tempore ducimus ullam. Ducimus dolorum dolor cupiditate at praesentium quae deleniti, repudiandae sit, provident rerum numquam harum iure vero? Quos, distinctio!
        </div>
        
    </div>


</div>

<div class="outer" style="background-color:black ; width : 60%; margin-left:20% ;  border :1px white solid; margin-top:12%">

 <div class="hideline" style="border :1px white solid;">

    <h3 style="margin: 2% 2% 2% 2% ;color:white"> Management data</h3>
 </div>

    <div class="countainer" style="display:flex ; width:90% ;margin-left:5% ; margin-top:4%;">


        <div class="card" style="width: 18rem; background-color:black; color : white; border :1px white solid ; margin-left:2%">
        <img class="card-img-top" src="{{ asset('images/umum.jpeg') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Umum</h5>
            <p class="card-text">Anggota Jemaat Gereja Pouk Bojong Indah , yang berkomisi maupun tidak berkomisi</p>
            <a href="/umum" class="btn btn-outline-primary">Go to Umum</a>
        </div>
        </div>

        <div class="card" style="width: 18rem; background-color:black; color : white; border :1px white solid ; margin-left:2%">
        <img class="card-img-top" src="{{ asset('images/komparem.jpeg') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Komparem</h5>
            <p class="card-text">komparem adalah kependekan dari pemuda dan remaja yang berkomisi di gereja pouk bojong indah</p>
            <a href="/komparem" class="btn btn-outline-info">Go to Komparem</a>
        </div>
        </div>

        <div class="card" style="width: 18rem; background-color:black; color : white; border :1px white solid ; margin-left:2%">
        <img class="card-img-top" src="{{ asset('images/sm.jpeg') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Sekolah Minggu</h5>
            <p class="card-text">semua bagian dari sekolah minggu terdapat Anak sekolah minggu , guru dan assisten yang berda di pouk bi</p>
            <a href="/anak" class="btn btn-outline-warning">Go To SM</a>
        </div>
        </div>


    </div>
    <div class="countainer" style="display:flex ; width:90% ;margin-left:5% ;margin-top: 2% ;  margin-bottom:4%;">


        <div class="card" style="width: 18rem; background-color:black; color : white; border :1px white solid ; margin-left:2%">
        <img class="card-img-top" src="{{ asset('images/pria.jpeg') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Komisi Pria</h5>
            <p class="card-text">Komisi yang hanya terdiri dari Pria atau bapak-bapak yang terdapat di gereja pouk bojong indah</p>
            <a href="/pria" class="btn btn-outline-danger">Go to Pria</a>
        </div>
        </div>

        <div class="card" style="width: 18rem; background-color:black; color : white; border :1px white solid ; margin-left:2%">
        <img class="card-img-top" src="{{ asset('images/wanita.jpeg') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Komisi Wanita</h5>
            <p class="card-text">Komisi yang hanya terdiri dari Wanita atau ibu-ibu yang terdapat di gereja pouk bojong indah</p>
            <a href="/wanita" class="btn btn-outline-secondary">Go to Wanita</a>
        </div>
        </div>

        <div class="card" style="width: 18rem; background-color:black; color : white; border :1px white solid ; margin-left:2%">
        <img class="card-img-top" src="{{ asset('images/download.jpeg') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Penginjilan</h5>
            <p class="card-text">Komisi yang terdiri dari anggota komisi lain yang berfokus untuk mendatangkan jiwa baru</p>
            <a href="/penginjilan" class="btn btn-outline-success">Go to penginjilan</a>
        </div>
        </div>


    </div>

</div>


<div class="jadwal" style="background-color:black;  margin-left:0%; margin-top:3%">

<h1 style="color:white; margin-bottom:2%; margin-left:3%">Jadwal Ibadah</h1>

<div class="container">



<table class="table table-striped table-hover table-bordered">
    <tr style="border-top : 1px white solid; border-bottom :  1px white solid ;">
    
        <th>id</th>
        <th>Komisi</th>
        <th>hari_tanggal</th>
        <th>pukul</th>
        <th>pelayan_firman</th>
        <th>tempat</th>
        <th>action</th>
        
    </tr>

    @foreach($jadwal as $u)

        <tr style="border-bottom :  1px white solid">

        
            <td>{{$u ->id}}</td>
            <td>{{$u->Komisi}}</td>
            <td>{{$u->hari_tanggal}}</td>
            <td>{{$u ->pukul}}</td>
            <td>{{$u->pelayan_firman}}</td>
            <td>{{$u->tempat}}</td>


            <td>
                <form action="/jadwal/{{$u->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="delete">
                </form>
        
            </td>
            
            
            
        </tr>
    @endforeach
</table>

<a href="/jadwal/create"><button type="button" class="btn  btn-outline-success">Tambah Jadwal</button></a>






</div>

</div>


@endsection
