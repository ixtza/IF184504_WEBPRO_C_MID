@extends('layouts.master')

@section('header')
    Info
@endsection

@section('content')
<!-- Main content -->
<section class="content">
  
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Add berita</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">

<form action="/berita" method="POST">
    @csrf
    <div class="form-group">
        <label for="judul">judul berita</label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul">
        @error('judul')
            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="content">content</label>
        <input type="text" class="form-control" name="content" id="content" placeholder="Masukkan content">
        @error('content')
            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="penulis">penulis</label>
        <input type="string" class="form-control" name="penulis" id="penulis" placeholder="Masukkan penulis">
        @error('penulis')
            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

</div>
<!-- /.card-body -->
<div class="card-footer">
  Footer
</div>
<!-- /.card-footer-->
</div>
<!-- /.card -->

</section>
<!-- /.content -->

@endsection