@extends('backend.backend_layout.master')
@section('content')
    <div class="container mx-auto mt-5 p-4">
        <h1 class="text-center text-3xl font-bold mb-5">Testimonial List</h1>
        <a href="{{ route('tag.create') }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded mb-5 float-right">
            <i class="fas fa-plus"></i> Add New
        </a>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
                <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-3 px-4 border-b text-left">ID</th>
                    <th class="py-3 px-4 border-b text-left">Title</th>
                    <th class="py-3 px-4 border-b text-left">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($hmmm as $hmm)
                <tr class="hover:bg-gray-100">
                    <td class="py-3 px-4 border-b">{{$hmm->id}}</td>
                    <td class="py-3 px-4 border-b">{{ $hmm->title }}</td>
                    <td class="px-6 py-4 border-b border-gray-200 text-gray-800 flex space-x-2">
                        <a href="{{ route('tag.edit', $hmm->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded text-sm">Edit</a>
                        <form action="{{ route('tag.delete', $hmm->id) }}" method="POST" class="inline-block">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded text-sm">Delete</button>
                        </form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
