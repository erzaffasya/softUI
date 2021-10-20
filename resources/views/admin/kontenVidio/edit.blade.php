<x-app-layout>
  <div class="row">
    <div class="col-6">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Edit Konten Video</h6>
        </div>
        <div class="row px-xl-5 px-sm-4 px-3">

          <div class="card-body">
            <form role="form text-left" action="{{route('kontenVidio.update',$kontenVidio->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label for="exampleFormControlSelect1">Judul</label>
                <input type="text" class="form-control" name="judul" value="{{$kontenVidio->judul}}" placeholder="Masukkan Judul">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlSelect1">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" value="{{$kontenVidio->deskripsi}}" placeholder="Masukkan Deskripsi">
              </div>

              <div class="mb-3">
                <label for="exampleFormControlSelect1">Link</label>
                <input type="text" class="form-control" name="link" value="{{$kontenVidio->link}}" placeholder="Masukkan Link">
              </div>

              <div class="mb-3">
                <label for="exampleFormControlSelect1">BAB</label>
                <input type="number" class="form-control" value="{{$kontenVidio->bab}}" name="bab">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlSelect1">Kelas</label>
                <select class="form-control" name="kelas_id" id="exampleFormControlSelect1">{{$kontenVidio->judul}}
                  @foreach ($kelas as $item)
                  <option value="{{$item->id}}">{{$item->nama}}</option>
                  @endforeach
                </select>
              </div>
            <div class="text-center">
              <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Simpan</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>