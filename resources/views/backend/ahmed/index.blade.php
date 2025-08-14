@extends('backend.backend_layout.master')
@section('content')
    <div class="container mx-auto mt-5 px-4">
        <h1 class="text-3xl font-bold text-center mb-5">Category List</h1>
        <a href="{{ route('ahmed.create') }}"
           class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded mb-3 float-right inline-flex items-center">
            <i class="fas fa-plus mr-2"></i> Add New
        </a>

        <div class="overflow-x-auto mt-4">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-2 px-4 border">ID</th>
                    <th class="py-2 px-4 border">Image</th>
                    <th class="py-2 px-4 border">Title</th>
                    <th class="py-2 px-4 border">Country</th>
                    <th class="py-2 px-4 border">State</th>
                    <th class="py-2 px-4 border">City</th>
                    <th class="py-2 px-4 border">Short Description</th>
                    <th class="py-2 px-4 border">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($chupapi as $chupap)
                    <tr class="border-b ">
                        <td class="py-2 px-4 border hover:bg-gray-100">{{ $chupap->id }}</td>
                        <td class="py-2 px-4 border hover:bg-gray-100">
                            <img src="{{ Storage::url($chupap->img) }}" alt="Product Image" class="w-24 h-auto mx-auto">
                        </td>
                        <td class="py-2 px-4 border hover:bg-gray-100">{{ $chupap->title }}</td>
                        <td class="py-2 px-4 border hover:bg-gray-100">{{ $chupap->country }}</td>
                        <td class="py-2 px-4 border hover:bg-gray-100">{{ $chupap->state }}</td>
                        <td class="py-2 px-4 border hover:bg-gray-100">{{ $chupap->city }}</td>
                        <td class="py-2 px-4 border hover:bg-gray-100">{{ $chupap->description }}
                        <td class="py-2 px-4 border hover:bg-gray-100">
                            <a href="{{ route('ahmed.edit', $chupap->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">Edit</a>
                            <form action="{{ route('ahmed.delete', $chupap->id) }}" method="post" class="inline-block">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
