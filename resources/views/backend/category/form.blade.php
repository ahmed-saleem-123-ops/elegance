
@extends('backend.backend_layout.master')
@section('content')
<div class="container mx-auto mt-5">
    <h2 class="text-2xl font-bold mb-5">Advanced Form</h2>
    <form action="{{ isset($hamd) ? route('category.update', $hamd->id) : route('category.store') }}" method="POST" class="space-y-4">
        @csrf
        @if(isset($hamd))
            @method('PUT')
        @endif
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Title:</label>
            <input type="text" id="name" name="title" value="{{ old('title', isset($hamd->id) ? $hamd->title : '') }}"
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded shadow">
            Submit
        </button>
    </form>
</div>
</main>
</div>

@endsection