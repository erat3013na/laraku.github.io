@extends('app')

@section('title')
    Kelas tes
@endsection

@section('body')
    <body>
        <div class="container">
            @foreach ($data as $dat)
                {{ $dat }}
            @endforeach
        </div>
    </body>
@endsection
