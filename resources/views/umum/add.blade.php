@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="title">Silahkan Isi Form Yang Ada ( Umum )</h1>
    
    <form action="/umum/store" method="POST">
        @csrf
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nameInput" class="form-label">Name:</label>
                    <input type="text" name="name" id="nameInput" class="form-control " placeholder="name" style="background-color:black; color:white;">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tanggalLahirInput" class="form-label">Tanggal Lahir:</label>
                    <input type="text" name="tanggal_lahir" id="tanggalLahirInput" class="form-control" placeholder="tanggal lahir"  style="background-color:black; color:white;">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="umurInput" class="form-label">Umur:</label>
                    <input type="text" name="umur" id="umurInput" class="form-control" placeholder="umur"  style="background-color:black; color:white;">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="genderSelect" class="form-label">Gender:</label>
                    <select name="jenis_kelamin" id="genderSelect" class="form-select" aria-label="Default select example"  style="background-color:black; color:white;">
                        <option value="Pria">Pria</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="floatingTextarea" class="form-label">Tempat Tinggal:</label>
                <div class="form-floating">
                    <textarea name="tempat_tinggal" class="form-control" placeholder="alamat" id="floatingTextarea"  style="background-color:black; color:white;"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="baptisSelect" class="form-label">Baptis:</label>
                    <select name="baptis" id="baptisSelect" class="form-select" aria-label="Default select example"  style="background-color:black; color:white;">
                        <option value="sudah">sudah</option>
                        <option value="belum">belum</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="wilayahSelect" class="form-label">Wilayah:</label>
                    <select name="wilayah" id="wilayahSelect" class="form-select" aria-label="Default select example"  style="background-color:black; color:white;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>

            <input type="submit" name="submit" value="Submit" class="btn btn-outline-primary">
        </div>
    </form>
</div>
@endsection
