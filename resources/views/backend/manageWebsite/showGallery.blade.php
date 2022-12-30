@extends('layouts.backendlayout')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h1>{{ $gallery->title }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <img src="/images/{{ $gallery->image }}" class="img-fluid" alt="{{ $gallery->title }}">
            </div>
            <div class="col-6">
                <a href="{{ route('backend.edit.gallery', $gallery->id) }}" class="btn btn-secondary">Edit</a>
                <form action="{{ route('backend.delete.gallery', $gallery->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
