@extends('app')
@section('title')
    Pembimbing
@endsection


@section('body')
    <div class="container">
        <div class="card">
            <h4 class="card-header">Daftar Guru Pembimbing Untuk TIM {{ $data->tim }}</h4>
            <div class="card-body">
                <ul>
                    @foreach ($data->pembimbing as $d)
                        <li>{{ $d->namaPembimbing }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
