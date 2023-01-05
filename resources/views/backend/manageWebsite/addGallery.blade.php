@extends('layouts.backendlayout')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h1>Add Gallery</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ route('backend.gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control col-md-6" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="type" class="text-white">Image Type</label>
                        <select class="form-control col-md-6" id="type" name="type">
                            <option value="" disabled selected hidden class="text-muted">Select
                                Item
                            </option>
                            <option value="food">Food</option>
                            <option value="event">Event</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file col-md-6" id="image" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Image</button>
                </form>
            </div>
        </div>
    </div>
@endsection
