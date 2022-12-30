@extends('layouts.backendlayout')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h1>Add Featured Client</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ route('backend.featured.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Client</label>
                        <input type="text" class="form-control" id="client" name="client" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Featured Client</button>
                </form>
            </div>
        </div>
    </div>
@endsection
