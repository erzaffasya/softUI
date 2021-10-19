<x-app-layout>

  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Authors table</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table id="myTable" class="table align-items-center mb-0">

              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Judul</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Link</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bab</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($kontenVidio as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->judul }}</td>
                  <td>{{ $item->deskripsi }}</td>
                  <td>{{ $item->link }}</td>
                  <td>{{ $item->bab }}</td>
                  <td>{{ $item->kelas->nama }}</td>
                  <td>
                    <div class="btn-group" role="group">
                      <a href="{{route('kontenVidio.edit', $item->id)}}" class="btn btn-primary"><i class="material-icons">edit</i></a>
                      <form action="{{route('kontenVidio.destroy', $item->id)}}" method="POST">
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