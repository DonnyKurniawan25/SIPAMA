@extends("layout_frontend/frontend")

@section("content")
<style>
    .form-control[type="checkbox"] {
        width: 20px;
        height: 20px;
    }
</style>

<div class="container">
    <h1>Diagnosis Penyakit Mata Menggunakan Metode Dempster-Shafer</h1>

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <form method="POST" action="{{ route('diagnosa.diagnosa') }}">
        @csrf
        <table class="table">
            <thead>
                <tr>
                    <th>ID Gejala</th>
                    <th>Nama Gejala</th>
                    <th>Pilih</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gejala as $g)
                <tr>
                    <td>{{ $g->id }}</td>
                    <td>{{ $g->nama }}</td>
                    <td>
                        <input class="form-check-input" type="checkbox" name="gejala[]" value="{{ $g->id }}" />
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Diagnosa</button>
    </form>
</div>
@endsection