@extends('layouts.backendlayout')

@section('content')
    <div class="container mt-4">
        @if (Session::has('success'))
            <div class="alert alert-success mt-2">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <h1>Gallery</h1>
                <p class="text-right"><a href="{{ route('backend.gallery.add') }}" class="btn btn-primary">Add Image</a>
                </p>
            </div>
        </div>
        <div class="row">
            @foreach ($galleries as $gallery)
                <div class="col-4">
                    <div class="card mb-4">
                        <img src="/images/{{ $gallery->image }}" class="card-img-top" alt="{{ $gallery->title }}"
                            height="200" width="200" style="object-fit: contain;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $gallery->title }}</h5>
                            <p class="card-text">{{ Str::title($gallery->type) }}</p>
                            <a href="{{ route('backend.gallery.show', $gallery->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('backend.edit.gallery', $gallery->id) }}" class="btn btn-secondary">Edit</a>
                            <form action="{{ route('backend.delete.gallery', $gallery->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
