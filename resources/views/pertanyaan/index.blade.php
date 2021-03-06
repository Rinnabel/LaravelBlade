@extends('master')

@section('content')

<div class="col-md-6" style="margin-left: 30px; margin-top: 30px">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Table Pertanyaan</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif
        <a class="btn btn-info mb-3" href="/pertanyaan/create">Add new question</a>
        <table class="table table-bordered">
          <thead>                  
            <tr>
              <th style="width: 10px">No</th>
              <th>Judul</th>
              <th>Isi</th>
              <th style="width: 40px">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse($pertanyaan as $key => $pertanyaan)
              <tr>
                <td> {{ $key + 1 }} </td>
                <td> {{ $pertanyaan->judul }} </td>
                <td> {{ $pertanyaan->isi }} </td>
                <td>
                  <a class="btn btn-info btn-sm" href="/pertanyaan/{{$pertanyaan->id}}">Show</a>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4" align="center">Tak ada pertanyaan nih</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      <!-- <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
          <li class="page-item"><a class="page-link" href="#">«</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
      </div> -->
    </div>
    <!-- /.card -->
  </div>

@endsection