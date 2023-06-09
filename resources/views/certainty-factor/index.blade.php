@extends("layout_frontend/frontend")

@section("content")
<style>
    .form-control[type="checkbox"] {
        width: 20px;
        height: 20px;
    }
</style>

<div class="container">
    <h1>Diagnosis Penyakit Mata Menggunakan Certainty Factor</h1>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <section>
        <form method="POST" action="{{ route('calculate') }}">
            @csrf

            <h2>Pilih Gejala:</h2>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Gejala</th>
                        <th>Certainty Factor</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($gejala as $gejalaItem)
                    <tr>
                        <td>{{ $gejalaItem->id }}</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="gejala[]" value="{{ $gejalaItem->id }}" id="gejala{{ $gejalaItem->id }}">
                                <label class="form-check-label" for="gejala{{ $gejalaItem->id }}">
                                    {{ $gejalaItem->nama }}
                                </label>
                            </div>
                        </td>
                        <td>
                            <select class="form-control" name="cf_user[{{ $gejalaItem->id }}]">
                                <option value="" disabled selected>--- KEPERCAYAAN ---</option>
                                <option value="1">Sangat Yakin</option>
                                <option value="0.8">Yakin</option>
                                <option value="0.6">Cukup Yakin</option>
                                <option value="0.4">Kurang Yakin</option>
                                <option value="0.2">Tidak Tahu</option>
                                <option value="0">Tidak</option>
                            </select>
                            @error('cf_user.'.$gejalaItem->id)
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
    </section>
</div>

@endsection


