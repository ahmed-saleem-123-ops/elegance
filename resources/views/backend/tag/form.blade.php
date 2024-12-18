@extends('backend.backend_layout.master')
@section('content')

    <div class="container mx-auto mt-5 p-4 max-w-lg bg-white shadow-lg rounded-lg">
        <h1 class="text-center text-3xl font-bold mb-5">Add New Testimonial</h1>
        <form action="{{ isset($tag) ? route('tag.update' , $tag->id) :  route('tag.store') }}" method="POST">
            @csrf
            @if(isset($tag))
                @method('PUT')
            @endif
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Title</label>
                <input type="text" id="name" name="title" value="{{ old('title' , isset($tag->id) ? $tag->title : '') }}"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                       placeholder="Enter heading" required>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                        class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-lg">
                    Submit
                </button>
            </div>
        </form>
    </div>

@endsection
