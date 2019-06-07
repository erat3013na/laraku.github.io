@extends('app')
@section('title')
    Latihan Request Laravel
@endsection

@section('body')
    <body>
        <div class="container">
            <form action="/test3/lihat" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                Nama TIM:
                <input type="text" name="tim" placeholder="Ketikkan Nama TIM Anda">
                <button type="submit" class="btn btn-primary">OK</button>
            </form>
        </div>
    </body>
@endsection
