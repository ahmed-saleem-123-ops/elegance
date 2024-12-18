@extends('backend.backend_layout.master')
@section('content')
<div class="container mx-auto mt-5">
    <h1 class="text-2xl font-bold text-center mb-5">Category List</h1>
    <div class="flex justify-end mb-3">
        <a href="{{ route('category.create') }}" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded">
            <i class="fas fa-plus mr-2"></i> Add New
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-3 px-4 border-b">ID</th>
                <th class="py-3 px-4 border-b">Title</th>
                <th class="py-3 px-4 border-b">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($edits as $edit)
                <tr class="hover:bg-gray-100">
                    <td class="py-3 px-4 border-b text-center">{{ $edit->id }}</td>
                    <td class="py-3 px-4 border-b text-center">{{ $edit->title }}</td>
                    <td class="py-3 px-4 border-b text-center">
                        <a href="{{ route('category.edit', $edit->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded text-sm">Edit</a>
                        <form action="{{ route('category.delete', $edit->id) }}" method="post" class="inline-block">
                            @csrf
                            @method('DELETE')
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
