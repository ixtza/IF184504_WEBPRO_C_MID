@extends('layouts.master')

@section('header')
    Info
@endsection

@section('TableTitle')
    Detail berita Id-{{ $berita->id }}
@endsection

@section('content')
    
<div>
    <h2>Edit berita {{$berita->id}}</h2>
    <form action="/berita/{{$berita->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">judul</label>
            <input type="string" class="form-control" name="judul" value="{{$berita->judul}}" id="judul" placeholder="Masukkan judul">
            @error('judul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">content</label>
            <input type="text" class="form-control" name="content"  value="{{$berita->content}}"  id="content" placeholder="Masukkan content">
            @error('content')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="penulis">penulis</label>
            <input type="string" class="form-control" name="penulis"  value="{{$berita->penulis}}"  id="penulis" placeholder="Masukkan penulis">
            @error('penulis')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection