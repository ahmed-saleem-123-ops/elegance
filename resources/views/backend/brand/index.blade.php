@extends('backend.backend_layout.master')
@section('content')

    <div class="container mx-auto p-4 mt-5">
        <h1 class="text-center text-3xl font-bold mb-5">Category List</h1>
        <div class="flex justify-end mb-4">
            <a href="{{ route('brand.create') }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">
                <i class="fas fa-plus"></i> Add New
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 mt-4">
                <thead>
                <tr>
                    <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-800 text-white text-left text-sm uppercase font-semibold">ID</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-800 text-white text-left text-sm uppercase font-semibold">Title</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-800 text-white text-left text-sm uppercase font-semibold">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($views as $view)
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 border-b border-gray-200 text-gray-800">{{ $view->id }}</td>
                        <td class="px-6 py-4 border-b border-gray-200 text-gray-800">{{ $view->title }}</td>
                        <td class="px-6 py-4 border-b border-gray-200 text-gray-800 flex space-x-2">
                            <a href="{{ route('brand.edit', $view->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded text-sm">Edit</a>
                            <form action="{{ route('brand.delete', $view->id) }}" method="POST" class="inline-block">
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


    </main>
    </div>

@endsection