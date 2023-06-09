@extends("layout_frontend/frontend")

@section("content")

<h1>Hasil Perhitungan Dempster-Shafer</h1>

<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Penyakit</th>
                    <th scope="col">Hasil</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hasil_diagnosa as $h)
                <tr>
                    <td>{{ $h['penyakit'] }}</td>
                    <td>{{ $h['hasil'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @php
        $max_hasil = max(array_column($hasil_diagnosa, 'hasil'));
        $penyakit_tertinggi = [];
        foreach ($hasil_diagnosa as $h) {
            if ($h['hasil'] == $max_hasil) {
                $penyakit_tertinggi[] = $h;
            }
        }
        @endphp

        <h2>Penyakit dengan hasil tertinggi:</h2>
        @foreach ($penyakit_tertinggi as $penyakit)
        <h3>Nama Penyakit: {{ $penyakit['penyakit'] }}</h3>
        <h3>Nilai Persentase: {{ $penyakit['hasil'] * 100 }}%</h3>
        <hr>
        <h5>Deskripsi: </h5>
        <p>{{ $penyakit['deskripsi'] }}</p>
        @endforeach

    </div>
</div>

@endsection
