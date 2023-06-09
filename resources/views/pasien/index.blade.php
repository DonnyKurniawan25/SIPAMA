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
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Jenis kelamin</th>
                        <th>Pekerjaan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $p)
                        <tr>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->umur }}</td>
                            <td>{{ $p->jenis_kelamin }}</td>
                            <td>{{ $p->pekerjaan }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td>
                                <div class="dropdown dropstart">
                                  <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots fs-6"></i>
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <form onsubmit="event.preventDefault()" id="myForm-{{ $p->id }}" method="post"
                                        action="{{ route('pasien.destroy', $p->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center gap-3" href="{{ route('pasien.edit', $p->id) }}"><i class="fs-4 ti ti-edit"></i>Edit</a>
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
    <!-- Modal Create -->
    <div class="modal fade" id="createModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah data pasien</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('pasien.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="id">ID Pasien</label>
                            <input name="id" type="text" class="form-control" id="id" aria-describedby="emailHelp" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama" required>
                        </div>

                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input name="umur" type="number" class="form-control" id="umur" aria-describedby="emailHelp" placeholder="Umur" required>
                        </div>

                        <!-- radio -->
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <br>
                            <div class="form-check">
                                <input value="Laki-laki" class="form-check-input" type="radio" name="jenis_kelamin" checked>
                                <label class="form-check-label mr-4">Laki-laki</label>

                                <input value="Perempuan" class="form-check-input" type="radio" name="jenis_kelamin">
                                <label class="form-check-label">Perempuan</label>
                            </div>
                            <div class="form-check">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input name="pekerjaan" type="text" class="form-control" id="pekerjaan" aria-describedby="emailHelp" placeholder="Pekerjaan" required>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" id="alamat" rows="3" placeholder="Alamat pasien" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal Create -->

 
    @endsection
    <!-- Add the following scripts after the table code -->

   
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
