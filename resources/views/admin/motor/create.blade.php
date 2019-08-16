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
                <div class="card-header">Membuat Data motor</div>
                <div class="card-body">
                    <form action="{{ route('motor.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

    <div class="form-group">
        <label for="">Motor Kode</label>
        <input class="form-control" type="text" name="motor_kode">
    </div>
    <div class="form-group">
        <label for="">Merk</label>
        <input class="form-control" type="text" name="motor_merk">
    </div>
    <div class="form-group">
        <label for="">Type</label>
        <input class="form-control" type="text" name="motor_type">
    </div>
    <div class="form-group">
        <label for="">Warna</label>
        <input class="form-control" type="text" name="motor_warna_pilihan">
    </div>
    <div class="form-group">
        <label for="">Harga</label>
        <input class="form-control" type="text" name="motor_harga">
        </div>
    <div class="form-group">
    <label for="">Foto</label>
    <input type="file" name="motor_gambar" id="motor_gambar" class="form-control" required>
    </div>
    <button type="submit" name="Simpan" class="btn btn-md btn-info">Simpan</button>
    <a name="" id="" class="btn btn-md btn-warning" href="{{route('motor.index')}}" role="button">kembali</a>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
