@extends('backend.backend_layout.master')
@section('content')

    <div class="container mx-auto p-4 md:p-8 mt-5">
        <h2 class="text-2xl font-bold mb-5 text-center md:text-left">Advanced Form</h2>
        <form action="{{ isset($form) ? route('brand.update', $form->id) : route('brand.store') }}" method="POST" class="space-y-4">
            @csrf
            @if(isset($form))
                @method('PUT')
            @endif
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="name" name="title" value="{{ old('title', isset($form->id) ? $form->title : '') }}"
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <button type="submit" class="w-full md:w-auto bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded shadow">
                Submit
            </button>
        </form>
    </div>


    </main>
    </div>
@endsection

