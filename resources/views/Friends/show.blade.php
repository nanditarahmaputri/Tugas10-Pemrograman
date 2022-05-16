@extends('layouts.app')

@section('title', 'coba')

@section('content')
    <div class="card bg-info">
        <div class="card-body">
        <h3>Nama teman : {{ $friends['nama'] }}</h3>
        <h3>No Telp teman : {{ $friends['no_telp'] }}</h3>
        <h3>Alamat teman : {{ $friends['alamat'] }}</h3>
        <h3>Group Terdaftar : {{ $friends['group_terdaftar'] }}</h3>
        </div>
    </div>
@endsection
    
