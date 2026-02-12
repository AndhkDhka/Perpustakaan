@extends('layouts.app')

@section('content')
    @include('partials.hero')
    @include('partials.fitur')
    @include('partials.testimoni')
    @include('partials.galeri')
    @include('partials.footer-slim')
@endsection

@foreach ($berita as $item)
    <div>
        <img src="{{ asset('storage/'.$item->foto) }}" class="rounded">
        <h3>{{ $item->judul }}</h3>
        <p>{{ Str::limit(strip_tags($item->konten), 120) }}</p>
    </div>
@endforeach
