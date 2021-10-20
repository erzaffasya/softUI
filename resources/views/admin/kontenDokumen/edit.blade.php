<x-app-layout>
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Edit Dokumen</h6>
        </div>
        <div class="row px-xl-5 px-sm-4 px-3">
          <div class="card-body">
            <form role="form text-left" action="{{route('kontenDokumen.update',$kontenDokumen->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label for="exampleFormControlSelect1">Judul</label>
                <input type="text" class="form-control" name="judul" value="{{$kontenDokumen->judul}}" placeholder="Masukkan Judul">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlSelect1">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" value="{{$kontenDokumen->deskripsi}}" placeholder="Masukkan Deskripsi">
              </div>

              <div class="mb-3">
                <label for="exampleFormControlSelect1">File Dokumen</label>
                <br>
                <input type="file" class="" name="file">
              </div>
              <div class="text-center">
                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>