<x-app-layout>
  <div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4">
      <div class="card-header pb-0 p-3">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <h6 class="mb-0">Profil Pengguna</h6>
          </div>
          <div class="col-6 text-end">
            <a class="btn bg-gradient-dark mb-0" href="{{route('profil.create')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Data</a>
          </div>
        </div>
      </div>
      <div class="card-body p-3">
        <div class="row">
          <div class="table-responsive p-0">
            <table id="myTable" class="table align-items-center mb-0">

              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Gambar</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($profil as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->nama }}</td>
                  <td>{{ $item->gambar }}</td>
                  <td>{{ $item->no_hp }}</td>

                  <td>
                    <div class="btn-group" role="group">
                      <a href="#" class="btn btn-primary"><i class="material-icons">edit</i></a>
                      <form action="#" method="POST">
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
</x-app-layout>

