@extends('app')
@section('title')
    Tampilkan Nilai Peserta
@endsection

@section('body')
    <div class="container">
        <h3>Data Semua Nilai Peserta</h3>
        <div class="container">
            <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>No.</th>
                            <th>Nama Tim</th>
                            <th>Nilai Tes 1</th>
                            <th>Nilai Tes 2</th>
                            <th>Nilai Tes 3</th>
                            <th>Rata-rata</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php ($i = 1);
                        @foreach($data as $d)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $d->tim }}</td>
                            <td>{{ $d->nilaipeserta->NilaiTes1 }}</td>
                            <td>{{ $d->nilaipeserta->NilaiTes2 }}</td>
                            <td>{{ $d->nilaipeserta->NilaiTes3 }}</td>
                            <td>{{ ($d->nilaipeserta->NilaiTes1 + $d->nilaipeserta->NilaiTes2 + $d->nilaipeserta->NilaiTes3)/3  }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
