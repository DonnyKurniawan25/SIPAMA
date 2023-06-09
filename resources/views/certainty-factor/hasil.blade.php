@extends("layout_frontend/frontend")

@section("content")
<h1>Hasil Perhitungan Certainty Factor</h1>

<table class="table">
    <thead>
        <tr>
            <th>Penyakit</th>
            <th>CF Pakar</th>
            <th>CF User</th>
            <th>CF Final</th>
        </tr>
    </thead>
    <tbody>
        @php
            $cfFinalTertinggi = 0;
            $penyakitTertinggi = '';
        @endphp

        <tr>
            <td>{{ $hasilPerhitungan['penyakit']->nama }}</td>
            <td>{{ $hasilPerhitungan['cf_pakar'] }}</td>
            <td>{{ $hasilPerhitungan['cf_user'] }}</td>
            <td>{{ $hasilPerhitungan['cf_final'] }}</td>
        </tr>

        @php
            $cfFinalTertinggi = $hasilPerhitungan['cf_final'];
            $penyakitTertinggi = $hasilPerhitungan['penyakit']->nama;
            $deskripsiTertinggi = $hasilPerhitungan['penyakit']->deskripsi;
        @endphp

    </tbody>
</table>

<div>
    <h3>Penyakit tertinggi adalah: {{ $penyakitTertinggi }}</h3>
    <h3>Dengan Persentase: {{ $cfFinalTertinggi * 100 }}%</h3>
    <hr>
    <h6>Deskripsi Penyakit</h6>
    <p>{{ $deskripsiTertinggi }}</p>
</div>
@endsection
