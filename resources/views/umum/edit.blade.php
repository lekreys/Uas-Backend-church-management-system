@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="title">Edit atau Hapus Data ( Umum )</h1>
    <form action="/umum/{{$umum->id}}" method="POST">
        @method('put')
        @csrf

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="nameInput" class="form-label">Name:</label>
                <input type="text" name="name" id="nameInput" class="form-control" value="{{$umum->name}}" placeholder="nama"  style="background-color:black; color:white;">
            </div>
            <div class="col-md-6 mb-3">
                <label for="tanggalLahirInput" class="form-label">Tanggal Lahir:</label>
                <input type="text" name="tanggal_lahir" id="tanggalLahirInput" class="form-control" placeholder="tanggal lahir" value="{{$umum->tanggal_lahir}}"  style="background-color:black; color:white;">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="umurInput" class="form-label">Umur:</label>
                <input type="text" name="umur" id="umurInput" class="form-control" placeholder="umur" value="{{$umum->umur}}"  style="background-color:black; color:white;">
            </div>
            <div class="col-md-6 mb-3">
                <label for="genderSelect" class="form-label">Gender:</label>
                <select name="jenis_kelamin" id="genderSelect" class="form-select" aria-label="Default select example"  style="background-color:black; color:white;">
                    <option value="Pria" @if($umum->jenis_kelamin == "Pria") selected @endif>Pria</option>
                    <option value="Perempuan" @if($umum->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label for="floatingTextarea" class="form-label">Tempat Tinggal:</label>
            <div class="form-floating">
                <textarea name="tempat_tinggal" class="form-control" placeholder="alamat" id="floatingTextarea"  style="background-color:black; color:white;">{{$umum->tempat_tinggal}}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="baptisSelect" class="form-label">Baptis:</label>
                <select name="baptis" id="baptisSelect" class="form-select" aria-label="Default select example"  style="background-color:black; color:white;">
                    <option value="sudah" @if($umum->baptis == "sudah") selected @endif>sudah</option>
                    <option value="belum" @if($umum->baptis == "belum") selected @endif>belum</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="wilayahSelect" class="form-label">Wilayah:</label>
                <select name="wilayah" id="wilayahSelect" class="form-select" aria-label="Default select example"  style="background-color:black; color:white;">
                    <option value="1" @if($umum->wilayah == "1") selected @endif>1</option>
                    <option value="2" @if($umum->wilayah == "2") selected @endif>2</option>
                    <option value="3" @if($umum->wilayah == "3") selected @endif>3</option>
                    <option value="4" @if($umum->wilayah == "4") selected @endif>4</option>
                </select>
            </div>
        </div>

        <input type="submit" name="submit" value="Submit" class="btn btn-outline-primary" >

        
    </form>
</div>

@endsection
