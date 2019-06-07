@extends('app')
@section('title')
    Latihan Request Laravel
@endsection

@section('body')
    <div class="container ">
        <form action="/test4/read" method="post" style="center">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            Nama TIM:
            <input type="text" name="tim" placeholder="Ketikkan Nama TIM Anda">
            <button type="submit" class="btn btn-primary">OK</button>
        </form>
    </div>
@endsection
