@extends('app')
@section('title')
    Tampilkan
@endsection

@section('body')
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
        <table class="table table-active">
            <tr>
                <td>
                    <form action="/test4/updateView" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </form>
                </td>
                <td>
                    <form action="/test4/pembimbing" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <button type="submit" class="btn btn-info">Lihat Guru Pembimbing</button>
                    </form>
                </td>
                <td>
                    <form action="/test4/delete" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        </table>


    </div>
@endsection
