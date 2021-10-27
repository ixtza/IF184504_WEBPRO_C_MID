@extends('layouts.master')

@section('header')
    Detail berita Id-{{ $berita->id }}
@endsection

@section('content')
<!-- Main content -->
<section class="content">
          
    <h2 class="text-primary">{{$berita->judul}}</h2>
    <p class="text-dark">{{$berita->content}}</p>
    <p class="text-dark">ditulis oleh : {{$berita->penulis}}</p>
    <p >Tags<br>
    <?php 
        // foreach ($tag->tag.nama as $tag){
        //     echo "<span class="badge badge-primary">$tag</span>";
        // }
    //  ?>
     {{-- {{ $tag }} --}}
    </p>
    
</section>

@endsection