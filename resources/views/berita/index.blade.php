@extends('layouts.master')

@section('header')
    Info
@endsection

@section('TableTitle')
  berita List 
@endsection

@section('content')
<!-- Main content -->
  
      <a href="/berita/create" class="btn btn-primary mb-2">Tambah</a>
      <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">judul</th>
              <th scope="col">content</th>
              <th scope="col">penulis</th>
              <th scope="col">tag</th>
            </tr>
          </thead>
          <tbody>
              @forelse ($berita as $key=>$value)
                  <tr>
                      <td>{{$key + 1}}</th>
                      <td>{{$value->judul}}</td>
                      <td>{{$value->content}}</td>
                      <td>{{$value->penulis}}</td>
                      <td>
                          <a href="/berita/{{$value->id}}" class="btn btn-info">Detail</a>
                          <a href="/berita/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                          <form action="/berita/{{$value->id}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <input type="submit" class="btn btn-danger my-1" value="Delete">
                          </form>
                      </td>
                  </tr>
              @empty
                  <tr colspan="3">
                      <td>No data</td>
                  </tr>  
              @endforelse              
          </tbody>
      </table>
    
    @endsection

@push('scripts')
    <script>
        Swal.fire({
            title: "Berhasil!",
            text: "Memasangkan script sweet alert",
            icon: "success",
            confirmButtonText: "Cool",
        });
    </script>
@endpush