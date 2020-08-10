@extends('master')

@section('content')
    <div class="mt-3 ml-5">
        <h4> {{ $pertanyaan->judul }} </h4>
        <p> {{ $pertanyaan->isi }} </p>
    </div>

    <a class="btn btn-info mt-3 ml-5" href="/pertanyaan/{{$pertanyaan->id}}/edit">edit</a>
@endsection