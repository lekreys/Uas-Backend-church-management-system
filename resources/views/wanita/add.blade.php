@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="title">Silahkan Isi Form Yang Ada ( Komisi Wanita )</h1>
    
    <form action="/wanita/store" method="POST">
        @csrf
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nameInput" class="form-label">Name:</label>
                    <input type="text" name="name" id="nameInput" class="form-control" placeholder="name" style="background-color:black; color:white;">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tanggalLahirInput" class="form-label">nama suami:</label>
                    <input type="text" name="nama_suami" id="tanggalLahirInput" class="form-control" placeholder="tanggal lahir" style="background-color:black; color:white;">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="umurInput" class="form-label">Umur:</label>
                    <input type="text" name="umur" id="umurInput" class="form-control" placeholder="umur" style="background-color:black; color:white;">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tanggalLahirInput" class="form-label">Tanggal Lahir:</label>
                    <input type="text" name="tanggal_lahir" id="tanggalLahirInput" class="form-control" placeholder="tanggal lahir" style="background-color:black; color:white;">
                </div>

            </div>

            <br>
            <hr style="color:white;">
            <br>


            <div class="row">
                
                <div class="col-md-6 mb-3">
                    <label for="wilayahSelect" class="form-label">Wilayah:</label>
                    <select name="wilayah" id="wilayahSelect" class="form-select" aria-label="Default select example" style="background-color:black; color:white;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="wilayahSelect" class="form-label">jenis suara:</label>
                    <select name="jenis_suara" id="wilayahSelect" class="form-select" aria-label="Default select example" style="background-color:black; color:white;">
                        <option value="suara 1">suara 1</option>
                        <option value="suara 2">suara 2</option>
                        <option value="suara 3">suara 3</option>
                    </select>
                </div>
            </div>

            <br>
            <hr style="color:white;">
            <br>


            
            <div class="mb-3">
                <label for="floatingTextarea" class="form-label">Alamat:</label>
                <div class="form-floating">
                    <textarea name="alamat" class="form-control" placeholder="alamat" id="floatingTextarea" style="background-color:black; color:white;"></textarea>
                </div>
            </div>

            <input type="submit" name="submit" value="Submit" class="btn btn-outline-primary">
        </div>
    </form>
</div>
@endsection
