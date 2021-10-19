<x-app-layout>

  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0 p-3">
          <div class="row">
            <div class="col-6 d-flex align-items-center">
              <h6 class="mb-0">Data Konten Dokumen</h6>
            </div>
            <div class="col-6 text-end">
              <a class="btn bg-gradient-dark mb-0" href="{{route('kontenDokumen.create')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Data</a>
            </div>
          </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table id="myTable" class="table align-items-center mb-0">

              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Judul</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">File</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Bab</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($kontenDokumen as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->judul }}</td>
                  <td>{{ $item->deskripsi }}</td>
                  <td>{{ $item->file }}</td>
                  <td>{{ $item->bab }}</td>
                  <td>{{ $item->kelas->nama }}</td>
                  <td>
                    <div class="btn-group" role="group">
                      <a href="{{route('kontenDokumen.edit', $item->id)}}" class="btn btn-primary"><i class="material-icons">edit</i></i></a>
                      <form action="{{route('kontenDokumen.destroy', $item->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger"><i class="material-icons">delete</i></button>
                      </form>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @push('scripts')
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
  @endpush
</x-app-layout>