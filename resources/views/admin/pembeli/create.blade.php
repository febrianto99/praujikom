@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
        <div class="col col-lg-11">
            <form action="{{ route('pembeli.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" name="pembeli_nama" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">Alamat</label>
              <input type="text" name="pembeli_alamat" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">Telepon</label>
              <input type="text" name="pembeli_telepon" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">Hp</label>
              <input type="text" name="pembeli_Hp" id="" class="form-control" aria-describedby="helpId" required>
            </div>
                    <button type="submit" name="Simpan"class="btn btn-md btn-info">Simpan</button>
                    <a name="" id="" class="btn btn-md btn-warning" href="{{route('pembeli.index')}}" role="button">Kembali</a>
              </form>
            </div>
          </div>
        </div>
      </div>
  	
</body>
</html>

@endsection