@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<form action ="/groups/{{ $groups['id'] }}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{ old('nama') ? old('nama') : $groups['nama'] }}"> 
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">No Telp </label>
    <input type="text" class="form-control" name="no_telp" id="exampleInputPassword1" value="{{ old('no_telp') ? old('no_telp') : $groups['no_telp'] }}"> 
    @error('no_telp')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat </label>
    <input type="text" class="form-control" name="alamat" id="exampleInputPassword1" value="{{ old('alamat') ? old('alamat') : $groups['alamat'] }}"> 
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
