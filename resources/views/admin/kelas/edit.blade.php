<x-app-layout>
<<<<<<< Updated upstream

    <div class="row">
        <div class="col-6">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Form Field</h6>
            </div>
            <div class="row px-xl-5 px-sm-4 px-3">
                  
                <div class="card-body">
                  <form role="form text-left" action="{{route('kelas.update',$kelas->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="exampleFormControlSelect1">Nama Kelas</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{$kelas->nama}}" aria-label="Name" aria-describedby="email-addon">
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlSelect1">Deskripsi Kelas</label>
                      <input type="text" class="form-control" name="deskripsi" value="{{$kelas->deskripsi}}" placeholder="Deskripsi" aria-label="Name" aria-describedby="email-addon">
                    </div>
                
                    
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Submit</button>
                    </div>
                  </form>
                </div>
=======
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Edit Kelas</h6>
        </div>
        <div class="row px-xl-5 px-sm-4 px-3">
          <div class="card-body">
            <form role="form text-left" action="{{route('kelas.update',$kelas->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label for="exampleFormControlSelect1">Nama Kelas</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{$kelas->nama}}" aria-label="Name" aria-describedby="email-addon">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlSelect1">Deskripsi Kelas</label>
                <input type="text" class="form-control" name="deskripsi" value="{{$kelas->deskripsi}}" placeholder="Deskripsi" aria-label="Name" aria-describedby="email-addon">
              </div>
              <div class="text-center">
                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Simpan</button>
>>>>>>> Stashed changes
              </div>
          </div>
        </div>
      </div>
    </x-app-layout>