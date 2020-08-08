@extends('master')
@section('content')
    <div class="mt-3 ml-3 mr-3">
        <h4>{{ $tampil->judul}}</h4>
        <p>{{$tampil->isi}}</p>
        <h5>Tanggal dibuat : {{$tampil->tanggal_dibuat}}</h5>
    </div>
@endsection