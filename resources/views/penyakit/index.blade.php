@extends("layout_backend/admin")
@section('content-header')

<div class="card bg-light-info shadow-none position-relative overflow-hidden">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h4 class="fw-semibold mb-8">Pasien</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-muted" href="/beranda">Beranda</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Pasien</li>
                    </ol>
                </nav>
            </div>
            <div class="col-3">
                <div class="text-center mb-n5">
                    <img src="{{asset ('modernize/assets/images/breadcrumb/ChatBc.png')}}" alt="" class="img-fluid mb-n4">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section("content")
@include('swal')
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
<style>
    .btn-container {
        display: flex;
        justify-content: flex-end;
    }
</style>

<div class="card w-100 position-relative overflow-hidden">
    <div class="px-4 py-3 border-bottom">
        <h5 class="card-title fw-semibold mb-0 lh-sm">Data Pasien</h5>
    </div>
    <div class="card-body p-4">
        <div class="btn-container">
            <a type="button" class="btn mb-1 waves-effect waves-light btn-success">
                <i class="ti ti-plus"></i>
                Tambah Data
            </a>
        </div>
        <hr>
        <div class="table-responsive rounded-2 mb-4">
            <table id="myTable" class="table border text-nowrap customize-table mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr>
                        <th>ID Penyakit</th>
                        <th>Nama Penyakit</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $p)
                        <tr>
                            <td>{{ $p->id}}</td>
                            <td>{{ $p->nama}}</td>
                            <td>{{ $p->deskripsi}}</td>
                            <td>
                                <div class="dropdown dropstart">
                                  <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots fs-6"></i>
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <form onsubmit="event.preventDefault()" id="myForm-{{ $p->id }}" method="post"
                                        action="{{ route('penyakit.destroy', $p->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center gap-3" href="{{ route('penyakit.edit', $p->id) }}"><i class="fs-4 ti ti-edit"></i>Edit</a>
                                        </li>
                                        <li>
                                            <button class="dropdown-item d-flex align-items-center gap-3" onclick="Hapus('{{ $p->id }}')"><i class="fs-4 ti ti-trash"></i>Delete</button>
                                        </li>
                                    </form>
                                   
                                  </ul>
                                </div>
                              </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
<script type="text/javascript">
    function Hapus(id) {
        Swal.fire({
            title: 'Anda Yakin??',
            text: "Anda tidak bisa mengembalikan data!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Ya, Hapus!'
        }).then((result)=> {
            if(result.value){
                document.getElementById('myForm-'+id).submit();
            }
        })
    }

</script>

  