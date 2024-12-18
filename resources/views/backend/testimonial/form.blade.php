@extends('backend.backend_layout.master')
@section('content')

    <div class="container mx-auto mt-5">
        <h2 class="text-2xl font-bold mb-5">Advanced Form</h2>
        <form action="{{ isset($form) ? route('testimonial.update', $form->id) : route('testimonial.store') }}" method="POST" class="space-y-4">
            @csrf
            @if(isset($form))
                @method('PUT')
            @endif
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Heading</label>
                <input type="text" id="name" name="heading" value="{{ old('heading', isset($form->id) ? $form->heading : '') }}"
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="paragraph" class="block text-sm font-medium text-gray-700">Paragraph</label>
                <textarea id="paragraph" name="paragraph" rows="4"
                          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>{{ old('paragraph', isset($form->id) ? $form->paragraph : '') }}</textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded shadow">
                Submit
            </button>
        </form>
    </div>

    </main>
    </div>
@endsection

