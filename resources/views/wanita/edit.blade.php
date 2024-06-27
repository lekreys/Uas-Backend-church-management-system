@extends('layouts.app')
@section('content')

<div class="container">

    
    <form action="/wanita/{{$wanita->id}}" method="POST">
        @method('put')

        <h1 class="title">Edit Data {{$wanita->name}} ( Komisi Wanita ) </h1>


        @csrf
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nameInput" class="form-label">Name:</label>
                    <input type="text" name="name" id="nameInput" class="form-control" placeholder="name" value="{{$wanita->name}}" style="background-color:black; color:white;">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tanggalLahirInput" class="form-label">nama suami:</label>
                    <input type="text" name="nama_suami" id="tanggalLahirInput" class="form-control" placeholder="tanggal lahir" value="{{$wanita->nama_suami}}" style="background-color:black; color:white;">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="umurInput" class="form-label">Umur:</label>
                    <input type="text" name="umur" id="umurInput" class="form-control" placeholder="umur" value="{{$wanita->umur}}" style="background-color:black; color:white;">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tanggalLahirInput" class="form-label">Tanggal Lahir:</label>
                    <input type="text" name="tanggal_lahir" id="tanggalLahirInput" class="form-control" placeholder="tanggal lahir" , value="{{$wanita->tanggal_lahir}}" style="background-color:black; color:white;">
                </div>

            </div>

            <br>
            <hr  style=" color:white;">
            <br>


            <div class="row">
                
                <div class="col-md-6 mb-3">
                    <label for="wilayahSelect" class="form-label">Wilayah:</label>
                   <select name="wilayah" id="wilayahSelect" class="form-select" aria-label="Default select example" style="background-color:black; color:white;">
                      <option value="1" @if($wanita->wilayah == "1") selected @endif>1</option>
                      <option value="2" @if($wanita->wilayah == "2") selected @endif>2</option>
                      <option value="3" @if($wanita->wilayah == "3") selected @endif>3</option>
                      <option value="4" @if($wanita->wilayah == "4") selected @endif>4</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="wilayahSelect" class="form-label">jenis suara:</label>
                    <select name="jenis_suara" id="wilayahSelect" class="form-select" aria-label="Default select example" style="background-color:black; color:white;">
                        <option value="suara 1" @if($wanita->jenis_suara == "suara 1") selected @endif>suara 1</option>
                        <option value="suara 2" @if($wanita->jenis_suara == "suara 2") selected @endif>suara 2</option>
                        <option value="suara 3" @if($wanita->jenis_suara == "suara 3") selected @endif>suara 3</option>
                    </select>
                </div>
            </div>

            <br>
            <hr  style=" color:white;">
            <br>


            
            <div class="mb-3">
                <label for="floatingTextarea" class="form-label">Alamat:</label>
                <div class="form-floating">
                    <textarea name="alamat" class="form-control" placeholder="alamat" id="floatingTextarea" style="background-color:black; color:white;">{{$wanita->alamat}}</textarea>
                </div>
            </div>

            <input type="submit" name="submit" value="Submit" class="btn btn-outline-primary">
        </div>
    </form>
</div>
@endsection
