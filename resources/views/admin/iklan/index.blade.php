<x-app-layout>
  <div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4">
      <div class="card-header pb-0 p-3">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <h6 class="mb-0">Data Iklan</h6>
          </div>
          <div class="col-6 text-end">
            <a class="btn bg-gradient-dark mb-0" href="{{route('iklan.create')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Iklan</a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
                <th class="text-end text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($iklan as $item)
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                    </div>
                  </div>
                </td>
                <td class="align-middle text-center text-sm">
                  <div class="position-relative">
                      <img src="../assets/foto/iklan/{{ $item->gambar }}" width="100" class="img-fluid shadow border-radius-xl">
                  </div>
                </td>
                <td>
                  <div class="ms-auto text-end">
                    <form action="{{route('iklan.destroy', $item->id)}}" method="POST" style="display: inline">
                      @csrf
                      @method("DELETE")
                      <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0"><i class="far fa-trash-alt me-2">Delete</i></button>
                    </form>
                    <a class="btn btn-link text-dark px-3 mb-0" href="{{route('iklan.edit', $item->id)}}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
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

  @push('scripts')
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
  @endpush
</x-app-layout>