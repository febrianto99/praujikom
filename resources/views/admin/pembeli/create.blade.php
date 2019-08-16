@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/select2.min.js')}}"></script>
    <script src="{{ asset('backend/assets/js/components/select2-init.js')}}"></script>
    <script src="{{ asset('backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('editorl');
    $(document).ready(function () {
        $('#select2').select2();
    })
</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data pembeli</div>
                <div class="card-body">
                    <form action="{{ route('pembeli.store') }}" method="post">
                        {{ csrf_field() }}

    <div class="form-group">
        <label for="">Id</label>
        <input class="form-control" type="text" name="id_pembeli">
    </div>
    <div class="form-group">
        <label for="">Nama Pembeli</label>
        <input class="form-control" type="text" name="pembeli_nama">
    </div>
    <div class="form-group">
        <label for="">Alamat</label>
        <input class="form-control" type="text" name="pembeli_alamat">
    </div>
    <div class="form-group">
        <label for="">Telepon</label>
        <input class="form-control" type="text" name="pembeli_telepon">
    </div>
    <div class="form-group">
        <label for="">HP</label>
        <input class="form-control" type="text" name="pembeli_HP">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
