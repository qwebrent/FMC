@extends('layouts.backendlayout')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h1>Edit Gallery</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ route('backend.update.gallery', $gallery->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control col-md-6" id="title" name="title"
                            value="{{ $gallery->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file col-md-6" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Gallery</button>
                </form>
            </div>
        </div>
    </div>
@endsection
