@extends('app')
@section('title')
    Ubah Data
@endsection

@section('body')
    <body>

        <div class="container">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-3">Hello TIM {{ $data->tim }}</h1>
                    <p>Silahkan isi data di bawah untuk mengubah data anda</p>
                </div>
                <div class="container">
                        <form action="test4/updateproses" method="post">
                        {{--!!!!! jng lupa pake @csrf klo gk mau error 419 !!!!!--}}
                        @csrf
                            <div class="form-group col-md-6">
                                <label for="tim"><h4>Nama TIM : </h4></label>
                                <input type="text" class="form-control" id="tim" name="tim" value="{{ $data->tim }}" placeholder="Nama TIM">
                            </div>
                            <div class="container">
                                <h5>Anggota 1:</h5>
                                <div class="form-group col-md-6">
                                    <label for="nama-user1">Nama Anggota 1: </label>
                                    <input type="text" class="form-control" id="nama-user1" name="anggota1" value="{{ $data->anggota1 }}" placeholder="Nama Anggota 1">
                                </div>
                                <div class="container form-group">
                                    <label for="kelas1">Kelas Anggota 1: </label>
                                    <div id="kelas1">
                                        <div class="form-check" id="kelas1">
                                            <input class="form-check-input" type="radio" name="kelas1" id="kelas1" value="VII">
                                            <label class="form-check-label" for="kelas1">
                                                VII
                                            </label>
                                        </div>
                                        <div class="form-check" id="kelas1">
                                            <input class="form-check-input" type="radio" name="kelas1" id="kelas1" value="VIII">
                                            <label class="form-check-label" for="kelas1">
                                                VIII
                                            </label>
                                        </div>
                                        <div class="form-check" id="kelas1">
                                            <input class="form-check-input" type="radio" name="kelas1" id="kelas1" value="IX">
                                            <label class="form-check-label" for="kelas1">
                                                IX
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nisn-user1">NISN Anggota 1: </label>
                                    <input type="text" class="form-control" id="nisn-user1" name="nisn1" value="{{ $data->nisn1 }}" placeholder="NISN Anggota 1">
                                </div>
                            </div>
                            <div class="container">
                                <h5>Anggota 2:</h5>
                                <div class="form-group col-md-6">
                                    <label for="nama-user2">Nama Anggota 2: </label>
                                    <input type="text" class="form-control" id="nama-user2" name="anggota2" value="{{ $data->anggota2 }}" placeholder="Nama Anggota 2">
                                </div>
                                <div class="container form-group">
                                    <label for="kelas2">Kelas Anggota 2: </label>
                                    <div id="kelas2">
                                        <div class="form-check" id="kelas2">
                                            <input class="form-check-input" type="radio" name="kelas2" id="kelas2" value="VII">
                                            <label class="form-check-label">
                                                VII
                                            </label>
                                        </div>
                                        <div class="form-check" id="kelas2">
                                            <input class="form-check-input" type="radio" name="kelas2" id="kelas2" value="VIII">
                                            <label class="form-check-label">
                                                VIII
                                            </label>
                                        </div>
                                        <div class="form-check" id="kelas2">
                                            <input class="form-check-input" type="radio" name="kelas2" id="kelas2" value="IX">
                                            <label class="form-check-label">
                                                IX
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nisn-user2">NISN Anggota 2: </label>
                                    <input type="text" class="form-control" id="nisn-user2" name="nisn2" value="{{ $data->nisn2 }}" placeholder="NISN Anggota 2">
                                </div>
                                </div>
                                <div class="container">
                                    <h5>Anggota 3:</h5>
                                    <div class="form-group col-md-6">
                                        <label for="nama-user3">Nama Anggota 3: </label>
                                        <input type="text" class="form-control" id="nama-user3" name="anggota3" value="{{ $data->anggota3 }}" placeholder="Nama Anggota 3">
                                    </div>
                                    <div class="container form-group">
                                        <label for="kelas3">Kelas Anggota 3: </label>
                                        <div id="kelas3">
                                            <div class="form-check" id="kelas3">
                                                <input class="form-check-input" type="radio" name="kelas3" id="kelas3" value="VII">
                                                <label class="form-check-label">
                                                    VII
                                                </label>
                                            </div>
                                            <div class="form-check" id="kelas3">
                                                <input class="form-check-input" type="radio" name="kelas3" id="kelas3" value="VIII">
                                                <label class="form-check-label">
                                                    VIII
                                                </label>
                                            </div>
                                            <div class="form-check" id="kelas3">
                                                <input class="form-check-input" type="radio" name="kelas3" id="kelas3" value="IX">
                                                <label class="form-check-label">
                                                    IX
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="nisn-user3">NISN Anggota 3: </label>
                                        <input type="text" class="form-control" id="nisn-user3" name="nisn3" value="{{ $data->nisn3 }}" placeholder="NISN Anggota 3">
                                    </div>
                                </div>

                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                </div>
            </div>

        </div>

    <script type="text/javascript" src="/{{ asset('js/app.js') }}"></script>
    </body>
@endsection
