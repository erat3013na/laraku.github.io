@extends('app')

@section('title')
    Select All Data Using Query Builder
@endsection


@section('body')
<body>
        @php ($i = 1);
        <div class="container">
            <div class="row">
                <div class="card-columns">
                @foreach ($teams as $team)
                    <div class="card">
                        <div class="container">
                        <h5 class="card-header">Nama TIM {{ $i }} : {{ $team->tim }}</h5>
                        <p class="card-text">
                            Anggota 1 :
                            <ul>
                                <li>Nama    : {{ $team->anggota1 }}</li>
                                <li>Kelas   : {{ $team->kelas1 }}</li>
                                <li>NISN    : {{ $team->nisn1 }}</li>
                            </ul>
                            Anggota 2 :
                            <ul>
                                <li>Nama    : {{ $team->anggota2 }}</li>
                                <li>Kelas   : {{ $team->kelas2 }}</li>
                                <li>NISN    : {{ $team->nisn2 }}</li>
                            </ul>
                            Anggota 3 :
                            <ul>
                                <li>Nama    : {{ $team->anggota3 }}</li>
                                <li>Kelas   : {{ $team->kelas3 }}</li>
                                <li>NISN    : {{ $team->nisn3 }}</li>
                            </ul>
                        </p>
                    </div>
                    </div>
                    @php ($i++)
                @endforeach
                </div>
            </div>
        </div>
    </body>
@endsection


