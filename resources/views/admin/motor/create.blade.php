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
                    <form action="{{ route('motor.store') }}" method="post">
                        {{ csrf_field() }}

    <div class="form-group">
        <label for="">motor</label>
        <input class="form-control" type="text" name="motor_id">
    </div>
    <div class="form-group">
        <label for="">motor merk</label>
        <input class="form-control" type="text" name="motor_merk">
    </div>
    <div class="form-group">
        <label for="">type motor</label>
        <input class="form-control" type="text" name="motor_type">
    </div>
    <div class="form-group">
        <label for="">warna pilihan</label>
        <input class="form-control" type="text" name="motor_warna_pilihan">
    </div>
    <div class="form-group">
        <label for="">harga motor</label>
        <input class="form-control" type="text" name="motor_harga">
    </div>
    <div class="form-group">
        <label for="">gambar motor</label>
        <input class="form-control" type="text" name="motor_gambar">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ url('motor') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
