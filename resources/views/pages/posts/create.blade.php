@extends('layouts.app')

@section('content')
<main class="container">
    <h1 class="text-center py-3">Create a new project</h1>

    <form action="{{ route('dashboard.posts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                type="text"
                class="form-control"
                name="title"
                id="title"/>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" name="content" id="content" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-outline-info ">Create a new project</button>

    </form>

</main>
@endsection
