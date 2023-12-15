@extends('layouts.master')
@section('content')
<div class="container">

    <h1>Edit Data Buku</h1>
        <form action="/buku/{{$buku->id}}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="inputJudulBuku" class="form-label">Judul Buku</label>
                <input type="text" name="judul_buku"class="form-control" id="input_judul_buku" aria-describedby="judulBuku" value="{{$buku->judul_buku}}">
            </div>

            <div class="mb-3">
                <label for="inputNamaPengarang" class="form-label">Pengarang</label>
                <input type="text" name="pengarang"class="form-control" id="inputNamaPengarang" aria-describedby="pengarang" value="{{$buku->pengarang}}">
            </div>

            <div class="mb-3">
                <label for="inputPenerbit" class="form-label">Penerbit</label>
                <input type="text"  name="penerbit"class="form-control" id="inputPenerbit" aria-describedby="penerbit" value="{{$buku->penerbit}}">
            </div>

            <div class="mb-3">
                <label for="tahunTerbit" class="form-label">Tahun Terbit</label>
                <input type="integer"  name="tahun_terbit"class="form-control" id="tahunTerbit" aria-describedby="tahunTerbit" value="{{$buku->tahun_terbit}}">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="update"> <br>
        </form>

</div>

@endsection