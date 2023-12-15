@extends('layouts.master')
@section('content')
        <div class="container">
            <h1></h1>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
            <a class="btn btn-primary" href="/buku/create"> Tambahkan Buku</a>

            
            <table class="table table-hover">
                <tr>
                    <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Aksi</th>
                </tr>
                @foreach($buku as $bk)
                <tr>
                    <td>{{$bk->judul_buku}}</td>
                    <td>{{$bk->pengarang}}</td>
                    <td>{{$bk->penerbit}}</td>
                    <td>{{$bk->tahun_terbit}}</td>
                    <td> 
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a class="btn btn-outline-primary" href="/buku/{{$bk->id}}/edit">Edit</a>   
                        
                        <form action="/buku/{{$bk->id}}" method="POST">
                        @csrf 
                        @method('delete')
                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                        </form>
                    </div>
                    </td>
                </tr>
                @endforeach
            </table>
          
        </div>
    @endsection
