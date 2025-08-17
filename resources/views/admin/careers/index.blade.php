@extends('layouts.app')

@section('title', 'Careers')

@section('content')
    <div class="row mb-3">
        <div class="col-10">
            <h1 class="h3">Careers</h1>
        </div>

        <div class="col-2 text-end">
            <a href="{{ route('admin.careers.create') }}" class="btn btn-primary">Create</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>S. No</th>
                        <th>Category</th>
                        <th>Position</th>
                        <th>Location</th>
                        <th>Experience</th>
                        <th>Package</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($careers as $career)    
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $career->category }}</td>
                            <td>{{ $career->position }}</td>
                            <td>{{ $career->location }}</td>
                            <td>{{ $career->experience }}+ years</td>
                            <td>$ {{ $career->package }} LPA</td>
                            <td>
                                <span class="badge {{ $career->status == 'Active' ? 'bg-success' : 'bg-danger' }}">
                                    {{ $career->status }}
                                </span>
                            </td>
                            <td>{{ $career->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="{{ route('admin.careers.edit', $career->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                <form action="{{ route('admin.careers.destroy', $career->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this career?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center text-muted">No careers found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection