@extends('layouts.app')
@section('content')

<div class="container">
    <form action="/komparem/{{$komparem->id}}" method="POST">

     <h1 class="title">Edit Data {{$komparem->name}} ( Komparem ) </h1>

        @method('put')
        @csrf




        <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nameInput" class="form-label">Name:</label>
                    <input type="text" name="name" id="nameInput" class="form-control" placeholder="name" value="{{$komparem->name}}" style="background-color:black; color:white;">
                </div>

                <div class="col-md-6 mb-3">
                   <label for="umurInput" class="form-label">Nama Ayah:</label>
                   <input type="text" name="nama_ayah" id="umurInput" class="form-control" placeholder="Nama Ayah" value="{{$komparem->nama_ayah}}" style="background-color:black; color:white;">
                </div>
            </div>






        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="tanggalLahirInput" class="form-label">Tanggal Lahir:</label>
                <input type="text" name="tanggal_lahir" id="tanggalLahirInput" class="form-control" placeholder="tanggal lahir" value="{{$komparem->tanggal_lahir}}" style="background-color:black; color:white;">
            </div>
            <div class="col-md-6 mb-3">
                   <label for="umurInput" class="form-label">Nama Ibu:</label>
                   <input type="text" name="nama_ibu" id="umurInput" class="form-control" placeholder="Nama Ayah" value="{{$komparem->nama_ibu}}" style="background-color:black; color:white;">
                </div>
        </div>


        <br>
        <hr  style="color:white;">
        <br>




        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="umurInput" class="form-label">Umur:</label>
                <input type="text" name="umur" id="umurInput" class="form-control" placeholder="umur" value="{{$komparem->umur}}" style="background-color:black; color:white;">
            </div>
            <div class="col-md-6 mb-3">
                <label for="genderSelect" class="form-label">Gender:</label>
                <select name="jenis_kelamin" id="genderSelect" class="form-select" aria-label="Default select example" style="background-color:black; color:white;">
                    <option value="Pria" @if($komparem->jenis_kelamin == "Pria") selected @endif>Pria</option>
                    <option value="Perempuan" @if($komparem->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
                </select>
            </div>
        </div>









        <div class="row">

           <div class="col-md-6 mb-3">
                <label for="floatingTextarea" class="form-label">Tempat Tinggal:</label>
             <div class="form-floating">
               <textarea name="tempat_tinggal" class="form-control" placeholder="alamat" id="floatingTextarea" style="background-color:black; color:white;">{{$komparem->tempat_tinggal}}</textarea>
             </div>
            </div>

           <div class="col-md-6 mb-3">
             <label for="genderSelect" class="form-label">Nomor Handphone :</label>
             <input type="text" name="no_hp" id="umurInput" class="form-control" placeholder="Nomor Handphone" value="{{$komparem->no_hp}}" style="background-color:black; color:white;">


            </div>
        </div>

        <br>
        <hr  style="color:white;">
        <br>




        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="baptisSelect" class="form-label">Baptis:</label>
                <select name="baptis" id="baptisSelect" class="form-select" aria-label="Default select example" style="background-color:black; color:white;">
                    <option value="sudah" @if($komparem->baptis == "sudah") selected @endif>sudah</option>
                    <option value="belum" @if($komparem->baptis == "belum") selected @endif>belum</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="wilayahSelect" class="form-label">Wilayah:</label>
                <select name="wilayah" id="wilayahSelect" class="form-select" aria-label="Default select example" style="background-color:black; color:white;">
                    <option value="1" @if($komparem->wilayah == "1") selected @endif>1</option>
                    <option value="2" @if($komparem->wilayah == "2") selected @endif>2</option>
                    <option value="3" @if($komparem->wilayah == "3") selected @endif>3</option>
                    <option value="4" @if($komparem->wilayah == "4") selected @endif>4</option>
                </select>
            </div>
        </div>



        <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="baptisSelect" class="form-label">pelayanan :</label>
                    <select name="pelayanan" id="pelayananSelect" class="form-select" aria-label="Default select example" style="background-color:black; color:white;">
                        <option value="wl" @if($komparem->pelayanan == "wl") selected @endif >Wl</option>
                        <option value="singer" @if($komparem->pelayanan == "singer") selected @endif>Singer</option>
                        <option value="musik" @if($komparem->pelayanan == "musik")selected @endif>Musik</option>
                        <option value="mulmed" @if($komparem->pelayanan == "mulmed") selected @endif>Mulmed</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="wilayahSelect" class="form-label">Ukuran Baju:</label>
                    <select name="ukuran_baju" id="wilayahSelect" class="form-select" aria-label="Default select example" style="background-color:black; color:white;">
                        <option value="S" @if($komparem->ukuran_baju == "S" ) selected @endif>S</option>
                        <option value="M"  @if($komparem->ukuran_baju == "M") selected @endif>M</option>
                        <option value="L"  @if($komparem->ukuran_baju == "L") selected @endif>L</option>
                        <option value="XL"  @if($komparem->ukuran_baju == "XL") selected @endif>XL</option>
                        <option value="XXL"  @if($komparem->ukuran_baju == "XXL") selected @endif>XXL</option>
                    </select>
                </div>
            </div>

        <input type="submit" name="submit" value="Submit" class="btn btn-outline-primary">
    </form>
</div>

@endsection
