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
                  <form role="form text-left" action="{{route('iklan.update',$iklan->id)}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="exampleFormControlSelect1">Gambar</label><br>
                      <input type="file" name="gambar" placeholder="">
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
          <h6>Edit Iklan</h6>
        </div>
        <div class="row px-xl-5 px-sm-4 px-3">
          <div class="card-body">
            <form role="form text-left" action="{{route('iklan.update',$iklan->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label for="exampleFormControlSelect1">Gambar</label><br>
                <input type="file" name="gambar" placeholder="">
              </div>
              <div class="text-center">
                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Simpan</button>
>>>>>>> Stashed changes
              </div>
          </div>
        </div>
      </div>
    </x-app-layout>