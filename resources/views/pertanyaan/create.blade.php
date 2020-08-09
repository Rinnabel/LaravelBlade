@extends('master')

@section('content')

    <div class="col-md-6" style="margin-left: 30px; margin-top: 30px">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat Pertanyaan Baru</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/pertanyaan" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="judul">Judul Pertanyaan</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', '') }}" placeholder="Tulis Judul">
                        @error('judul')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi">Pertanyaan</label>
                        <input type="text" class="form-control" id="isi" name="isi" value="{{ old('isi', '') }}" placeholder="Tulis Pertanyaanmu">
                        @error('isi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->

@endsection