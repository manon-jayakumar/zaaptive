@extends('layouts.app')

@section('title', 'Careers')

@section('content')
    <div class="row mb-3">
        <div class="col-10">
            <h1 class="h3">Create Career</h1>
        </div>

        <div class="col-2 text-end">
            <a href="{{ route('admin.careers.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>

    <form action="{{ route('admin.careers.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-6 mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="category" id="category" class="form-control">
                    <option value="" selected disabled>Select category</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Design">Design</option>
                    <option value="Operations">Operations</option>
                </select>
            </div>

            <div class="col-6 mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="text" name="position" id="position" class="form-control" placeholder="Enter the position">
            </div>
        </div>

        <div class="row">
            <div class="col-6 mb-3">
                <label for="short_description" class="form-label">Short Description</label>
                <input type="text" name="short_description" id="short_description" class="form-control" placeholder="Enter the short description">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" placeholder="Enter the description" rows="7"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-4 mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" name="location" id="location" class="form-control" placeholder="Enter the location">
            </div>

            <div class="col-4 mb-3">
                <label for="experience" class="form-label">Experience</label>
                <input type="number" name="experience" id="experience" class="form-control" placeholder="Enter the experience">
            </div>

            <div class="col-4 mb-3">
                <label for="package" class="form-label">Package</label>
                <input type="text" name="package" id="package" class="form-control" placeholder="Enter the package">
            </div>
        </div>

        <div class="row">
            <div class="col-6 mb-3">
                <label for="skills" class="form-label">Skills</label>
                <input type="text" name="skills" id="skills" class="form-control" placeholder="Enter the skills">
            </div>
        </div>

        <div class="row">
            <div class="col-4 mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="checkbox" name="status" id="status" value="1">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3 text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush