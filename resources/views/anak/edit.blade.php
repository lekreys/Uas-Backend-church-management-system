@extends('layouts.app')
@section('content')

<div class="container">

    
    <form action="/anak/{{$anak->id}}" method="POST">

      <h1 class="title">Edit Data {{$anak->name}} ( Sekolah minggu )</h1>

        @method('put')

        @csrf
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nameInput" class="form-label">Name:</label>
                    <input type="text" name="name" id="nameInput" class="form-control" placeholder="name" value="{{$anak->name}}" style="background-color:black; color:white;">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tanggalLahirInput" class="form-label">Nama Ibu:</label>
                    <input type="text" name="nama_ibu" id="tanggalLahirInput" class="form-control" placeholder="tanggal lahir" value="{{$anak->nama_ibu}}" style="background-color:black; color:white;">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="umurInput" class="form-label">Umur:</label>
                    <input type="text" name="umur" id="umurInput" class="form-control" placeholder="umur" value="{{$anak->umur}}" style="background-color:black; color:white;">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tanggalLahirInput" class="form-label">Tanggal Lahir:</label>
                    <input type="text" name="tanggal_lahir" id="tanggalLahirInput" class="form-control" placeholder="tanggal lahir" , value="{{$anak->tanggal_lahir}}" style="background-color:black; color:white;">
                </div>

            </div>

            <br>
            <hr  style="color:white">
            <br>

            <div class="mb-3">
                <label for="floatingTextarea" class="form-label">Alamat:</label>
                <div class="form-floating">
                    <textarea name="alamat" class="form-control" placeholder="alamat" id="floatingTextarea" style="background-color:black; color:white;">{{$anak->alamat}}</textarea>
                </div>

                <br>
            <hr style="color:white">
            <br>   


            <div class="row">
                
                <div class="col-md-6 mb-3">
                    <label for="wilayahSelect" class="form-label">Wilayah:</label>
                   <select name="wilayah" id="wilayahSelect" class="form-select" aria-label="Default select example" style="background-color:black; color:white;">
                      <option value="1" @if($anak->wilayah == "1") selected @endif>1</option>
                      <option value="2" @if($anak->wilayah == "2") selected @endif>2</option>
                      <option value="3" @if($anak->wilayah == "3") selected @endif>3</option>
                      <option value="4" @if($anak->wilayah == "4") selected @endif>4</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="wilayahSelect" class="form-label">Jabatan:</label>
                    <select name="jabatan" id="wilayahSelect" class="form-select" aria-label="Default select example" style="background-color:black; color:white;">
                        <option value="AS"  @if($anak->jabatan == "AS") selected @endif>AS</option>
                        <option value="ASM"  @if($anak->jabatan == "ASM") selected @endif>ASM</option>
                        <option value="GSM"  @if($anak->jabatan == "GSM") selected @endif>GSM</option>
                    </select>
                </div>

                
            </div>

            </div>


            


            <input type="submit" name="submit" value="Submit" class="btn btn-outline-primary">
        </div>
    </form>
</div>
@endsection
