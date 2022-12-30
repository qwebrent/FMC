@extends('layouts.backendlayout')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h1>Edit Featured Client</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ route('backend.update.featured', $featuredClient->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="title">Client</label>
                        <input type="text" class="form-control" id="client" name="client"
                            value="{{ $featuredClient->client }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3" required>{{ $featuredClient->message }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image"
                            value="{{ $featuredClient->image }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Featured Client</button>
                </form>
            </div>
        </div>
    </div>
@endsection
