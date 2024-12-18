@extends('backend.backend_layout.master')
@section('content')
    <div class="container mx-auto mt-5">
        <h1 class="text-3xl font-bold text-center mb-5">Category List</h1>
        <a href="{{ route('product.create') }}" class="bg-green-500 text-white px-4 py-2 rounded float-right mb-3">
            <i class="fas fa-plus"></i> Add New
        </a>
        <table class="min-w-full bg-white border border-gray-200 mt-4">
            <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-2 px-4 border">ID</th>
                <th class="py-2 px-4 border">Title</th>
                <th class="py-2 px-4 border">Image</th>
                <th class="py-2 px-4 border">Price</th>
                <th class="py-2 px-4 border">Brand ID</th>
                <th class="py-2  border">Category ID</th>
                <th class="py-2  border">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr class="border-b">
                    <td class="py-2 px-4 border">{{ $product->id }}</td>
                    <td class="py-2 px-4 border">{{ $product->title }}</td>
                    <td class="py-2 px-4 border">
                        <img src="{{ Storage::url($product->img) }}" alt="product Image" class="w-24 h-auto">
                    </td>
                    <td class="py-2 px-4 border">{{ $product->price }}</td>
                    <td class="py-2 px-4 border">{{ $product->brand->title ?? '' }}</td>
                    <td class="py-2 px-4 border">{{ $product->category->title ?? '' }}</td>
                    <td class="py-2 pl-5 border">
                        <a href="{{ route('product.edit' , $product->id ) }}"
                           class="bg-blue-500 text-white px-2 py-1 rounded">Edit</a>
                        <form action="{{ route('product.delete' , $product->id) }}" method="post"
                              style="display: inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>

@endsection

