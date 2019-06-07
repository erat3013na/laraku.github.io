@extends('app')
@section('title')
    Tampilkan
@endsection

@section('body')
    <body>
        <div class="container">
            <div class="card">
                <h5 class="card-header">Nama TIM : {{ $data->tim }}</h5>
                <div class="card-body">
                    <div class="container">
                        <h5 class="card-title">Anggota 1</h5>
                        <ul>
                            <li>Nama    : {{ $data->anggota1 }}</li>
                            <li>Kelas   : {{ $data->kelas1 }}</li>
                            <li>NISN    : {{ $data->nisn1 }}</li>
                        </ul>
                    </div>
                    <div class="container">
                        <h5 class="card-title">Anggota 2</h5>
                        <ul>
                            <li>Nama    : {{ $data->anggota2 }}</li>
                            <li>Kelas   : {{ $data->kelas2 }}</li>
                            <li>NISN    : {{ $data->nisn2 }}</li>
                        </ul>
                    </div>
                    <div class="container">
                        <h5 class="card-title">Anggota 3</h5>
                        <ul>
                            <li>Nama    : {{ $data->anggota3 }}</li>
                            <li>Kelas   : {{ $data->kelas3 }}</li>
                            <li>NISN    : {{ $data->nisn3 }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <form action="/test3/edit" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id }}">
                <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
            <form action="/test3/hapus" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id }}">
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </body>
@endsection
